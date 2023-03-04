@extends('layouts.app')

@section('content')

    <div class="row mb-3">
        <div class="col-md-12">
            <h3>Livro - {{ $livro->nome }}</h3>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome" readonly disabled value="{{ $livro->nome }}">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12">
            <label for="codigo">Código:</label>
            <input type="text" class="form-control" name="codigo" id="codigo" readonly disabled value="{{ $livro->codigo }}">
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="d-grid gap-2">
                <a href="{{ route('livros.index') }}" role="button" class="btn btn-outline-secondary btn-block">Voltar</a>
            </div>
        </div>
    </div>
@endsection