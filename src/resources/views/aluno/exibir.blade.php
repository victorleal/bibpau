@extends('layouts.app')

@section('content')

    <div class="row mb-3">
        <div class="col-md-12">
            <h3>Aluno - {{ $aluno->nome }}</h3>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome" readonly disabled value="{{ $aluno->nome }}">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12">
            <label for="codigo">Turma:</label>
            <input type="text" class="form-control" name="turma" id="turma" readonly disabled value="{{ $aluno->turma }}">
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="d-grid gap-2">
                <a href="{{ route('alunos.index') }}" role="button" class="btn btn-outline-secondary btn-block">Voltar</a>
            </div>
        </div>
    </div>
@endsection