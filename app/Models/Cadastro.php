<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Cadastro extends Authenticatable
{
    use Notifiable;

    protected $table = 'cadastros';

    protected $fillable = [   
        'username',       
        'email',    
        'password',       
    ];
    
    protected $hidden = [
        'password',
    ];

    public function favoritos()
    {
        return $this->belongsToMany(HQ::class, 'favoritos');
    }
}