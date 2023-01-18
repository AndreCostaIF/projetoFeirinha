<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produtos extends Model
{
    use HasFactory;

    protected $table = "produtos";
    public static function buscarPorCategoria($id){

        $produtos = DB::table('produtos')->
        join('categoria_produto', 'produtos.categoria_produto_id', 'produtos.id')->
        select('produtos.*', 'categoria_produto.*')->
        where('categoria_produto_id', '=', $id)->
        get();


        return $produtos;
    }
}
