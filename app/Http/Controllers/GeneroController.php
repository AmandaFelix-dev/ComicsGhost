<?php

namespace App\Http\Controllers;

use App\Models\HQ;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Importar a classe Str para usar str_contains

class GeneroController extends Controller
{
    public function index()
    {
        // Buscar HQs do banco usando o modelo existente
        $hqs = HQ::all();
        
        // Arrays para organizar os dados
        $acao = [];
        $drama = [];
        $suspense = [];
        
        // Distribuir HQs nos arrays por gênero
        foreach ($hqs as $hq) {
            // Verifica se a coluna generos não é nula antes de processar
            if (!empty($hq->generos)) {
                $generos = explode(",", $hq->generos); // Tenta separar por vírgula primeiro

                // Se não houver vírgula, pode ser que use '/' como separador, ou seja um único gênero
                if (count($generos) == 1 && Str::contains($hq->generos, '/')) {
                    $generos = explode('/', $hq->generos); // Tenta separar por barra
                }

                foreach ($generos as $genero) {
                    $generoLimpo = strtolower(trim($genero)); // Limpa espaços e converte para minúsculas
                    
                    // Verifica se CONTÉM 'ação' ou 'acao'
                    if (Str::contains($generoLimpo, 'ação') || Str::contains($generoLimpo, 'acao')) {
                        // Adiciona apenas uma vez por HQ, mesmo que tenha múltiplos gêneros de ação
                        if (!in_array($hq->id, array_column($acao, 'id'))) {
                           $acao[] = $hq;
                        }
                    }
                    
                    // Verifica se CONTÉM 'drama'
                    if (Str::contains($generoLimpo, 'drama')) {
                         if (!in_array($hq->id, array_column($drama, 'id'))) {
                            $drama[] = $hq;
                         }
                    }
                    
                    // Verifica se CONTÉM 'suspense'
                    if (Str::contains($generoLimpo, 'suspense')) {
                        if (!in_array($hq->id, array_column($suspense, 'id'))) {
                           $suspense[] = $hq;
                        }
                    }
                }
            }
        }
        
        // Retornar a view com os dados organizados nos mesmos grupos da view original
        return view('categories', [
            'acao' => $acao,
            'drama' => $drama,
            'suspense' => $suspense
        ]);
    }
}
