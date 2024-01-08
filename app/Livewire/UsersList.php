<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Account;
use App\Models\User;
use App\Models\Still;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Livewire\WithPagination;
class UsersList extends Component
{

    use WithPagination;
    public $searchTerm="";
    public $firstname="";
    public $lastname="";
    public $email="";
    public $userType;
    public $account_id ="";
    public $password;
    public $password_confirmation;
    public $user_id;
    public $accountlist;

    public function render()
    {
        
        return view('livewire.users-list',['accounts'=>Account::select('id','acountname')->get(),'Users'=>User::where('firstname','like','%'.$this->searchTerm.'%')
                                                                        ->orWhere('lastname','like','%'.$this->searchTerm.'%')
                                                                        ->orWhere('email','like','%'.$this->searchTerm.'%')
                                                                        ->orWhere('userType','like','%'.$this->searchTerm.'%')
                                                                        ->orWhereHas('account', function($query){

                                                                            $query->where('acountname', 'like','%'.$this->searchTerm.'%');
                                                        
                                                                                    })
                                                                        ->orderBy('id','desc')->paginate(10)]);
    }

   
    public function delete($userID){

       
        $usertobedeleted=User::find($userID);
       if($usertobedeleted->delete()){
        $this->dispatch('closemodal');
       
         session()->flash('success', "Still details with userid $userID deleted successfully!");
                 return view('livewire.users-list');
       }else{
        session()->flash('error','There was some error in deleting the Still details');
        return view('livewire.users-list');
      }
}

public function update(){
    
    
   
    $validated = $this->validate([ 
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => ['required','email',Rule::unique('users', 'email')->ignore($this->user_id)],
        'account_id'=>'required',

    ]);
  
    $user = User::find($this->user_id);
   
    $user->firstname=$this->firstname;
    $user->lastname=$this->lastname;
    $user->email=$this->email;
    $user->account_id =$this->account_id;

    // dd($still->stillBuildDate);
    // Still::save();
   
    if($user->save()){
        $this->resetForm();
        $this->dispatch('closemodal');
      
         session()->flash('success', "User details has been updated successfully!");
         
                 return view('livewire.users-list');
       }else{
        session()->flash('error','There was some error in updating the Still details');

        return view('livewire.users-list');
      }
  
 }

 public function create(){

    $validated = $this->validate([ 
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => ['required','email',Rule::unique('users', 'email')],
        'password'=>['required','confirmed','min:6','regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'],
        'password_confirmation' => 'required|min:6',
        'account_id'=>'required',

    ]);
        $user = new User;
        $user->firstname=$this->firstname;
        $user->lastname=$this->lastname;
        $user->email=$this->email;
        $user->	userType="supplier";
        $user->password=bcrypt($this->password);
        $user->account_id =$this->account_id;
   

    if($user->save()){
        $this->resetForm();
        $this->dispatch('closemodal');
       
         session()->flash('success', "User created successfull");
         
                 return view('livewire.users-list');
       }else{
        session()->flash('error','There was some error in creating a new account');
        return view('livewire.users-list');
      }

}

public function populatemodal($id, $firstname, $lastname, $email,$userType,$account_id)
{
    
         $this->user_id=$id;
         $this->firstname=$firstname;
         $this->lastname=$lastname;
         $this->email=$email;
         $this->userType=$userType;
         $this->account_id=$account_id;
         
   
}



public function resetForm()
    {

       
        $this->firstname = null;
        $this->lastname = null;
        $this->email = null;
        $this->account_id = null;
        $this->password = null;
        $this->password_confirmation = null;
    }

}
