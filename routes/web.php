<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/login', [LoginController::class, 'loginView'])->name('login');

Route::get('/user',[UserController::class, 'exemple'])->name('user');

Route::permanentRedirect('/here','/there');


Route::get('/user/{id}', function($id){
    return 'User '.$id;
});


Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
   //
});
Route::get('/user/{id}', function(Request $request, $id){
    return 'User '.$id;
});


Route::get('/user/{name?}', function($name = null){
    return $name;
});

Route::get('/user/{name?}', function ($name = 'John') {
    return $name;
});


Route::get('/user/{name}', function ($name) {
    return $name;
})->where('name', '[A-Za-z]+');

Route::get('/user/{id}', function ($id) {
    return $id;
})->where('id', '[0-9]+');

Route::get('/user/{id}/{name}', function ($id, $name) {
   //


})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

*/