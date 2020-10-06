@extends('layout.sitetarefas')

@section('titulo', 'Tabeliaos')

@section('conteudo')
    <div class="container">
        <div class="row mt-5 mb-2">
            <div class="col-9">
                <h3>Lista de Tabeliaos</h3>
            </div>
            <div class="col-3">
                <a class="btn btn-success"
                   href="{{ route('admin.Tabeliaos.adicionar') }}">
                    Adicionar
                </a>
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
                    @foreach($Tabeliaos as $Tabeliao)
                        <tr>
                            <td>{{ $Tabeliao->id }}</td>
                            <td>{{ $Tabeliao->titulo }}</td>
                            <td>{{ $Tabeliao->descricao }}</td>
                            <td>
                                <img width="70" src="{{asset($Tabeliao->imagem)}}">
                            </td>
                            <td>{{ $Tabeliao->publicado }}</td>
                            <td>
                                <a class="btn btn-primary"
                                    href="{{ route('admin.Tabeliaos.editar', $Tabeliao->id) }}">Editar</a>
                                <form action="{{ route('admin.Tabeliaos.deletar', $Tabeliao->id) }}" method="POST">
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
