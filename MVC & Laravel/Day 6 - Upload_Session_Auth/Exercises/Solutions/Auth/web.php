<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/account', function () {
    $user = Auth::user();
    return view('account', ['user' => $user]);
})->middleware(['auth'])->name('account');

Route::get('/test', function () {

    // Check if the user is logged-in
    if (Auth::check()) {
        // Retrieve the current logged-in user 
        $user = Auth::user();
        $id = Auth::id();
        dd($user);
    }
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
