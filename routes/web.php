<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\LoginController;

// Página inicial
Route::get('/', [HomeController::class, 'index']);

// Página de cadastro
Route::get('/cadastro', [CadastroController::class, 'index'])->name('cadastro-form');
Route::post('/cadastro', [CadastroController::class, 'store'])->name('cadastro-action');

// Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login-action');

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Página de perfil do usuário
Route::get('/perfil', [PerfilController::class, 'index'])->middleware('auth')->name('perfil');

// Página de gêneros
Route::get('/generos', [App\Http\Controllers\GeneroController::class, 'index'])->name('generos');

// Página dinâmica de HQs individuais (internas)
Route::get('/hq/{id}', [HQController::class, 'show'])->name('hqs.show');

Route::post("/hq/{id}/favoritar", [HQController::class, "favoritar"])->middleware('auth')->name("favoritar");

// Página fixa (ainda não dinâmica) da HQ
// Route::get('/hq', function () {
//     return view('comic');
// });
