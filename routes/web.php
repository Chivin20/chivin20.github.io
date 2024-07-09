<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/ourevent', function () {
    return view('ourevent');
})->name('ourevent');

Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');

Route::get('/ourteam', function () {
    return view('ourteam');
})->name('ourteam');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');
