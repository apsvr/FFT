<?php

namespace App\Http\Controllers;

use Session; 
use App\Models\Users;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
 
class AuthController extends Controller
{
    function authorization(){
        return view('authorization');
    }

    function authorizationPost(Request $request)
    {
        $valid = $request->validate([
            'login' => 'required',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($valid)){
            $request->session()->regenerate();

            if((int) auth()->user()->role_id !== 2){
                return redirect(RouteServiceProvider::HOME);
            }
            elseif((int) auth()->user()->role_id === 2){
                return redirect('/admin_account');
            }
        }

        return back();
    }
}
