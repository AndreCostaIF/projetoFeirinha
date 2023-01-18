<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria_produto extends Model
{
    protected  $fillable = ['id', 'nome', 'usuario_id'];
    protected $table =  'categoria_produto';
    use HasFactory;

}
