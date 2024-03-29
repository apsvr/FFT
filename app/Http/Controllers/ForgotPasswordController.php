<?php

namespace App\Http\Controllers;

use Session; 
use App\Models\Users;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends Controller
{
    public function recovery(Request $request)
    {
        return view('recoverypassword');
    }

    public function forgotPassword(Request $request)
    {
        $number = $request->get('phoneNumber');
        return view('newpassword', compact("number"));
    }

    public function setNewPassword(Request $request)
    {
        if($request->password == $request->repeatpassword){
            $updateDetails=array(
                'password' => Hash::make($request->password),
            );
            
            Users::where('login', $request->phoneNumber)
                ->update($updateDetails);
            
            return redirect()->route('aut');
        }

        return back();
    }
}
