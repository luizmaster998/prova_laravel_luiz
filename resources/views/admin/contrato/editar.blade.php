@extends('layout.sitetarefas')

@section('titulo', 'Editar contrato')


@section('conteudo')
    <div class="container">
        <h3>Editar contrato</h3>
        <div class="row">
            <form action="{{ route('admin.contratos.atualizar', $contrato->id) }}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="put">
                @include('admin.contratos.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()
