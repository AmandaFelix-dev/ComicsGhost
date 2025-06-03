<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\PerfilController;

// Página inicial
Route::get('/', [HomeController::class, 'index']);

// Página de cadastro
Route::get('/cadastro', [CadastroController::class, 'index']);
Route::post('/cadastro', [CadastroController::class, 'store']);

Route::get('/perfil', [PerfilController::class, 'index']);
//Route::get('/perfil', [PerfilController::class, 'index']);

// Página de perfil do usuário
Route::get('/generos', function () {
    return view('categories');
});

// Página de gêneros
Route::get('/generos', [App\Http\Controllers\GeneroController::class, 'index']);

// Página fixa (ainda não dinâmica) da HQ
Route::get('/hq', function () {
    return view('comic');
});

// 🔥 Página dinâmica de HQs individuais (internas)
Route::get('/hq/{id}', [HQController::class, 'show'])->name('hqs.show');
