@extends('layouts.app')

@section('content')

    <div class="row mb-3">
        <div class="col-md-12">
            <h3><i class="bi-person-gear"></i> Edição do Livro - {{ $livro->nome }}</h3>
        </div>
    </div>

    @if ($errors->any())
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $message)
                            <li>$message</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif

    <form action="{{ route('livros.update', ['livro' => $livro->id]) }}" method="post" class="mb-3">
        @csrf
        @method('put')

        <div class="row mb-3">
            <div class="col-12">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome" value="{{ old('nome', $livro->nome) }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <label for="codigo">Código:</label>
                <input type="text" class="form-control" name="codigo" id="codigo" value="{{ old('codigo', $livro->codigo) }}">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-outline-primary btn-block">Atualizar</button>
                    <a href="{{ route('livros.index') }}" role="button" class="btn btn-outline-secondary btn-block">Cancelar</a>
                </div>
            </div>
        </div>
    </form>
@endsection