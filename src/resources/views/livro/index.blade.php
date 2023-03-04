@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3><i class="bi-journal"></i> Livros</h3>
        </div>
    </div>

    @if(Session::has('sucesso'))
        <div class="alert alert-success mb-3">
            {{ Session::get('sucesso') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('livros.create') }}" class="btn btn-primary" role="button">
                <i class="bi-journal-plus"></i> Cadastrar novo livro
            </a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Código</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($livros as $livro)
                        <tr>
                            <td>{{ $livro->nome }}</td>
                            <td>{{ $livro->codigo }}</td>
                            <td>
                                <div class="d-grid gap-3 d-md-block">
                                    <a href="{{ route('livros.show', ['livro' => $livro->id]) }}" class="btn btn-primary" type="button" title="Visualizar livro"><i class="bi-journal-text" style="font-size: 1.5rem;"></i></a>
                                    <a href="{{ route('livros.edit', ['livro' => $livro->id]) }}" class="btn btn-secondary" type="button" title="Editar livro"><i class="bi-journal-code" style="font-size: 1.5rem;"></i></a>
                                    <a href="{{ route('form_excluir_livro', ['id' => $livro->id]) }}" class="btn btn-danger" type="button" title="Excluir livro"><i class="bi-journal-minus" style="font-size: 1.5rem;"></i></a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="3">Nenhum livro cadastrado</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection