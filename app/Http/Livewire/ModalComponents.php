<?php

namespace App\Http\Livewire;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ModalComponents extends Component
{
    public $modal_change;
    public $multiCompany;

    protected $listeners = ['showModal' => 'showModal'];

    public function mount($multiCompany) {

        $this->multiCompany = $multiCompany;
        $this->emitSelf('showModal');
//        if($multiCompany) {
//            $this->dispatchBrowserEvent();
//        }
}
    public function multiCompanyAcknowledge(Request $request, $action){
        dd('hi',$action);
        if ($action =='cancel') {
            $this->modal_change = $request->session()->pull('company_uniq', 'null');
            return redirect()->back();
        }
        if ($action =='accept') {
            $this->modal_change = $request->session()->pull('company_uniq', 'null');
        }
    }
    public function showModal(){
        return view('livewire.modal-components');
    }
    public function render()
    {       $this->emitSelf($this->multiCompany);
            return view('livewire.modal-components');
    }
}
