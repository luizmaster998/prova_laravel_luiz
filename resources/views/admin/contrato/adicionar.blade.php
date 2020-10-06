@extends('layout.sitetarefas')

@section('titulo', 'Adicionar contrato')


@section('conteudo')
    <div class="container">
        <h3>Adiconar contrato</h3>
        <div class="row">
            <form action="{{ route('admin.contratos.salvar') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @include('admin.contratos.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()
