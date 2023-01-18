<?php

use App\Http\Controllers\categoria;
use App\Http\Controllers\login;
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

Route::get('/login', [login::class, 'index'])->name('login');
Route::get('/feira', [login::class, 'logar'])->name('logar');

//tem que passar o id da categoria aqui; (n coloquei pq n tenho nd cadastrado)
Route::get('/categoria', [categoria::class, 'buscarProdutos'])->name('produtos');

Route::get('/usuarios/{id?}', [UsuarioController::class, 'indexUsuario'])->name('indexUsuario');
Route::post('/usuarios/salvar', [UsuarioController::class,'salvar'])->name('salvarUsuario');
Route::get('/usuarios/novo/deletar/{id}', [UsuarioController::class, 'deletar'])->name('deletarUsuario');
