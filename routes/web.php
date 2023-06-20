<?php
use App\Http\Controllers\DietaController;
use App\Http\Controllers\RutinaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registroController;

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
    return view('home');
});

Route::get('/registrarse', [registroController::class, 'registrar'])->name('registro.index');

Route::get('/dieta', 'DietaController@index')->name('dieta.index');
Route::post('/dieta', 'DietaController@sendMessage')->name('dieta.sendMessage');

Route::get('/rutina', 'RutinaController@index')->name('rutina.index');
Route::post('/rutina', 'RutinaController@sendMessage')->name('rutina.sendMessage');

Route::get('/dieta', [DietaController::class, 'index'])->name('dieta.index')->middleware();;
Route::post('/dieta', [DietaController::class, 'sendMessage'])->name('dieta.sendMessage');

Route::get('/rutina', [RutinaController::class, 'index'])->name('rutina.index')->middleware();;
Route::post('/rutina', [RutinaController::class, 'sendMessage'])->name('rutina.sendMessage');