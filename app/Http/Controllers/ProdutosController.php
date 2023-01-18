<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    //

    public function salvar(Request $request){
        $id = $request->get("id");
        
        if(isset($id)){

            $validated = $request->validate([
                'nome' => 'required|string|max:250',
                'preco' => "required",
                'quantidade' => 'required',
                'descricao' => 'required',
                'categoria_produto_id' => 'required'
            ]);
            $produto =  Produtos::find($id);
            $produto->nome = $request->get("nome");
            $produto->preco = $request->get("preco");
            $produto->quantidade = $request->get("quantidade");
            $produto->descricao = $request->get("descricao");
            $produto->categoria_produto_id = $request->get("categoria_produto_id");

            $produto->save();

            return redirect()->back()->with('success', 'Editado com sucesso');
        }else{
            $validated = $request->validate([
                'nome' => 'required|string|max:250',
                'preco' => "required",
                'quantidade' => 'required',
                'descricao' => 'required',
                'categoria_produto_id' => 'required'
            ]);

            $produto = new Produtos;
            $produto->nome = $request->get("nome");
            $produto->preco = $request->get("preco");
            $produto->quantidade = $request->get("quantidade");
            $produto->descricao = $request->get("descricao");
            $produto->categoria_produto_id = $request->get("categoria_produto_id");

            $produto->save();

            return redirect()->back()->with('success', 'Salvo com sucesso');
        }
    }

    public function buscarProdutoPorId($id)
    {
        # code...
        $produto = json_decode(Produtos::find($id), true);

        return view("teste", $produto);

    }

    public function buscarTodos($id)
    {
        # code...
        $produto = json_decode(Produtos::buscarPorCategoria($id), true);

        return view("teste", $produto);

    }

    public function deletar($id){


        $produtos = Produtos::find($id);
        $produtos->delete();

        return redirect()->back()->with('success', 'Deletado com sucesso');

    }
}
