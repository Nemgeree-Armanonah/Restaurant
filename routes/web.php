<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/food',function(){
    return view('food');
});

Route::post('/contact',function(){
    $first_name = request('first_name');
    $last_name = request('last_name');
    $email = request('email');
    $phone = request('phone');
    $message = request('message');

    dump($first_name);


    // return redirect('/') ->with('message', 'Thanks for your Feedback');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
