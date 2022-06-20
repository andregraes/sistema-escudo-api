<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParceiroTelefone extends Model
{
    use HasFactory;
    protected $table = 'parceiro_telefone';
    protected $guarded = [];
}
