@extends('layouts.app')
@section('title', 'Nova Costureira')

@section('content')
    <h1 class="ml-3">Nova Costureira</h1>
    <form action="{{ route('costureira.store') }}" method="POST" class="p-5">
    @csrf
        <div class="md-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
        </div>

        <div class="md-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Digite o telefone" required>
        </div>

        <div class="md-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input class="form-control" name="endereco" id="endereco" placeholder="Digite o endereço"  required>
        </div>

        <button class="btn btn-success">Enviar</button>
    </form>
@endsection
