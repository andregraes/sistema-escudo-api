<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioAtivo extends Model
{
    use HasFactory;
    protected $table = 'usuario_ativo';
    protected $guarded = [];
}
