<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

use App\Http\Requests\LivroRequest;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = Livro::all();

        return view('livro.index', compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livro.novo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LivroRequest $request)
    {
        $validated = $request->validated();

        $livro = Livro::create($validated);

        $request->session()->flash('sucesso', 'Livro cadastrado com sucesso!');

        return redirect()->route('livros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function show(Livro $livro)
    {
        return view('livro.exibir', compact('livro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function edit(Livro $livro)
    {
        return view('livro.editar', compact('livro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function update(LivroRequest $request, Livro $livro)
    {
        $validated = $request->validated();

        $livro->update($validated);

        $request->session()->flash('sucesso', 'Livro atualizado com sucesso!');

        return redirect()->route('livros.index');
    }

    public function formExcluir(Request $request, $id)
    {
        $livro = Livro::findOrFail($id);

        return view('livro.form_excluir', compact('livro'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Livro $livro)
    {
        $livro->delete();

        $request->session()->flash('sucesso', 'Livro excluído com sucesso!');

        return redirect()->route('livros.index');
    }
}
