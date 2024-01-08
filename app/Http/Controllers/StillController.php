<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Account;
use App\Models\User;
use Illuminate\Validation\Rule;

class StillController extends Controller
{
     /**
     * Display the user's account form.
     */
    public function edit(Request $request): View
    {
       
        $user=User::find(Auth::id());
        // dd( $user->id);
        $accid=$user->account->id;
      
        dd($user->account->stills);
      

        return view('account.edit', [
            'account' =>$user->account,
        ]);
    }
}
