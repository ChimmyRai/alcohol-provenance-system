<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    public function index(){

        if(Auth::id()){

            $usertype=Auth()->user()->userType;
            if( $usertype=='supplier'){

                return view('supplierdashboard');
            } else if($usertype=='admin'){

                return view('admindashboard');
            }else{

                return redirect()->back();
            }

        }

    }
}
