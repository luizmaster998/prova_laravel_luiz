<?php

namespace App\Http\Controllers\Admin;

use App\Contrato;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    public function index(Request $req)
    {
        $contratos = Contrato::all();
        $mensagem = $req->session()->get('mensagem');
        return view('admin.contratos.index', compact('contratos', 'mensagem'));
    }

    public function adicionar()
    {
        return view('admin.contratos.adicionar');
    }

    public function salvar(Request $req)
    {
        $contrato = $req->all();

        if (isset($contrato['publicado'])) {
            $contrato['publicado'] = 'sim';
        }

        if ($req->hasFile('imagem')) {
            $contrato['imagem'] = $this->tratarImagem($req, $contrato);
        }

        contrato::create($contrato);

        $req->session()
          ->flash(
              'mensagem',
              "contrato de $req->titulo adicionado com sucesso"
          );

        return redirect()->route('admin.contratos');
    }

    public function editar($id)
    {
        $contrato = contrato::find($id);

        return view('admin.contratos.editar', compact('contrato'));
    }

    public function atualizar(Request $req, $id)
    {
        $contrato = $req->all();

        if (isset($contrato['publicado'])) {
            $contrato['publicado'] = 'sim';
        } else {
            $contrato['publicado'] = 'nao';
        }

        if ($req->hasFile('imagem')) {
            $contrato['imagem'] = $this->tratarImagem($req, $contrato);
        }

        $contratoSelecionado = contrato::find($id);
        $contratoSelecionado->update($contrato);

        $req->session()
            ->flash(
                'mensagem',
                "contrato de $contratoSelecionado->titulo atualizado com sucesso"
            );

        return redirect()->route('admin.contratos');
    }

    public function deletar(Request $req, $id)
    {
        $contrato = contrato::find($id);
        $contrato->delete();

        $req->session()
            ->flash(
                'mensagem',
                "contrato de $contrato->titulo removido com sucesso"
            );

        return redirect()->route('admin.contratos');
    }

    public function tratarImagem(Request $req, $contrato)
    {
        $imagem = $req->file('imagem');
        $num = rand(1111, 9999);
        $dir = 'img/contratos/';
        $ext = $imagem->guessClientExtension();
        $nomeImagem = 'imagem_' . $num . '.' . $ext;
        $imagem->move($dir, $nomeImagem);

        return $dir . $nomeImagem;
    }


}
