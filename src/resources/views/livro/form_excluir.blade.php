@extends('layouts.app')

@section('content')

    <div class="row mb-3">
        <div class="col-md-12">
            <h3><i class="bi-person-minus"></i> Exclusão do Livro - {{ $livro->nome }}</h3>
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

    <form action="{{ route('livros.destroy', ['livro' => $livro->id]) }}" method="post" class="mb-3">
        @csrf
        @method('delete')

        <div class="row mb-3">
            <div class="col-12">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome" readonly disabled value="{{ old('nome', $livro->nome) }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <label for="codigo">Código:</label>
                <input type="text" class="form-control" name="codigo" id="codigo" readonly disabled value="{{ old('codigo', $livro->codigo) }}">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-outline-danger btn-block">Excluir</button>
                    <a href="{{ route('livros.index') }}" role="button" class="btn btn-outline-secondary btn-block">Cancelar</a>
                </div>
            </div>
        </div>
    </form>
@endsection