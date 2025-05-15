<?php

namespace App\Http\Controllers;

use App\Models\HQ;
use Illuminate\Http\Request;

class HQController extends Controller
{
    /**
     * Exibe todas as HQs cadastradas.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Recupera todas as HQs do banco de dados
        $hqs = HQ::all(); 

        // Retorna a view 'hqs.index' com todas as HQs
        return view('hqs.index', compact('hqs'));
    }

    /**
     * Exibe os detalhes de uma HQ específica.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Busca a HQ pelo ID
        $hq = HQ::findOrFail($id);

        // Retorna a view 'hqs.show' com a HQ encontrada
        return view('comic', compact('hq'));  // Aqui, usei 'comic' porque é o nome da sua view
    }

    /**
     * Exibe o formulário para criação de uma nova HQ.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Retorna a view para criar uma nova HQ
        return view('hqs.create');
    }

    /**
     * Armazena uma nova HQ no banco de dados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Valida os dados do formulário
        $validated = $request->validate([
            'titulo' => 'required|max:255',         // Título obrigatório e no máximo 255 caracteres
            'descricao' => 'required',              // Descrição obrigatória
            'generos' => 'required',                // Gêneros obrigatórios
            'autor' => 'required',                  // Autor obrigatório
            'lancamento' => 'required|date',       // Data de lançamento obrigatória e formato válido
            'imagem' => 'required|image',          // Imagem obrigatória e precisa ser um arquivo de imagem
            'link1' => 'required|url',             // Primeiro link obrigatório e precisa ser uma URL válida
            'link2' => 'nullable|url',             // Segundo link opcional e precisa ser uma URL válida
            'link3' => 'nullable|url',             // Terceiro link opcional e precisa ser uma URL válida
        ]);

        // Cria uma nova HQ no banco de dados
        $hq = HQ::create($validated);

        // Redireciona para a lista de HQs com uma mensagem de sucesso
        return redirect()->route('hqs.index')->with('success', 'HQ criada com sucesso!');
    }

    /**
     * Exibe o formulário de edição de uma HQ existente.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Busca a HQ pelo ID
        $hq = HQ::findOrFail($id);

        // Retorna a view para editar a HQ
        return view('hqs.edit', compact('hq'));
    }

    /**
     * Atualiza os dados de uma HQ existente no banco de dados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Valida os dados do formulário
        $validated = $request->validate([
            'titulo' => 'required|max:255',         // Título obrigatório e no máximo 255 caracteres
            'descricao' => 'required',              // Descrição obrigatória
            'generos' => 'required',                // Gêneros obrigatórios
            'autor' => 'required',                  // Autor obrigatório
            'lancamento' => 'required|date',       // Data de lançamento obrigatória e formato válido
            'imagem' => 'required|image',          // Imagem obrigatória e precisa ser um arquivo de imagem
            'link1' => 'required|url',             // Primeiro link obrigatório e precisa ser uma URL válida
            'link2' => 'nullable|url',             // Segundo link opcional e precisa ser uma URL válida
            'link3' => 'nullable|url',             // Terceiro link opcional e precisa ser uma URL válida
        ]);

        // Encontra a HQ pelo ID e atualiza com os dados validados
        $hq = HQ::findOrFail($id);
        $hq->update($validated);

        // Redireciona para a lista de HQs com uma mensagem de sucesso
        return redirect()->route('hqs.index')->with('success', 'HQ atualizada com sucesso!');
    }

    /**
     * Remove uma HQ do banco de dados.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Busca a HQ pelo ID
        $hq = HQ::findOrFail($id);

        // Deleta a HQ
        $hq->delete();

        // Redireciona para a lista de HQs com uma mensagem de sucesso
        return redirect()->route('hqs.index')->with('success', 'HQ excluída com sucesso!');
    }
}
