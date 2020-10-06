@extends('layout.sitetarefas')

@section('titulo', 'Adicionar Tabeliao')


@section('conteudo')
    <div class="container">
        <h3>Adiconar tabeliao</h3>
        <div class="row">
            <form action="{{ route('admin.Tabeliaos.salvar') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @include('admin.Tabeliaos.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()
