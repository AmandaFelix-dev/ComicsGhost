<?php

namespace App\Http\Controllers;

use App\Models\HQ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function index() {
        $cadastro = Auth::user();
        $favoritos = $cadastro->favoritos;
        return view('userprofile', ['cadastro' => $cadastro, 'favoritos' => $favoritos]); 
    }
}
