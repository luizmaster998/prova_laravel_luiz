@extends('layout.sitecertidaos')

@section('titulo', 'certidaos')

@section('conteudo')
    <div class="container">
        <div class="row mt-5 mb-2">
            <div class="col-9">
                <h3>Lista de certidaos</h3>
            </div>
            <div class="col-3">
                {{-- <a class="btn btn-info"
                   {{-- href="{{ route('admin.certidaos.adicionar') }}"> --}}
                    Adicionar
                </a> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @if(!empty($mensagem))
                    <div class="alert alert-success">
                        {{ $mensagem }}
                    </div>
                @endif
            </div>

        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Imagem</th>
                        <th scope="col">Publicado</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($certidaos as $certidao)
                        <tr>
                            <td>{{ $certidao->id }}</td>
                            <td>{{ $certidao->titulo }}</td>
                            <td>{{ $certidao->descricao }}</td>
                            <td>
                                <img width="70" src="{{asset($certidao->imagem)}}">
                            </td>
                            <td>{{ $certidao->publicado }}</td>
                            <td>
                                <a class="btn btn-warning"
                                    href="{{ route('admin.certidaos.editar', $certidao->id) }}">Editar</a>
                                <form action="{{ route('admin.certidaos.deletar', $certidao->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
