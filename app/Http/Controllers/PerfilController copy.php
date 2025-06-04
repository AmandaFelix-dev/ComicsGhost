<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cadastro;

class PerfilController extends Controller
{
    public function index() {
        $perfil = Cadastro::all();

        return view('userprofile', ['perfil' => $perfil,]); 
    }
    public function show()
    {
        $user = Auth::user();
        $hqs = $user->hqs; // Recupera as HQs associadas ao usuário
        return view('profile.show', compact('user', 'hqs'));
    }
}
