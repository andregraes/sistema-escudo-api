<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParceiroEndereco extends Model
{
    use HasFactory;
    protected $table = 'parceiro_endereco';
    protected $guarded = [];
}
