<?php

namespace App\Actions\Assets;

use App\Actions\BaseAction;
use App\Exceptions\CheckoutNotAllowed;
use App\Models\Asset;
use App\Models\AssetModel;
use App\Models\Company;
use App\Models\Location;
use App\Models\Setting;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\MessageBag;

class StoreAssetAction extends BaseAction
{
    public static function run(
        $model_id,//gonna make these two optional for now... we can either make them required here or use the spread operator when calling...
        $status_id,//
        $name = null,
        $serial = null,
        $company_id = null,
        $asset_tag = null,
        $order_number = null,
        $notes = null,
        $user_id = null,
        $warranty_months = null,
        $purchase_cost = null,
        $asset_eol_date = null,
        $purchase_date = null,
        $assigned_to = null,
        $supplier_id = null,
        $requestable = null,
        $rtd_location_id = null,
        $location_id = null, //do something with this
        $files = null,
        $byod = 0,
        $assigned_user = null,
        $assigned_asset = null,
        $assigned_location = null,
        $custom_fields = null,
        $request = null, //temp for handleImages
        $next_audit_date = null,
    )
    {
        $settings = Setting::getSettings();

        // initial setting up of asset
        $asset = new Asset();
        $asset->model()->associate(AssetModel::find($model_id));
        $asset->name = $name;
        $asset->serial = $serial;
        $asset->asset_tag = $asset_tag;
        $asset->company_id = Company::getIdForCurrentUser($company_id);
        $asset->model_id = $model_id;
        $asset->order_number = $order_number;
        $asset->notes = $notes;
        $asset->created_by = auth()->id();
        $asset->status_id = $status_id;
        $asset->warranty_months = $warranty_months;
        $asset->purchase_cost = $purchase_cost;
        $asset->purchase_date = $purchase_date;
        $asset->asset_eol_date = $asset_eol_date;
        $asset->assigned_to = $assigned_to;
        $asset->supplier_id = $supplier_id;
        $asset->requestable = $requestable;
        $asset->rtd_location_id = $rtd_location_id;
        $asset->byod = $byod;

        // set up next audit date
        if (!empty($settings->audit_interval)) {
            $asset->next_audit_date = Carbon::now()->addMonths($settings->audit_interval)->toDateString();
        }

        // Set location_id to rtd_location_id ONLY if the asset isn't being checked out
        if (!$assigned_user && !$assigned_asset && !$assigned_location) {
            $asset->location_id = $rtd_location_id;
        }

        if ($request->has('image')) {
            $asset = $request->handleImages($asset);
        }

        $model = AssetModel::find($model_id);

        if (($model) && ($model->fieldset)) {
            foreach ($model->fieldset->fields as $field) {
                if ($field->field_encrypted == '1') {
                    if (Gate::allows('assets.view.encrypted_custom_fields')) {
                        if (is_array($request->input($field->db_column))) {
                            $asset->{$field->db_column} = Crypt::encrypt(implode(', ', $request->input($field->db_column)));
                        } else {
                            $asset->{$field->db_column} = Crypt::encrypt($request->input($field->db_column));
                        }
                    }
                } else {
                    if (is_array($request->input($field->db_column))) {
                        $asset->{$field->db_column} = implode(', ', $request->input($field->db_column));
                    } else {
                        $asset->{$field->db_column} = $request->input($field->db_column);
                    }
                }
            }
        }

        if ($asset->isValid() && $asset->save()) {
            if (request('assigned_user')) {
                $target = User::find(request('assigned_user'));
                $location = $target->location_id;
            } elseif (request('assigned_asset')) {
                $target = Asset::find(request('assigned_asset'));
                $location = $target->location_id;
            } elseif (request('assigned_location')) {
                $target = Location::find(request('assigned_location'));
                $location = $target->id;
            }

            if (isset($target)) {
                $asset->checkOut($target, auth()->user(), date('Y-m-d H:i:s'), $request->input('expected_checkin', null), 'Checked out on asset creation', $request->get('name'), $location);
            }
        }

        if ($asset->save()) {
            return $asset;
        } else {
            return $asset->getErrors();
        }
    }
}