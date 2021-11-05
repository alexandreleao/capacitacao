<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
//use App\Http\Controllers\{ LoginController, UserController, ContatoController,
   // PostController, ConteudoController
//};
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            

Route::post('/login', [LoginController::class, 'loginAction'])->name('api.loginAction');
Route::post('/cadastro', [LoginController::class, 'cadastroAction'])->name('api.cadastroAction');
*/
/*Usuários

Route::get('/users', [UserController::class, 'userAction'])->name('api.userAction'); 

Route::get('user/{id}',[UserController::class, 'show'])->name('api.show');

Route::post('/user',[UserController::class, 'store'])->name('api.store');

Route::put('user/{id}',[UserController::class, 'update'])->name('api.update');  

Route::delete('user/{id}', [UserController::class, 'delete'])->name('api.delete');
*/
/*Contatos

Route::get('/contatos',[ContatoController::class, 'index'])->name('api.contatoindex');

Route::get('/contato/{id}',[ContatoController::class, 'show'])->name('api.contatoshow');

Route::post('/contato',[ContatoController::class, 'store'])->name('api.contatostore');
*/

/*Post

Route::get('/posts',[PostController::class, 'lista'])->name('api.postslista');

Route::get('/posts/{id}',[PostController::class,'show'])->name('api.postshow');

Route::post('/post',[PostController::class,'store'])->name('api.poststore');
*/

/*Conteúdo 

Route::get('/conteudos',[ConteudoController::class,'index'])->name('api.conteudoindex');

Route::get('/conteudos/{id}',[ConteudoController::class,'show'])->name('api.conteudoshow');

Route::post('/conteudo',[ConteudoController::class,'store'])->name('api.conteudostore');
*/
/* Rotas Básicas 
Route::get('/greeting', function(){
    return 'Hello Word';
});

*/

Route::get('/ping', function(){
   return [
       'pong' => true];

});
Route::get('/unautheticated', function(){
return ['error' => 'Usuário não logado!'];
})->name('login');
// CRUD do TODO


// Create = métodos para criar uma tarefa
// Read =  métodos para ler uma ou todas tarefas
// Update = métodos para atualizar uma tarefa
// Delete = métodos para deletar uma tarefa

// Post /todo = Inserir uma tarefa no sistema
// Get /todos = Ler todas as tarefas do sistema
// Get / todo/2 = Ler uma tarefa específica do sistema
// Put /todo/2 = Atualizar uma tarefa no sistema
// Delete / todo/2 = Deletar uma tarefa no sistema



Route::post('/user',[AuthController::class, 'create']);
Route::post('/auth', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->post('/todo', [ApiController::class, 'createTodo']);
Route::get('/todos', [ApiController::class, 'readAllTodos']);
Route::get('/todo/{id}', [ApiController::class, 'readTodo']);
Route::put('/todo/{id}', [ApiController::class, 'updateTodo']);
Route::delete('/todo/{id}', [ApiController::class, 'deleteTodo']);