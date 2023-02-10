@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3><i class="bi-journal-plus"></i> Cadastro de Novo Livro</h3>
        </div>
    </div>

    <form action="{{ route('salvar_novo_livro') }}" method="post" class="mt-3">
        @csrf

        <div class="row mb-3">
            <div class="col-12">
                <label for="nome">Nome do Livro:</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <label for="codigo">Código de barras:</label>
                <input type="text" class="form-control" name="codigo" id="codigo">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-outline-primary btn-block">Cadastrar</button>
                    <a href="{{ route('livros') }}" role="button" class="btn btn-outline-secondary btn-block">Cancelar</a>
                </div>
            </div>
        </div>
    </form>
@endsection