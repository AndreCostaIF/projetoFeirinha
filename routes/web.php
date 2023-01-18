<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
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

Route::get('/usuarios/{id?}', [UsuarioController::class, 'indexUsuario'])->name('indexUsuario');
Route::post('/usuarios/salvar', [UsuarioController::class,'salvar'])->name('salvarUsuario');
Route::get('/usuarios/novo/deletar/{id}', [UsuarioController::class, 'deletar'])->name('deletarUsuario');