<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Account;
use App\Models\User;
use App\Models\Still;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class StillList extends Component
{
    use WithPagination;
    public $searchTerm="";
    public  $s;
    public $id;
    public $stillname ='';
    public $stilltype ='';
    public $stillbuilt ='';
    public $stillLocation='';

    public function updatingsearchTerm(){
        $this->resetPage();
   }
    public function render()
    {
        
        $user=User::find(Auth::id());

        $acc=Account::find($user->account_id);
   
        $this->stills=Still::paginate(2);
        // dd($stills);
        return view('livewire.still-list',['stills'=>Still::where('account_id','=',$user->account_id)
                                                        ->where('stillName','like','%'.$this->searchTerm.'%')
                                                        ->orWhere('stillType','like','%'.$this->searchTerm.'%')
                                                        ->orWhere('stillLocation','like','%'.$this->searchTerm.'%')
                                                        ->orWhere('stillBuildDate','like','%'.$this->searchTerm.'%')
                                                        
                                                        ->orderBy('id','desc')->paginate(4)]);
    }

    public function getSingleStills($stillID){

       
        //$this->s=Still::where('id','=',$stillID)->get();
        $this->s=Still::find($stillID);
    
        return view('livewire.still-list',['s'=>$this->s->stillType]);
        
       
    }


    public function delete($stillID){

        $this->dispatch('closemodal');
        $stilltobedeleted=Still::find($stillID);
       if($stilltobedeleted->delete()){
        $message="Still details with". $stillID ."successfully!";
         session()->flash('success', "Still details with $stillID deleted successfully!");
                 return view('livewire.still-list')->with('success',$message);
       }else{

        return view('livewire.still-list')->with('error','There was some error in deleting the Still details');
      }
}


public function updatestill(){
    // public $stillname ='';
    // public $stilltype ='';
    // public $stillbuilt ='';
    // public $stillLocation='';

    $validated = $this->validate([ 
        'stillname' => 'required',
        'stilltype' => 'required',
        'stillbuilt' => 'required|date',
        'stillLocation'=>'required',

    ]);
    $still = Still::find($this->id);
    $still->stillName=$this->stillname;
    $still->stillType=$this->stilltype;
    $still->stillLocation=$this->stillLocation;
    $still->stillBuildDate=$this->stillbuilt;
    // dd($still->stillBuildDate);
    // Still::save();
    if($still->save()){
        $this->resetForm();
        $this->dispatch('closemodal');
        $message="Still details with". $this->id ."successfully!";
         session()->flash('success', "Still details with $this->id updated successfully!");
         
                 return view('livewire.still-list');
       }else{

        session()->flash('error','There was some error in updating the Still details');

        return view('livewire.still-list');
      }
  
 }



 public function createStill(){

    $validated = $this->validate([ 
        'stillname' => 'required',
        'stilltype' => 'required',
        'stillbuilt' => 'required|date',
        'stillLocation'=>'required',

    ]);
    $still = new Still;
    $still->stillName=$this->stillname;
    $still->stillType=$this->stilltype;
    $still->stillLocation=$this->stillLocation;
    $still->stillBuildDate=$this->stillbuilt;
    $user=User::find(Auth::id());

    $acc=Account::find($user->account_id);

    $still->account_id=$acc->id;
    // dd($still->stillBuildDate);
    // Still::save();
    if($still->save()){
        $this->resetForm();
        $this->dispatch('closemodal');
        $message="New Still details with created successfully!";
         session()->flash('success', "Still details created successfull");
         
                 return view('livewire.still-list')->with('success',$message);
       }else{

        return view('livewire.still-list')->with('error','There was some error adding the Still details');
      }

}

public function resetForm()
    {

       
        $this->id=null;
         $this->stillname=null;
         $this->stilltype=null;
         $this->stillbuilt=null;
        $this->stillLocation=null;
    }



public function populatemodal($id, $stillName, $stillType, $stillBuildDate, $stillLocation)
{
   
         $this->id=$id;
         $this->stillname=$stillName;
         $this->stilltype=$stillType;
         $this->stillbuilt=$stillBuildDate;
        $this->stillLocation=$stillLocation;
   
}

}  