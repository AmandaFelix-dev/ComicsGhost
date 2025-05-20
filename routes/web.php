<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HQController;

// Página inicial
Route::get('/', function () {
    return view('home');
});

// Página de cadastro
Route::get('/cadastro', function () {
    return view('register');
});

Route::get('/perfil', function () {
    return view ('userprofile');
});

Route::get('/generos', function () {
    return view('categories');
});

// Página de gêneros
Route::get('/generos', function () {
    return view('categories');
});

// Página de perfil do usuário
Route::get('/perfil', function () {
    return view('userprofile');
});

// Página fixa (ainda não dinâmica) da HQ
Route::get('/hq', function () {
    return view('comic');
});

// 🔥 Página dinâmica de HQs individuais (internas)
Route::get('/hq/{id}', [HQController::class, 'show'])->name('hqs.show');
