<?php

namespace App\Http\Controllers;

use Session; 
use App\Models\Users;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class RegController extends Controller
{
    function registration(){
        return view('register');
    }

    function registrationPost(Request $request){
        
        $request->photo = Storage::disk('public')->put('/images', $request->photo);

        $user = Users::create([
            'role_id' => 1,
            'name'=> $request->name,
            'photoUser'=> $request->photo,
            'login'=> $request->login,
            'password'=> Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}