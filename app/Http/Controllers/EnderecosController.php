<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enderecos;


class EnderecosController extends Controller
{

    public function indexEndereco($id = null)
    {

        if (is_numeric($id) && $id != -1) {
            $endereco = Enderecos::find($id);
            if (isset($_POST)) {
                if ($_POST != null) {
                    // dd($usuario->toArray()); 
                    $endereco->fill($_POST);
                    $endereco->save();
                }
            }
        } else {
            $endereco = [];
            $endereco['id'] = -1;
            $endereco['rua'] = "";
            $endereco['numero'] = "";
            $endereco['complemento'] = "";
            $endereco['referencia'] = "";
            $endereco['uf'] = "";
            $endereco['bairro'] = "";
            $endereco['cidade'] = "";
            $endereco['usuario_id'] = -1;
        }
        $enderecos = Enderecos::all();
        return view('telasTeste.endereco_view')->with('endereco', $endereco)->with('enderecos', $enderecos);
    }

    public function salvar(Request $request)
    {

        $request->validate([
            'rua' => 'required',
            'numero' => 'required',
            'complemento' => 'required',
            'referencia' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'usuario_id' => 'required',
        ]);

        if ($request->id) {

            Enderecos::create([
                'rua'  => $request->rua,
                'numero'  => $request->numero,
                'complemento' => $request->complemento,
                'referencia' => $request->referencia,
                'bairro' => $request->bairro,
                'uf' => $request->uf,
                'cidade' => $request->cidade,
                'usuario_id' => $request->usuario_id

            ]);
        }
        $this->indexEndereco();

        return redirect()->to(route('indexEndereco'));
    }

    public function deletar($id)
    {
        $endereco = Enderecos::find($id);
        $endereco->delete();
        return redirect()->route('indexEndereco');
    }
}
