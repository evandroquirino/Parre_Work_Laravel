<?php

namespace App\Http\Controllers;

use App\Models\Costureira;
use App\Http\Resources\Costureira as CostureiraResource;
use Illuminate\Http\Request;

class CostureirasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costureiras = Costureira::orderBy('nome', 'asc')->get();
        return view('costureiras.index', [
            'costureiras' => $costureiras
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('costureiras.create');
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
        Costureira::create($dados);

        return redirect( '/costureiras' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $costureira = Costureira::find($id);

        return view('costureiras.edit', [
           'costureira' => $costureira 
        ]);
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
        $costureira = Costureira::find($id);

        $costureira->update([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco
        ]);
        return redirect('/costureiras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $costureira = Costureira::find($id);
        $costureira->delete();
        return redirect('/costureiras');
    }

    public function indexApi()
    {
        $costureiras = Costureira::paginate(15);
        return CostureiraResource::collection( $costureiras);
    }

    public function showApi($id)
    {
        $costureira = Costureira::findOrFail($id);
        return new CostureiraResource( $costureira);
    }

    public function storeApi(Request $request)
    {
        $costureira = new Costureira;
        $costureira->nome = $request->input('nome');
        $costureira->telefone = $request->input('telefone');
        $costureira->endereco = $request->input('endereco');

        if( $costureira->save() ){
            return new CostureiraResource( $costureira);
        }

    }

    public function updateApi(Request $request)
    {
        $costureira = Costureira::findOrFail($request->id);
        $costureira->nome = $request->input('nome');
        $costureira->telefone = $request->input('telefone');
        $costureira->endereco = $request->input('endereco');

        if($costureira->save()){
            return new CostureiraResource($costureira);
        }
    }

    public function destroyApi($id)
    {
        $costureira = Costureira::findOrFail($id);
        if($costureira->delete()){
            return new CostureiraResource($costureira);
        }
    }

}
