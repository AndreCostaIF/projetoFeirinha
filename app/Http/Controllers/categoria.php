<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoria extends Controller
{
    public function buscarProdutos($id = null){

        //BUSCA OS PRODUTOS DESSA CATEGORIA AQUI E RETORNA PRA VIEW

        return view('cliente.listaProdutos');
    }
}
