<?php

use Illuminate\Support\Facades\Route;



Route::get('/teste', function(){
    return response()->json(['teste' => 15]);
});


