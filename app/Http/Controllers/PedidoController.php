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
        // $pedidos = Pedido::with('tecido')->orderBy('nome', 'asc')->get();
        $pedidos = Pedido::all();
        $tecidos = Tecido::all();
        return view('pedidos.index', compact('pedidos', 'tecidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $costureiras = ModelsCostureira::orderBy('nome', 'asc')->get();
        $personalizacaos = Personalizacao::orderBy('nome', 'asc')->get();
        $tecidos = Tecido::orderBy('nome', 'asc')->get();
        $clientes = Cliente::orderBy('nome', 'asc')->get();
        $etapas = Etapa::orderBy('nome', 'asc')->get();
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
        $pedido = new Pedido();

        $pedido->nome = $request->nome;
        $pedido->costureira_id = $request->costureira_id;
        $pedido->personalizacao_id = $request->personalizacao_id;
        $pedido->tecido_id = $request->tecido_id;
        $pedido->cliente_id = $request->cliente_id;
        $pedido->etapa_id = $request->etapa_id;
        $pedido->cor = $request->cor;
        $pedido->detalhes = $request->detalhes;
        $pedido->imagem = $request->imagem;
        $pedido->data_pedido = $request->data_pedido;
        $pedido->camisetaPP = $request->camisetaPP;
        $pedido->camisetaP = $request->camisetaP;
        $pedido->camisetaM = $request->camisetaM;
        $pedido->camisetaG = $request->camisetaG;
        $pedido->camisetaGG = $request->camisetaGG;
        $pedido->camisetaXG = $request->camisetaXG;
        $pedido->camisetaEXG = $request->camisetaEXG;
        $pedido->camisetaXGG = $request->camisetaXGG;
        $pedido->camisetaEXGG = $request->camisetaEXGG;
        $pedido->babyPP = $request->babyPP;
        $pedido->babyP = $request->babyP;
        $pedido->babyM = $request->babyM;
        $pedido->babyG = $request->babyG;
        $pedido->babyGG = $request->babyGG;
        $pedido->babyXG = $request->babyXG;
        $pedido->babyEXG = $request->babyEXG;
        $pedido->babyXGG = $request->babyXGG;
        $pedido->infantil02 = $request->infantil02;
        $pedido->infantil04 = $request->infantil04;
        $pedido->infantil06 = $request->infantil06;
        $pedido->infantil08 = $request->infantil08;
        $pedido->infantil10 = $request->infantil10;
        $pedido->infantil12 = $request->infantil12;
        $pedido->infantil14 = $request->infantil14;
        // Image Upload
        if($request->hasFile('imagem')) {
            $image = $request->file('imagem');
            $numeroRandomico = rand(0000,9999);
            $diretorio = "img/layouts";
            $extensao = $image->guessClientExtension();
            $nomeImagem = "layout_".$numeroRandomico.".".$extensao;
            $image->move($diretorio, $nomeImagem);
            $pedido->imagem = $nomeImagem;
        }

        $pedido->save();

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
        $pedido = Pedido::find($id);
        $tecido = Tecido::all();
        $cliente = Cliente::all();
        $etapa = Etapa::all();
        $costureira = ModelsCostureira::all();
        $personalizacao = Personalizacao::all();

        $pedido->data_pedido = date('d/m/Y', strtotime($pedido->data_pedido));

        return view('pedidos.show', compact('pedido', 'tecido', 'cliente', 'etapa', 'costureira', 'personalizacao'));
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

