<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    public function index(){

        return view('login');
    }

    public function logar(){

        //codigo de login aqui

        return view('cliente.index');
    }
}
