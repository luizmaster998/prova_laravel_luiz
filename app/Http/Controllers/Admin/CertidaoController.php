<?php

namespace App\Http\Controllers\Admin;

use App\Certidao;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CertidaoController extends Controller
{
    public function index(Request $req)
    {
        $certidaos = certidao::all();
        $mensagem = $req->session()->get('mensagem');
        return view('admin.certidaos.index', compact('certidaos', 'mensagem'));
    }

    public function adicionar()
    {
        return view('admin.certidaos.adicionar');
    }

    public function salvar(Request $req)
    {
        $certidao = $req->all();

        if (isset($certidao['publicado'])) {
            $certidao['publicado'] = 'sim';
        }

        if ($req->hasFile('imagem')) {
            $certidao['imagem'] = $this->tratarImagem($req, $certidao);
        }

        certidao::create($certidao);

        $req->session()
          ->flash(
              'mensagem',
              "certidao de $req->titulo adicionado com sucesso"
          );

        return redirect()->route('admin.certidaos');
    }

    public function editar($id)
    {
        $certidao = certidao::find($id);

        return view('admin.certidaos.editar', compact('certidao'));
    }

    public function atualizar(Request $req, $id)
    {
        $certidao = $req->all();

        if (isset($certidao['publicado'])) {
            $certidao['publicado'] = 'sim';
        } else {
            $certidao['publicado'] = 'nao';
        }

        if ($req->hasFile('imagem')) {
            $certidao['imagem'] = $this->tratarImagem($req, $certidao);
        }

        $certidaoSelecionado = certidao::find($id);
        $certidaoSelecionado->update($certidao);

        $req->session()
            ->flash(
                'mensagem',
                "certidao de $certidaoSelecionado->titulo atualizado com sucesso"
            );

        return redirect()->route('admin.certidaos');
    }

    public function deletar(Request $req, $id)
    {
        $certidao = certidao::find($id);
        $certidao->delete();

        $req->session()
            ->flash(
                'mensagem',
                "certidao de $certidao->titulo removido com sucesso"
            );

        return redirect()->route('admin.certidaos');
    }

    public function tratarImagem(Request $req, $certidao)
    {
        $imagem = $req->file('imagem');
        $num = rand(1111, 9999);
        $dir = 'img/certidaos/';
        $ext = $imagem->guessClientExtension();
        $nomeImagem = 'imagem_' . $num . '.' . $ext;
        $imagem->move($dir, $nomeImagem);

        return $dir . $nomeImagem;
    }


}
