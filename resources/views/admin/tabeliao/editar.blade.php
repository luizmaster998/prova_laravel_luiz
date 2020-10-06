@extends('layout.sitetarefas')

@section('titulo', 'Editar Tabeliao')


@section('conteudo')
    <div class="container">
        <h3>Editar tabeliao</h3>
        <div class="row">
            <form action="{{ route('admin.Tabeliaos.atualizar', $Tabeliao->id) }}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="put">
                @include('admin.Tabeliaos.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()
