<?php

  use illuminate\Support\Facades\Route;

  Route::get('/home', function(){
        return response()->json(['Home' => 'Seja Bem Vindo!']);
  });