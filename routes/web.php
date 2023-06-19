<?php
use App\Http\Controllers\ChatController;
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

Route::get('/chat', 'ChatController@index')->name('chat.index');
Route::post('/chat', 'ChatController@sendMessage')->name('chat.sendMessage');

Route::get('/chat', [ChatController::class, 'index'])->name('chat.index')->middleware();;
Route::post('/chat', [ChatController::class, 'sendMessage'])->name('chat.sendMessage');