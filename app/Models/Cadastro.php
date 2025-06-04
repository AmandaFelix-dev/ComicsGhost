<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected $table = 'cadastro';

    protected $fillable = [
        'id',           
        'username',       
        'email',    
        'senha',       
    ];
}