@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3><i class="bi-journal"></i> Livros</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('form_novo_livro') }}" class="btn btn-primary" role="button">
                <i class="bi-journal-plus"></i> Cadastrar novo livro
            </a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <table class="table table-hover table-bordered">
                <tr>
                    <td>Lista de livros</td>
                </tr>
            </table>
        </div>
    </div>
@endsection