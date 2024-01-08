<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Account;
use App\Models\User;
use App\Models\Still;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class AccountList extends Component
{


    use WithPagination;
    public $searchTerm="";
    public $id;
    public $acountname;
    public $businessnumber;
    public $businessAddress;
    public $accountStatus;
    
    public function render()
    {
        
      
        
        return view('livewire.account-list',['accounts'=>Account::where('acountname','like','%'.$this->searchTerm.'%')
                                                                        
                                                                        ->orWhere('businessnumber','like','%'.$this->searchTerm.'%')
                                                                        ->orWhere('businessAddress','like','%'.$this->searchTerm.'%')
                                                                        ->orWhere('accountStatus','like','%'.$this->searchTerm.'%')
                                                                        ->orderBy('id','desc')->paginate(10)]);
        
    }

    public function update(){
        // public $stillname ='';
        // public $stilltype ='';
        // public $stillbuilt ='';
        // public $stillLocation='';
    
        $validated = $this->validate([ 
            'acountname' => 'required',
            'businessnumber' => 'required|min:11',
            'businessAddress' => 'required',
            'accountStatus'=>'required',
    
        ]);
        $acc = Account::find($this->id);
        $acc->acountname=$this->acountname;
        $acc->businessnumber=$this->businessnumber;
        $acc->businessAddress=$this->businessAddress;
        $acc->accountStatus=$this->accountStatus;
        // dd($still->stillBuildDate);
        // Still::save();
        if($acc->save()){
            $this->id="";
            $this->acountname="";
            $this->businessnumber="";
            $this->businessAddress="";
            $this->accountStatus="";
            $this->dispatch('closemodal');
            
             session()->flash('success', "Account details of account id  $this->id updated successfully!");
             
                     return view('livewire.account-list');
           }else{
            session()->flash('error','There was some error in updating the Still details');
    
            return view('livewire.account-list');
          }
      
     }
    
    public function delete($accID){

        
        DB::transaction(function () use ($accID)  {
              
                
            $acctobedeleted=Account::find($accID);
            
            $deletedS=Still::where('account_id',$accID)->delete();
           
            $deletedU=User::where('account_id',$accID)->delete();
            $acctobedeleted->delete();
           
           
           
        });
        session()->flash('success', "THe account has been deleted. The user and stills associated with the account has been deleted successfully!");
        $this->dispatch('closemodal');

        return view('livewire.account-list');
       
    //    if($acctobedeleted->delete()){
    //     $message="Account details deleted successfully!";
        
    //              return view('livewire.still-list')->with('success',$message);
    //    }else{

    //     return view('livewire.still-list')->with('error','There was some error in deleting the Still details');
    //   }
}

public function createAccount(){

    $validated = $this->validate([ 
        'acountname' => 'required',
            'businessnumber' => 'required|min:11',
            'businessAddress' => 'required',
            'accountStatus'=>'required',
    

    ]);
        $acc = new Account;
        $acc->acountname=$this->acountname;
        $acc->businessnumber=$this->businessnumber;
        $acc->businessAddress=$this->businessAddress;
        $acc->accountStatus=$this->accountStatus;
   

  
    // dd($still->stillBuildDate);
    // Still::save();
    if($acc->save()){
        $this->dispatch('closemodal');
        $message="New Account is created successfully!";
         session()->flash('success', "Account created successfull");
         
                 return view('livewire.still-list')->with('success',$message);
       }else{
        session()->flash('error','There was some error in creating a new account');
        return view('livewire.account-list');
      }

}


public function populatemodal($id, $acountname, $businessnumber, $businessAddress, $accountStatus)
{
    
         $this->id=$id;
         $this->acountname=$acountname;
         $this->businessnumber=$businessnumber;
         $this->businessAddress=$businessAddress;
        $this->accountStatus=$accountStatus;
   
}

}
