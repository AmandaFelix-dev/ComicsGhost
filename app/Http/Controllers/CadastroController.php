<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class CadastroController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        // Validação simples (adicione mais se quiser)
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:cadastros,email',
            'password' => 'required|string|min:8',
        ]);

        // Cria o registro com senha criptografada
        $registro = Cadastro::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Autentica o usuário após cadastro
        Auth::guard('web')->login($registro);

        return redirect('/perfil');
    }
}
