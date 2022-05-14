@extends('layouts.app')
@section('title', 'Editar Personalização')

@section('content')
    <h1 class="ml-3">Editar Personalização</h1>
    <form action="{{ route('personalizacao.update', $personalizacao) }}" method="POST" class="p-5">
    @csrf
        @method('PUT')
        <div class="md-3">
            <label for="nome" class="form-label">Nome da personalização</label>
            <input type="text" value="{{ $personalizacao->nome }}" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
        </div>

        <div class="md-3">
            <label for="responsavel" class="form-label">Responsavel</label>
            <input type="text" value="{{ $personalizacao->responsavel }}" class="form-control" name="responsavel" id="responsavel" placeholder="Digite o Nome do responsavel" required>
        </div>

        <div class="md-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input class="form-control" value="{{ $personalizacao->telefone }}" name="telefone" id="telefone" placeholder="Digite o telefone"  required>
        </div>

        <button class="btn btn-success">Editar</button>
    </form>
@endsection
