<?php

use App\Controllers\HomeController;
use PhpMvc\Http\Route;

// Route::get('/', function () {
//     echo 'HI TAHA';  
// });

Route::get('/', [HomeController::class,'index']);
//Route::get('/home2', 'App\Controllers\HomeController@index');