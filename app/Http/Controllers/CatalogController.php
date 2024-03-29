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
 
class CatalogController extends Controller
{
    function catalog(){
        $bouquets = Bouquet::get();
        $reviews = Reviews::get();
        return view('catalog', compact('bouquets', 'reviews'));
    }

    function catalog_admin(){
        $bouquets = Bouquet::get();
        $reviews = Reviews::get();
        return view('catalog_admin', compact('bouquets', 'reviews'));
    }

    function holiday($holiday){
        $holiday = Holidays::where('code', $holiday)->first();
        $bouquets = Bouquet::where('holiday_id', $holiday->id)->get();
        $reviews = Bouquet::find(2)->reviews;
        
        return view('catalog', compact('bouquets', 'reviews'));
    }

    function order(Request $request){
        $order = Order::create([
            'user_id' => auth()->id(),
            'bouquet_id' => $request->bouquet_id,
            'orderStatus_id' => 1,
            'address' => $request->address,
            'wishes' => $request->wishes
        ]);

        $order->save();
        return redirect('/catalog');
    }
}
