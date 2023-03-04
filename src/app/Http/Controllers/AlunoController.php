<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

use App\Http\Requests\AlunoRequest;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();

        return view('aluno.index', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aluno.novo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlunoRequest $request)
    {
        $validated = $request->validated();

        $aluno = Aluno::create($validated);

        $request->session()->flash('sucesso', 'Aluno cadastrado com sucesso!');

        return redirect()->route('alunos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {
        return view('aluno.exibir', compact('aluno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno $aluno)
    {
        return view('aluno.editar', compact('aluno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(AlunoRequest $request, Aluno $aluno)
    {
        $validated = $request->validated();

        $aluno->update($validated);

        $request->session()->flash('sucesso', 'Aluno atualizado com sucesso!');

        return redirect()->route('alunos.index');
    }

    public function formExcluir(Request $request, $id)
    {
        $aluno = Aluno::findOrFail($id);

        return view('aluno.form_excluir', compact('aluno'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Aluno $aluno)
    {
        $aluno->delete();

        $request->session()->flash('sucesso', 'Aluno excluído com sucesso!');

        return redirect()->route('alunos.index');
    }
}
