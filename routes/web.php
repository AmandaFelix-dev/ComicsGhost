<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/cadastro', function () {
    return view('register');
});

Route::get('/generos', function () {
    return view('categories');
});
Route::get('/perfil', function () {
    return view('userprofile');
});
