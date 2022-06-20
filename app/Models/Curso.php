<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $table = 'curso';
    protected $fillable = [
        'referencia',
        'nome',
        'is_reciclagem',
        'fk_idformato',
        'fk_idnivel',
        'fk_idscorm',
        'valor',
        'validade',
        'carga_horaria',
        'thumbnail'
    ];
}
