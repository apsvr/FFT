<?php

namespace App\Http\Controllers;

use Session; 
use App\Models\Users;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{ 
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('aut');
    }

    public function profile(Request $request){
        $user = Users::find(auth()->id()); 
        return view('/profile', compact('user'));
    }

    
}
