<?php

use Illuminate\Support\Facades\Route;
use app\http\Controllers\userControler;


Route::get('/', function () {
    return view('welcome');
    
});

Route::get('/showdata', function () {
    return view('showdata');
    
});

