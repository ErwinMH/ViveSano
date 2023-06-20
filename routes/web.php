<?php
use App\Http\Controllers\DietaController;
use App\Http\Controllers\RutinaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registroController;
use App\Http\Controllers\Auth\LoginController;
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


Auth::routes();

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/registrarse', [registroController::class, 'registrar'])->name('registro.index');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/login2', function () {
    return view('login2');
});


Route::post('/login2', [LoginController::class, 'login'])->name('login');
    

Route::middleware(['auth'])->group(function () {

    Route::get('/dieta', 'DietaController@index')->name('dieta.index');
    Route::post('/dieta', 'DietaController@sendMessage')->name('dieta.sendMessage');
    
    Route::get('/rutina', 'RutinaController@index')->name('rutina.index');
    Route::post('/rutina', 'RutinaController@sendMessage')->name('rutina.sendMessage');
    
    Route::get('/dieta', [DietaController::class, 'index'])->name('dieta.index')->middleware();;
    Route::post('/dieta', [DietaController::class, 'sendMessage'])->name('dieta.sendMessage');
    
    Route::get('/rutina', [RutinaController::class, 'index'])->name('rutina.index')->middleware();;
    Route::post('/rutina', [RutinaController::class, 'sendMessage'])->name('rutina.sendMessage');
    
    Route::get('/layouts', function () {
        return view('layouts.app');
    });
    
    Route::get('/planes', function () {
        return view('planes');
    });
    

    Route::get('/dietas', function () {
        return view('dietas');
    });
    
    Route::get('/contactSally', function () {
        return view('contactSally');
    });
    
    Route::get('/admin', function () {
        return view('admin.index');
    });
    
    Route::get('/usuarios', function () {
        return view('crud.index');
    });
    
    

});




