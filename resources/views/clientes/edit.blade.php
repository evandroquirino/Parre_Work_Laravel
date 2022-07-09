@extends('adminlte::page')
@section('title', 'Editar Cliente')

@section('content')
    <h1 class="ml-3">Editar Cliente</h1>
    <form action="{{ route('cliente.update', $cliente) }}" method="POST" class="p-5">
    @csrf
        @method('PUT')
        <div class="md-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" value="{{ $cliente->nome }}" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
        </div>

        <div class="md-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" value="{{ $cliente->telefone }}" class="form-control" name="telefone" id="telefone" placeholder="Digite o telefone" required>
        </div>

        <button class="btn btn-success">Editar</button>
    </form>
@endsection
