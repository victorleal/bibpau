@extends('layouts.app')

@section('content')

    <div class="row mb-3">
        <div class="col-md-12">
            <h3><i class="bi-person-plus"></i> Cadastro de Novo Aluno</h3>
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

    <form action="{{ route('alunos.store') }}" method="post" class="mb-3">
        @csrf

        <div class="row mb-3">
            <div class="col-12">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <label for="codigo">Turma:</label>
                <input type="text" class="form-control" name="turma" id="turma">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-outline-primary btn-block">Cadastrar</button>
                    <a href="{{ route('alunos.index') }}" role="button" class="btn btn-outline-secondary btn-block">Cancelar</a>
                </div>
            </div>
        </div>
    </form>
@endsection