<?php

namespace App\Http\Controllers;

use App\Models\Personalizacao;
use Illuminate\Http\Request;

class PersonalizacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personalizacoes = Personalizacao::orderBy('nome', 'asc')->get();
        return view('personalizacoes.index', [
            'personalizacoes' => $personalizacoes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personalizacoes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->except('_token');
        Personalizacao::create($dados);

        return redirect( '/personalizacoes' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personalizacao  $personalizacao
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personalizacao  $personalizacao
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personalizacao = Personalizacao::find($id);

        return view('personalizacoes.edit', [
           'personalizacao' => $personalizacao 
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personalizacao  $personalizacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $personalizacao = Personalizacao::find($id);

        $personalizacao->update([
            'nome' => $request->nome,
            'responsavel' => $request->responsavel,
            'telefone' => $request->telefone
        ]);
        return redirect('/personalizacoes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personalizacao  $personalizacao
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personalizacao = Personalizacao::find($id);
        $personalizacao->delete();
        return redirect('/personalizacoes');
    }
}
