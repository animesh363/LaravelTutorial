<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('post', function(){
    return view('post');
});
//m2
// Route::view('post','/post'); //view name Route name

// Route::get('/hello', function(){
//     return view('post');    //user will request on diffrent route we will redirct to diffrent from this method ie actual name of the file will not be shown
// });