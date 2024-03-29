<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { return view('home'); })->middleware('guest');

Route::get('/registration', 'App\Http\Controllers\RegController@registration')->middleware('guest')->name('reg');
  
Route::post('/registration', 'App\Http\Controllers\RegController@registrationPost');

Route::get('/authorization', 'App\Http\Controllers\AuthController@authorization')->middleware('guest')->name('aut');
  
Route::post('/authorization', 'App\Http\Controllers\AuthController@authorizationPost');

Route::get('/logout', 'App\Http\Controllers\ProfileController@logout')->middleware('auth')->name('logout');

Route::get('/profile', 'App\Http\Controllers\ProfileController@profile')->middleware('auth');


Route::get('/recovery', 'App\Http\Controllers\ForgotPasswordController@recovery')->middleware('guest');

Route::post('/recov', 'App\Http\Controllers\ForgotPasswordController@forgotPassword')->middleware('guest');

Route::post('/newpassword', 'App\Http\Controllers\ForgotPasswordController@setNewPassword')->name('newpassword')->middleware('guest');


Route::get('/catalog', 'App\Http\Controllers\CatalogController@catalog');

Route::get('/catalog/{holidays}', 'App\Http\Controllers\CatalogController@holiday');

Route::post('/order', 'App\Http\Controllers\CatalogController@order');

### ADMIN ###

Route::get('/catalog_admin', 'App\Http\Controllers\AdminController@catalog_admin')->middleware('auth', 'admin');

Route::get('/admin_account', 'App\Http\Controllers\AdminController@profile')->middleware('auth', 'admin');

Route::post('/add_bouquet', 'App\Http\Controllers\AdminController@add_bouquet')->middleware('auth', 'admin');

###

Route::get('/home', function () {
    return view('home');
});
