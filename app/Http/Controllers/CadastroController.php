<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cadastro;

class CadastroController extends Controller
{
    public function index() {
        $cadastro = Cadastro::all();

        return view('register', ['cadastro' => $cadastro,]);
    }

    public function store(Request $request) {
        $registro = new Cadastro;

        $registro->username = $request->username;
        $registro->email = $request->email;
        $registro->senha = $request->senha;

        $registro->save();

        return redirect('/perfil');

    }

}
