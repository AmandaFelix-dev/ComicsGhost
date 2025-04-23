<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/cadastro', function () {
    return view('register');
});
Route::get('/Perfil', function () {
    return view('userprofile');
});