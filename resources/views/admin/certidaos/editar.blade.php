@extends('layout.sitecertidaos')

@section('titulo', 'Editar certidao')


@section('conteudo')
    <div class="container">
        <h3>Editar certidao</h3>
        <div class="row">
            <form action="{{ route('admin.certidaos.atualizar', $certidao->id) }}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="put">
                @include('admin.certidaos.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()
