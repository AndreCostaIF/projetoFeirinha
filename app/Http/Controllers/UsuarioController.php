<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class UsuarioController extends Controller
{

    public function cadastroCliente(){

        //CODIGO DE CECILIA TA ALI EM BAIXO, USEM ISSO AQUI COMO QUISEREM, SO RETORNEM ESSA VIEW

        return view('cliente.cadastro');
    }

    public function indexUsuario($id = null)
    {

        if(is_numeric($id)&& $id!=-1){
           $usuario= Usuarios::find($id);
            if(isset($_POST)){
                if($_POST!=null){
                    // dd($usuario->toArray());
                    $usuario->fill($_POST);
                    $usuario->save();
                }
        }
    }

        else{
            $usuario = [];
            $usuario['id'] = -1;
            $usuario['usuario'] = "";
            $usuario['senha'] = "";
            $usuario['nome'] = "";
            $usuario['tipo'] = "";
            $usuario['telefone'] = "";
            $usuario['instagram'] = "";
            $usuario['email'] = "";

        }
        //Lista todos os usuários
        $usuarios = Usuarios::all();
        return view('usuarios_view')->with('usuario',$usuario)->with('usuarios', $usuarios);

    }

    public function salvar(Request $request)
    {

        $request->validate([
            'usuario' => 'required',
            'senha' => 'required',
            'nome' => 'required',
            'tipo' => 'required',
            'telefone' => 'required',
            'instagram' => 'required',
            'email' => 'required|email',
        ]);

        if($request->id){

        Usuarios::create([
            'usuario'  => $request->usuario,
            'senha' => $request->senha,
            'nome' => $request->nome,
            'tipo' =>$request->tipo,
            'telefone'=>$request->telefone,
            'instagram'=>$request->instagram,
            'email'=>$request->email

        ]);

    }$this->indexUsuario();

        return redirect()->to(route('indexUsuario'));
    }

    public function deletar($id)
    {
        $usuario = Usuarios::find($id);
        $usuario->delete();
        return redirect()->route('indexUsuario');
    }
}

