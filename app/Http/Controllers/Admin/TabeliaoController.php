<?php

namespace App\Http\Controllers\Admin;

use App\Tabeliao;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TabeliaoController extends Controller
{
    public function index(Request $req)
    {
        $Tabeliaos = Tabeliao::all();
        $mensagem = $req->session()->get('mensagem');
        return view('admin.Tabeliaos.index', compact('Tabeliaos', 'mensagem'));
    }

    public function adicionar()
    {
        return view('admin.Tabeliaos.adicionar');
    }

    public function salvar(Request $req)
    {
        $Tabeliao = $req->all();

        if (isset($Tabeliao['publicado'])) {
            $Tabeliao['publicado'] = 'sim';
        }

        if ($req->hasFile('imagem')) {
            $Tabeliao['imagem'] = $this->tratarImagem($req, $Tabeliao);
        }

        Tabeliao::create($Tabeliao);

        $req->session()
          ->flash(
              'mensagem',
              "Tabeliao de $req->titulo adicionado com sucesso"
          );

        return redirect()->route('admin.Tabeliaos');
    }

    public function editar($id)
    {
        $Tabeliao = Tabeliao::find($id);

        return view('admin.Tabeliaos.editar', compact('Tabeliao'));
    }

    public function atualizar(Request $req, $id)
    {
        $Tabeliao = $req->all();

        if (isset($Tabeliao['publicado'])) {
            $Tabeliao['publicado'] = 'sim';
        } else {
            $Tabeliao['publicado'] = 'nao';
        }

        if ($req->hasFile('imagem')) {
            $Tabeliao['imagem'] = $this->tratarImagem($req, $Tabeliao);
        }

        $TabeliaoSelecionado = Tabeliao::find($id);
        $TabeliaoSelecionado->update($Tabeliao);

        $req->session()
            ->flash(
                'mensagem',
                "Tabeliao de $TabeliaoSelecionado->titulo atualizado com sucesso"
            );

        return redirect()->route('admin.Tabeliaos');
    }

    public function deletar(Request $req, $id)
    {
        $Tabeliao = Tabeliao::find($id);
        $Tabeliao->delete();

        $req->session()
            ->flash(
                'mensagem',
                "Tabeliao de $Tabeliao->titulo removido com sucesso"
            );

        return redirect()->route('admin.Tabeliaos');
    }

    public function tratarImagem(Request $req, $Tabeliao)
    {
        $imagem = $req->file('imagem');
        $num = rand(1111, 9999);
        $dir = 'img/Tabeliaos/';
        $ext = $imagem->guessClientExtension();
        $nomeImagem = 'imagem_' . $num . '.' . $ext;
        $imagem->move($dir, $nomeImagem);

        return $dir . $nomeImagem;
    }


}
