<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class login extends Controller
{
    public function index(){

        return view('login');
    }

    public function logar(Request $request){

        //codigo de login aqui

        $usuario = $request->get('usuario');
        $senha = $request->get('senha');


        $credenciais = json_decode(Usuarios::where([
            ['usuario', $usuario]
        ])->get(), true);

        if($credenciais == []){
            return redirect()->back()->with('erro', "Usuário ou senha incorreta!");
        }

        $credenciais = $credenciais[0];
        //dd($credenciais);
        if ($credenciais['tipo'] == 1) {
            if ($senha == $credenciais['senha']) {

                $dados = [
                    'id'=>$credenciais['id'],
                    'nome'=>$credenciais['nome'],
                    'tipo' => $credenciais['tipo'],
                ];

                $this->criarSessao($dados);

                return view('cliente/index');
            } else {

                return redirect()->back()->with('erro', "Usuário ou senha incorreta");
            }
        } else {

            if ($senha == $credenciais['senha']) {

                $dados = [
                    'id'=>$credenciais['id'],
                    'nome'=>$credenciais['nome'],
                    'tipo' => $credenciais['tipo'],
                ];

                $this->criarSessao($dados);

                return view('cliente/index');
            } else {

                return redirect()->back()->with('erro', "Usuário ou senha incorreta");
            }

        }
        
    }


    public function criarSessao($dados = null){
        if($dados != null)
            Session::put($dados);
    }

    public function sessionDestroy(){
        Session::flush();

        return redirect()->route('index');
    }
}
