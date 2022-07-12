<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Costureira as ModelsCostureira;
use App\Models\Etapa;
use App\Models\Pedido;
use App\Models\Personalizacao;
use App\Models\Tecido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::get();
        return view('pedidos.index', [
            'pedidos' => $pedidos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $costureiras = ModelsCostureira::get();
        $personalizacaos = Personalizacao::get();
        $tecidos = Tecido::get();
        $clientes = Cliente::get();
        $etapas = Etapa::get();
        return view('pedidos.create', [
            'costureiras' => $costureiras,
            'personalizacaos' => $personalizacaos,
            'tecidos' => $tecidos,
            'clientes' => $clientes,
            'etapas' => $etapas
        ]);
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
        Pedido::create($dados);

        return redirect( '/pedidos' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pedidos.show', [
            'pedido' => Pedido::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
