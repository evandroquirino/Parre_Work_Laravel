@extends('adminlte::page')
@section('title', 'Novo Pedido')

@section('content')
    <h1 class="ml-3">Novo Pedido</h1>
    <form action="{{ route('pedido.store') }}" method="POST" class="p-5">
    @csrf

        <div class="md-3">
            <label for="nome" class="form-label">Nome/Apelido</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite os nome do pedido" required>
        </div>
        <div class="md-3">
            <label for="costureira" class="form-label">costureira</label>
            <select name="costureira_id" id="costureira" class="form-control">
                @foreach($costureiras as $costureira)
                    <option value="{{ $costureira->id }}">{{ $costureira->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="md-3">
            <label for="personalizacao" class="form-label">personalizacao</label>
            <select name="personalizacao_id" id="personalizacao" class="form-control">
                @foreach($personalizacaos as $personalizacao)
                    <option value="{{ $personalizacao->id }}">{{ $personalizacao->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="md-3">
            <label for="tecido" class="form-label">tecido</label>
            <select name="tecido_id" id="tecido" class="form-control">
                @foreach($tecidos as $tecido)
                    <option value="{{ $tecido->id }}">{{ $tecido->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="md-3">
            <label for="cliente" class="form-label">cliente</label>
            <select name="cliente_id" id="cliente" class="form-control">
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="md-3">
            <label for="etapa" class="form-label">etapa</label>
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
            <label for="detalhes" class="form-label">detalhes</label>
            <input type="text" class="form-control" name="detalhes" id="detalhes" placeholder="Digite os detalhes" required>
        </div>

        <button class="btn btn-success">Enviar</button>
    </form>
@endsection
