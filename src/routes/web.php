<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlunoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alunos', [AlunoController::class, 'index'])->name('alunos');
Route::get('/alunos/novo', [AlunoController::class, 'create'])->name('form_novo_aluno');
Route::post('/alunos', [AlunoController::class, 'store'])->name('salvar_novo_aluno');
Route::get('/alunos/{id}', [AlunoController::class, 'show'])->name('exibir_aluno');
Route::get('/alunos/{id}/editar', [AlunoController::class, 'edit'])->name('form_editar_aluno');
Route::patch('/alunos/{id}', [AlunoController::class, 'update'])->name('atualizar_aluno');
Route::delete('/alunos/{id}', [AlunoController::class, 'destroy'])->name('excluir_aluno');
