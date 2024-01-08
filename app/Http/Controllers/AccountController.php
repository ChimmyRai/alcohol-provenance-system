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
class AccountController extends Controller
{
    /**
     * Display the user's account form.
     */
    public function edit(Request $request): View
    {
       
        $user=User::find(Auth::id());
        
        return view('account.edit', [
            'account' =>$user->account,
        ]);
    }

    /**
     * Update the Account information.
     */
    public function update(Request $request): RedirectResponse
    {
        $user=User::find(Auth::id());
        
       $request->validate([
            'acountname' => ['required','max:255',Rule::unique('accounts')->ignore($user->account->id),],
            'businessnumber' =>  ['required','alpha_num',Rule::unique('accounts')->ignore($user->account->id),],
            'businessAddress' => 'required|string',
            'accountStatus'=>'required|in:enabled,disabled',
        ]);
       
        $account=Account::find( $user->account_id);
        $account->fill($request->all());
        $account->update();

        return Redirect::route('account.edit')->with('status', 'profile-updated');
    }
}
