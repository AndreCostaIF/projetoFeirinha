<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected  $fillable = ['id', 'usuario', 'senha', 'nome', 'tipo', 'telefone', 'instagram', 'email'];
    use HasFactory;
}
