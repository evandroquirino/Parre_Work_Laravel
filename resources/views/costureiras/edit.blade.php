@extends('layouts.app')
@section('title', 'Editar Costureira')

@section('content')
    <h1 class="ml-3">Editar Costureira</h1>
    <form action="{{ route('costureira.update', $costureira) }}" method="POST" class="p-5">
    @csrf
        @method('PUT')
        <div class="md-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" value="{{ $costureira->nome }}" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
        </div>

        <div class="md-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" value="{{ $costureira->telefone }}" class="form-control" name="telefone" id="telefone" placeholder="Digite o telefone" required>
        </div>

        <div class="md-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input class="form-control" value="{{ $costureira->endereco }}"name="endereco" id="endereco" placeholder="Digite o endereço"  required>
        </div>

        <button class="btn btn-success">Editar</button>
    </form>
@endsection
