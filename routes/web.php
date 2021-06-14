<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\Customers;
use App\Http\Controllers\ProductController;
use Laravel\Socialite\Facades\Socialite;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProductController::class, 'index'])->middleware('AlreadyLoggedIn');

// Route::get('/home', function () {
//     return view('index');
// })->middleware('AlreadyLoggedIn');
Route::get('/registration', function () {
    return view('registration');
})->middleware('AlreadyLoggedIn');
Route::post('/registration', [Customers::class, 'registration']);

Route::get('/login', [Customers::class, 'loginIndex'])->middleware('AlreadyLoggedIn');
Route::post('/login', [Customers::class, 'storeIndex']);

Route::get('/homepage', [Customers::class, 'homePage'])->middleware('isLogged');
Route::get('/logout', [Customers::class, 'logOut']);

Route::get('/auth/redirect', function () {
    return Socialite::driver('facebook')->redirect();
});

Route::get('/auth/callback', function () {
    $user = Socialite::driver('facebook')->user();
    return view('login');
});