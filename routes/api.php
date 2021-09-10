<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContatoController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            

Route::post('/login', [LoginController::class, 'loginAction'])->name('api.loginAction');
Route::post('/cadastro', [LoginController::class, 'cadastroAction'])->name('api.cadastroAction');

/*Usuários*/

Route::get('/users', [UserController::class, 'userAction'])->name('api.userAction'); 

Route::get('user/{id}',[UserController::class, 'show'])->name('api.show');

Route::post('/user',[UserController::class, 'store'])->name('api.store');

Route::put('user/{id}',[UserController::class, 'update'])->name('api.update');  

Route::delete('user/{id}', [UserController::class, 'delete'])->name('api.delete');

/*Contatos*/

Route::get('/contatos',[ContatoController::class, 'index'])->name('api.contatoindex');

Route::get('/contato/{id}',[ContatoController::class, 'show'])->name('api.contatoshow');

Route::post('/contato',[ContatoController::class, 'store'])->name('api.contatostore');