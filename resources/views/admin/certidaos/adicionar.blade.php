@extends('layout.sitecertidaos')

@section('titulo', 'Adicionar certidao')


@section('conteudo')
    <div class="container">
        <h3>Adiconar certidao</h3>
        <div class="row">
            {{-- <form action="{{ route('admin.certidaos.salvar') }}" method="post"
                enctype="multipart/form-data"> --}}
                @csrf
                @include('admin.certidaos.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()
