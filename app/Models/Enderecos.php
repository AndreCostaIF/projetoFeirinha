<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enderecos extends Model
{
     protected  $fillable = ['id', 'rua', 'numero','complemento', 'referencia','bairro','uf', 'cidade', 'usuario_id'];
    use HasFactory;
}
