@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-md-12">
            <h3><i class="bi-people"></i> Alunos</h3>
        </div>
    </div>

    @if(Session::has('sucesso'))
        <div class="alert alert-success mb-3">
            {{ Session::get('sucesso') }}
        </div>
    @endif


    <div class="row mb-3">
        <div class="col-md-12">
            <a href="{{ route('alunos.create') }}" class="btn btn-primary" role="button">
                <i class="bi-person-plus"></i> Cadastrar novo aluno
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Turma</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($alunos as $aluno)
                        <tr>
                            <td>{{ $aluno->nome }}</td>
                            <td>{{ $aluno->turma }}</td>
                            <td>
                                <div class="d-grid gap-3 d-md-block">
                                    <a href="{{ route('alunos.show', ['aluno' => $aluno->id]) }}" class="btn btn-primary" type="button" title="Visualizar aluno"><i class="bi-person-badge" style="font-size: 1.5rem;"></i></a>
                                    <a href="{{ route('alunos.edit', ['aluno' => $aluno->id]) }}" class="btn btn-primary" type="button" title="Editar aluno"><i class="bi-person-gear" style="font-size: 1.5rem;"></i></a>
                                    <a href="{{ route('form_excluir_aluno', ['id' => $aluno->id]) }}" class="btn btn-primary" type="button" title="Excluir aluno"><i class="bi-person-dash" style="font-size: 1.5rem;"></i></a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="3">Nenhum aluno cadastrado</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection