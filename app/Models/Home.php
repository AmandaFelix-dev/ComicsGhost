<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'home';

    protected $fillable = [
        'id',           // ID da HQ (geralmente é auto-incrementado, mas é bom manter no fillable para garantir)
        'titulo',       // Título da HQ
        'descricao',    // Descrição da HQ
        'imagens',       // Caminho da imagem
    ];
}
