<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produtoController extends Controller
{
    public function produtoPorID($id = null){

        //CODIGO AQUIIII RETORNA O PRODUTO NA VIEW NEEEEE

        return view('produto');
    }
}
