<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    
    Route::get('/scan', function () {
        return view('scan');
    });
    
    Route::get('/result', function () {
        return view('result');
    });
});
