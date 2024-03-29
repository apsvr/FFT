<?php

namespace App\Http\Controllers;

use Session; 
use App\Models\Users;
use App\Models\Order;
use App\Models\Holidays;
use App\Models\Bouquet;
use App\Models\Reviews;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

 
class AdminController extends Controller
{
    public function profile(Request $request){
        $user = Users::find(auth()->id()); 
        $orders = Order::get();
        return view('admin_account', compact('user', 'orders'));
    }

    function catalog_admin(){
        $bouquets = Bouquet::get();
        $reviews = Reviews::get();
        $holidays = Holidays::get();
        return view('catalog_admin', compact('bouquets', 'reviews', 'holidays'));
    }

    function add_bouquet(Request $request){
        $request->photoBouquet = Storage::disk('public')->put('/images', $request->photoBouquet);
        $bouquet = Bouquet::create([
            'holiday_id' => $request->holiday,
            'photoBouquet' => $request->photoBouquet,
            'nameBouquet' => $request->nameBouquet,
            'price' => $request->price,
        ]);

        $bouquet->save();
        return redirect('/catalog_admin');
    }
}
