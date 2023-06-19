<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registroController;
use App\Http\Controllers\ContactController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/layouts', function () {
    return view('layouts.app');
});

Route::get('/planes', function () {
    return view('planes');
});

Route::get('/login2', function () {
    return view('login2');
});

Route::get('/dietas', function () {
    return view('dietas');
});

Route::get('/contactSally', function () {
    return view('contactSally');
});





;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

