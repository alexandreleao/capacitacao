<?php

 use Illuminate\Support\Facades\Route;


 Route::get('/teste2', function(){
    return response()->json(['teste2' => 25]);  
 });