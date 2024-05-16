<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/loginuser', function () {
    return view('loginpage');
});
Route::get('/landingpage', function () {
    return view('landingpage');
});
