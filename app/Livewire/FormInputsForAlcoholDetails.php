<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Account;
use App\Models\User;
use App\Models\Still;
use Illuminate\Support\Facades\Auth;


class FormInputsForAlcoholDetails extends Component
{

    public $start_uid;
    public $end_uid;
    public $sku;
    public $batchNumber;
    public $volume;
    public $bottle_number;
    public $Total_bottles_each_batch;
    public $productName;
    public $productVariety;
    public $productCategory;
    public $appearance;
    public $alcoholContent;
    public $creation_date;
    public $created_by;
    public $ingretype;
    public $origin;
    public $yeast;
    public $notes;
    public $Nose;
    public $Palate;
    public $Finish;
    public $process;
    public $stilldetails;
    public $caskType;
    public $charLevel;
    public $caskNumber;
    public $caskedDate;
    public $distillerName;
    public $barrelingDate;
    public $disorginDate;
    public $supplierBusinessName;
    public $supplierBusinessNumber;
    public $supplierPhysicalAddress;



    public function render()
    {
        $user=User::find(Auth::id());
        $acc=Account::find($user->account_id);
        $stills=$user->account->stills;
      
      return view('livewire.form-inputs-for-alcohol-details',['stills'=>$stills,'accounts'=>$acc]);
    }


    public function validateInput(){
     
    //   $validated = $this->validate([ 
    //     'start_uid' => 'required|numeric|min:1',
    //     'sku' => 'required|numeric|min:1',
    //     'volume' => 'required|numeric|min:1',
    //     'Total_bottles_each_batch'=>'required|numeric|min:1',
    //     'productName'=>'required|string',
    //     'productVariety'=>'required|string',
    //     'productCategory'=>'required|string',
    //     'appearance'=>'required|string',
    //     'alcoholContent'=>'required|numeric|min:0',
    //     'creation_date'=>'required|date',
    //     'created_by'=>'required|string',
    //     'ingretype'=>'required|string',
    //     'origin'=>'required|string',
    //     'yeast'=>'required|string',
    //     'notes'=>'string|nullable',
    //     'Nose'=>'string|nullable',
    //     'Palate'=>'string|nullable',
    //     'Finish'=>'string|nullable',
    //     'process'=>'string|required',
    //     'stilldetails'=>'string|required',
    //     'caskType'=>'string|required',
    //     'charLevel'=>'string|required',
    //     'caskNumber'=>'required|numeric|min:1',
    //     'caskedDate'=>'required|date',
    //     'distillerName'=>'string|required',
    //     'barrelingDate'=>'required|date',
    //     'disorginDate'=>'required|date',
    //     'batchNumber'=>'required|numeric|min:1',
       
        

    // ]);
   
    $this->dispatch('inputs-validated'); 
   

    }
}
