<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria_produto;

class CategoriasController extends Controller
{
   
    public function indexCategoria($id = null)
    {

        if(is_numeric($id)&& $id!=-1){
           $categoria= Categoria_produto::find($id);
            if(isset($_POST)){
                if($_POST!=null){   
                    // dd($usuario->toArray()); 
                    $categoria->fill($_POST);
                    $categoria->save();
                }   
        }
    }

        else{
            $categoria = [];
            $categoria['id'] = -1;
            $categoria['nome'] = "";
            $categoria['usuario_id'] = "";
            
           
        }  
        $categorias =Categoria_produto::all();
        return view('telasTeste.categoria_view')->with('categoria',$categoria)->with('categorias', $categorias);
       
    }

    public function salvar(Request $request)
    {
    
        $request->validate([
            'nome' => 'required',
            'usuario_id' => 'required',
            
        ]);

        if($request->id){

            Categoria_produto::create([
            'nome'  => $request->nome,
            'usuario_id'  => $request->usuario_id,


        ]);

    }$this->indexCategoria();

        return redirect()->to(route('indexCategoria'));
    }
   
    public function deletar($id)
    {
        $categoria = Categoria_produto::find($id);
        $categoria->delete();
        return redirect()->route('indexCategoria');
    }
}
