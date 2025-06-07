<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HQ extends Model
{
    use HasFactory;

    // Definindo a conexão com o banco de dados 'interna' conforme a configuração no database.php
    //protected $connection = 'internas'; // Nome da conexão configurada no database.php

    // Definindo o nome da tabela, caso não siga o padrão plural
    protected $table = 'hqs'; // Nome da tabela que você criou

    // Definindo os campos que podem ser preenchidos em massa
    // Ajuste conforme os campos da sua tabela no banco de dados
    protected $fillable = [
        'id',           // ID da HQ (geralmente é auto-incrementado, mas é bom manter no fillable para garantir)
        'titulo',       // Título da HQ
        'descricao',    // Descrição da HQ
        'generos',      // Gêneros da HQ
        'autor',        // Autor da HQ
        'lancamento',   // Data de lançamento
        'imagens',       // Caminho da imagem
        'link1',        // Primeiro link de compra
        'link2',        // Segundo link de compra
        'link3'         // Terceiro link de compra
    ];

    // Caso precise de timestamps (created_at e updated_at)
    public $timestamps = true;  // Caso sua tabela tenha campos de timestamps (opcional)

    public function favoritado_por()
    {
        return $this->belongsToMany(Cadastro::class, 'favoritos');
    }
}
