<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeradorCatalogo extends Model
{
    use HasFactory;
    protected $table = 'gerador_catalogo';
    protected $guarded = [];
}
