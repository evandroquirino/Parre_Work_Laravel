@extends('adminlte::page')
@section('title', 'Novo Pedido')

@section('content')
    <h1 class="ml-3">Novo Pedido</h1>
    <form action="{{ route('pedido.store') }}" method="POST" enctype="multipart/form-data" class="p-5">
    @csrf

        <div class="md-3">
            <div class="d-flex justify-content-between md-3">
            <label for="nome" class="form-label" >Nome/Apelido</label>
            <div class="form-group d-flex">
                <input type="date" class="form-control" id="data_pedido" name="data_pedido" value="{{$dataHoje}}">
            </div>
            </div>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite os nome do pedido" required autofocus>
        </div>
        <div class="md-3">
            <label for="cliente" class="form-label">Cliente</label>
            <div class="d-flex">
                <select name="cliente_id" id="cliente" class="form-control">
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                    @endforeach
                </select>
                <a class="btn btn-secondary btn-sm" href="{{ route('clientes.create')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="md-3">
            <label for="costureira" class="form-label">Costureira</label>
            <select name="costureira_id" id="costureira" class="form-control">
                @foreach($costureiras as $costureira)
                    <option value="{{ $costureira->id }}">{{ $costureira->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="md-3">
            <label for="personalizacao" class="form-label">Personalizacao</label>
            <select name="personalizacao_id" id="personalizacao" class="form-control">
                @foreach($personalizacaos as $personalizacao)
                    <option value="{{ $personalizacao->id }}">{{ $personalizacao->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="md-3">
            <label for="tecido" class="form-label">Tecido</label>
            <select name="tecido_id" id="tecido" class="form-control">
                @foreach($tecidos as $tecido)
                    <option value="{{ $tecido->id }}">{{ $tecido->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="md-3">
            <label for="etapa" class="form-label">Etapa</label>
            <select name="etapa_id" id="etapa" class="form-control">
                @foreach($etapas as $etapa)
                    <option value="{{ $etapa->id }}">{{ $etapa->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="md-3">
            <label for="cor" class="form-label">Cor</label>
            <input type="text" class="form-control" name="cor" id="cor" placeholder="Digite a cor" required>
        </div>

        <div class="md-3">
            <label for="detalhes" class="form-label">Detalhes</label>
            <input type="text" class="form-control" name="detalhes" id="detalhes" placeholder="Digite os detalhes" required>
        </div>

        <div class="d-flex mt-3 mb-2  justify-content-between">
            <div>
                <label for="image">Layout</label>
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
                        <input class="form-control w-50" type="number" id="camisetaPP" name="camisetaPP">
                    </div>
                    <div class="d-flex">
                        <label for="typeNumber" class="col align-self-center">P </label>
                        <input class="form-control w-50" type="number" id="camisetaP" name="camisetaP">
                    </div>
                    <div class="d-flex">
                        <label for="typeNumber" class="col align-self-center">M </label>
                        <input class="form-control w-50" type="number" id="camisetaM" name="camisetaM">
                    </div>
                    <div class="d-flex">
                        <label for="typeNumber" class="col align-self-center">G </label>
                        <input class="form-control w-50" type="number" id="camisetaG" name="camisetaG">
                    </div>
                    <div class="d-flex">
                        <label for="typeNumber" class="col align-self-center">GG </label>
                        <input class="form-control w-50" type="number" id="camisetaGG" name="camisetaGG">
                    </div>
                    <div class="d-flex">
                        <label for="typeNumber" class="col align-self-center">XG </label>
                        <input class="form-control w-50" type="number" id="camisetaXG" name="camisetaXG">
                    </div>
                    <div class="d-flex">
                        <label for="typeNumber" class="col align-self-center">EXG </label>
                        <input class="form-control w-50" type="number" id="camisetaEXG" name="camisetaEXG">
                    </div>
                    <div class="d-flex">
                        <label for="typeNumber" class="col align-self-center">XGG </label>
                        <input class="form-control w-50" type="number" id="camisetaXGG" name="camisetaXGG">
                    </div>
                    <div class="d-flex">
                        <label for="typeNumber" class="col align-self-center">EXGG </label>
                        <input class="form-control w-50" type="number" id="camisetaEXGG" name="camisetaEXGG">
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
                    <input class="form-control w-50" type="number" id="babyPP" name="babyPP">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">P </label>
                    <input class="form-control w-50" type="number" id="babyP" name="babyP">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">M </label>
                    <input class="form-control w-50" type="number" id="babyM" name="babyM">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">G </label>
                    <input class="form-control w-50" type="number" id="babyG" name="babyG">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">GG </label>
                    <input class="form-control w-50" type="number" id="babyGG" name="babyGG">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">XG </label>
                    <input class="form-control w-50" type="number" id="babyXG" name="babyXG">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">EXG </label>
                    <input class="form-control w-50" type="number" id="babyEXG" name="babyEXG">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">XGG </label>
                    <input class="form-control w-50" type="number" id="babyXGG" name="babyXGG">
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
                    <input class="form-control w-50" type="number" id="infantil02" name="infantil02">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">04 </label>
                    <input class="form-control w-50" type="number" id="infantil04" name="infantil04">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">06 </label>
                    <input class="form-control w-50" type="number" id="infantil06" name="infantil06">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">08 </label>
                    <input class="form-control w-50" type="number" id="infantil08" name="infantil08">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">10 </label>
                    <input class="form-control w-50" type="number" id="infantil10" name="infantil10">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">12 </label>
                    <input class="form-control w-50" type="number" id="infantil12" name="infantil12">
                </div>
                <div class="d-flex">
                    <label for="typeNumber" class="col align-self-center">14 </label>
                    <input class="form-control w-50" type="number" id="infantil14" name="infantil14">
                </div>
            </div>
            </div>
        </div>
        </div>

        <button class="btn btn-success">Enviar</button>
    </form>
@endsection

