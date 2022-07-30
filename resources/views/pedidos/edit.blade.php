@extends('adminlte::page')
@section('title', 'Editar Pedido')

@section('content')
    <h1 class="ml-3">Editar Pedido</h1>
    <form action="{{ route('pedido.update', $pedido) }}" method="POST" enctype="multipart/form-data" class="p-5">
    @csrf
    @method('PUT')
        <div class="md-3">
            <div class="d-flex justify-content-between md-3">
            <label for="nome" class="form-label" >Nome/Apelido</label>
            <div class="form-group d-flex">
                <input type="date" class="form-control" id="data_pedido" name="data_pedido" value="{{$pedido->data_pedido}}">
            </div>
            </div>
            <input type="text" class="form-control" name="nome" id="nome" value="{{$pedido->nome}}" required autofocus>
        </div>
        <div class="md-3">
            <label for="cliente" class="form-label">Cliente</label>
            <div class="d-flex">
                <select name="cliente_id" id="cliente" class="form-control">
                    @foreach($clientes as $cliente)
                        <option 
                            value="{{ $cliente->id }}" 
                            {{ $cliente->id == $pedido->cliente_id ? 'selected' : '' }}
                            >{{ $cliente->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="md-3">
            <label for="costureira" class="form-label">Costureira</label>
            <select name="costureira_id" id="costureira" class="form-control">
                @foreach($costureiras as $costureira)
                    <option value="{{ $costureira->id }}" {{ $costureira->id == $pedido->costureira_id ? 'selected' : '' }}
                    >{{ $costureira->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="md-3">
            <label for="personalizacao" class="form-label">Personalizacao</label>
            <select name="personalizacao_id" id="personalizacao" class="form-control">
                @foreach($personalizacaos as $personalizacao)
                    <option value="{{ $personalizacao->id }}"{{ $personalizacao->id == $pedido->personalizacao_id ? 'selected' : '' }}
                    >{{ $personalizacao->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="md-3">
            <label for="tecido" class="form-label">Tecido</label>
            <select name="tecido_id" id="tecido" class="form-control">
                @foreach($tecidos as $tecido)
                    <option value="{{ $tecido->id }}"{{ $tecido->id == $pedido->tecido_id ? 'selected' : '' }}
                    >{{ $tecido->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="md-3">
            <label for="etapa" class="form-label">Etapa</label>
            <select name="etapa_id" id="etapa" class="form-control">
                @foreach($etapas as $etapa)
                    <option value="{{ $etapa->id }}"{{ $etapa->id == $pedido->etapa_id ? 'selected' : '' }}
                    >{{ $etapa->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="md-3">
            <label for="cor" class="form-label">Cor</label>
            <input type="text" class="form-control" name="cor" id="cor" placeholder="Digite a cor" value="{{$pedido->cor}}"required>
        </div>

        <div class="md-3">
            <label for="detalhes" class="form-label">Detalhes</label>
            <input type="text" class="form-control" name="detalhes" id="detalhes" placeholder="Digite os detalhes" value="{{$pedido->detalhes}}" required>
        </div>

        <div class="d-flex mt-3 mb-2  justify-content-between">
            <div>
                <div>
                <label for="image">Layout</label>
                </div>
                <a href="/img/layouts/{{ $pedido->imagem }}">
                <img src="/img/layouts/{{ $pedido->imagem }}" alt="{{ $pedido->nome }}" class="w-25">
                </a>
                <input type="file" class="form-control-file" id="imagem" name="imagem">
            </div>
        </div>
        <div class="row">
        <div class="col-sm-4">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Camiseta</h5><br/>
                    <div class="d-flex">
                        <label for="typeNumber" class="col align-self-center">PP </label>
                        <input class="form-control w-50" type="number" id="camisetaPP" name="camisetaPP" value="{{$pedido->camisetaPP}}">
                    </div>
                    <div class="d-flex">
                        <label for="typeNumber" class="col align-self-center">P </label>
                        <input class="form-control w-50" type="number" id="camisetaP" name="camisetaP" value="{{$pedido->camisetaP}}">
                    </div>
                    <div class="d-flex">
                        <label for="typeNumber" class="col align-self-center">M </label>
                        <input class="form-control w-50" type="number" id="camisetaM" name="camisetaM" value="{{$pedido->camisetaM}}">
                    </div>
                    <div class="d-flex">
                        <label for="typeNumber" class="col align-self-center">G </label>
                        <input class="form-control w-50" type="number" id="camisetaG" name="camisetaG" value="{{$pedido->camisetaG}}">
                    </div>
                    <div class="d-flex">
                        <label for="typeNumber" class="col align-self-center">GG </label>
                        <input class="form-control w-50" type="number" id="camisetaGG" name="camisetaGG" value="{{$pedido->camisetaGG}}">
                    </div>
                    <div class="d-flex">
                        <label for="typeNumber" class="col align-self-center">XG </label>
                        <input class="form-control w-50" type="number" id="camisetaXG" name="camisetaXG" value="{{$pedido->camisetaXG}}">
                    </div>
                    <div class="d-flex">
                        <label for="typeNumber" class="col align-self-center">EXG </label>
                        <input class="form-control w-50" type="number" id="camisetaEXG" name="camisetaEXG" value="{{$pedido->camisetaEXG}}">
                    </div>
                    <div class="d-flex">
                        <label for="typeNumber" class="col align-self-center">XGG </label>
                        <input class="form-control w-50" type="number" id="camisetaXGG" name="camisetaXGG" value="{{$pedido->camisetaXGG}}">
                    </div>
                    <div class="d-flex">
                        <label for="typeNumber" class="col align-self-center">EXGG </label>
                        <input class="form-control w-50" type="number" id="camisetaEXGG" name="camisetaEXGG" value="{{$pedido->camisetaEXGG}}">
                    </div>
            </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Baby Look</h5><br/>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">PP </label>
                    <input class="form-control w-50" type="number" id="babyPP" name="babyPP" value="{{$pedido->babyPP}}">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">P </label>
                    <input class="form-control w-50" type="number" id="babyP" name="babyP" value="{{$pedido->babyP}}">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">M </label>
                    <input class="form-control w-50" type="number" id="babyM" name="babyM" value="{{$pedido->babyM}}">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">G </label>
                    <input class="form-control w-50" type="number" id="babyG" name="babyG" value="{{$pedido->babyG}}">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">GG </label>
                    <input class="form-control w-50" type="number" id="babyGG" name="babyGG" value="{{$pedido->babyGG}}">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">XG </label>
                    <input class="form-control w-50" type="number" id="babyXG" name="babyXG" value="{{$pedido->babyXG}}">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">EXG </label>
                    <input class="form-control w-50" type="number" id="babyEXG" name="babyEXG" value="{{$pedido->babyEXG}}">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">XGG </label>
                    <input class="form-control w-50" type="number" id="babyXGG" name="babyXGG" value="{{$pedido->babyXGG}}">
                </div>
            </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Infantil</h5><br/>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">02 </label>
                    <input class="form-control w-50" type="number" id="infantil02" name="infantil02" value="{{$pedido->infantil02}}">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">04 </label>
                    <input class="form-control w-50" type="number" id="infantil04" name="infantil04" value="{{$pedido->infantil04}}">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">06 </label>
                    <input class="form-control w-50" type="number" id="infantil06" name="infantil06" value="{{$pedido->infantil06}}">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">08 </label>
                    <input class="form-control w-50" type="number" id="infantil08" name="infantil08" value="{{$pedido->infantil08}}">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">10 </label>
                    <input class="form-control w-50" type="number" id="infantil10" name="infantil10" value="{{$pedido->infantil10}}">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">12 </label>
                    <input class="form-control w-50" type="number" id="infantil12" name="infantil12" value="{{$pedido->infantil12}}">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">14 </label>
                    <input class="form-control w-50" type="number" id="infantil14" name="infantil14" value="{{$pedido->infantil14}}">
                </div>
            </div>
            </div>
        </div>
        </div>

        <button class="btn btn-success">Editar</button>
    </form>
@endsection


