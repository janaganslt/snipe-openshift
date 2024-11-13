<?php

namespace App\Actions\Assets;

use App\Exceptions\CheckoutNotAllowed;
use App\Http\Requests\ImageUploadRequest;
use App\Models\Asset;
use App\Models\AssetModel;
use App\Models\Company;
use App\Models\Location;
use App\Models\Setting;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\MessageBag;

class StoreAssetAction
{
    /**
     * @throws CheckoutNotAllowed
     */
    public static function run(
        $model_id,//gonna make these two optional for now... we can either make them required here or use the spread operator when calling...
        $status_id,//
        ImageUploadRequest $request, //temp for handleImages - i'd like to see that moved to a helper or something - or maybe just invoked at the extended request level so that it doesn't need to be done in the action?
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

        $last_audit_date = null,
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
        $asset->last_audit_date = $last_audit_date;
        $asset->location_id = $location_id;

        // set up next audit date
        if (!empty($settings->audit_interval)) {
            $asset->next_audit_date = Carbon::now()->addMonths($settings->audit_interval)->toDateString();
        }

        // Set location_id to rtd_location_id ONLY if the asset isn't being checked out
        if (!$assigned_user && !$assigned_asset && !$assigned_location) {
            $asset->location_id = $rtd_location_id;
        }

        //api only
        if ($request->has('image_source')) {
            $request->offsetSet('image', $request->offsetGet('image_source'));
        }

        if ($request->has('image')) {
            $asset = $request->handleImages($asset);
        }

        $model = AssetModel::find($model_id);

        // added instanceof, was only in api before
        if (($model) && ($model instanceof AssetModel) && ($model->fieldset)) {
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

        // this is the api's custom fieldset logic, is there a real difference???????
        //if (($model) && ($model instanceof AssetModel) && ($model->fieldset)) {
        //    foreach ($model->fieldset->fields as $field) {
        //
        //        // Set the field value based on what was sent in the request
        //        $field_val = $request->input($field->db_column, null);
        //
        //        // If input value is null, use custom field's default value
        //        if ($field_val == null) {
        //            Log::debug('Field value for '.$field->db_column.' is null');
        //            $field_val = $field->defaultValue($request->get('model_id'));
        //            Log::debug('Use the default fieldset value of '.$field->defaultValue($request->get('model_id')));
        //        }
        //
        //        // if the field is set to encrypted, make sure we encrypt the value
        //        if ($field->field_encrypted == '1') {
        //            Log::debug('This model field is encrypted in this fieldset.');
        //
        //            if (Gate::allows('assets.view.encrypted_custom_fields')) {
        //
        //                // If input value is null, use custom field's default value
        //                if (($field_val == null) && ($request->has('model_id') != '')) {
        //                    $field_val = Crypt::encrypt($field->defaultValue($request->get('model_id')));
        //                } else {
        //                    $field_val = Crypt::encrypt($request->input($field->db_column));
        //                }
        //            }
        //        }
        //        if ($field->element == 'checkbox') {
        //            if (is_array($field_val)) {
        //                $field_val = implode(',', $field_val);
        //            }
        //        }
        //    }


        if ($asset->isValid() && $asset->save()) {
            if (request('assigned_user')) {
                $target = User::find(request('assigned_user'));
                // the api doesn't have these location-y bits - good reason?
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

            //this was in api and not gui
            if ($asset->image) {
                $asset->image = $asset->getImageUrl();
            }
            return $asset;
        } else {
            dd($asset->getErrors()); //need to figure out how to return errors from watson validating...
        }
    }
}