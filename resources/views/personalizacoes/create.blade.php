@extends('adminlte::page')
@section('title', 'Nova Personalização')

@section('content')
    <h1 class="ml-3">Nova Personalização</h1>
    <form action="{{ route('personalizacao.store') }}" method="POST" class="p-5">
    @csrf
        <div class="md-3">
            <label for="nome" class="form-label">Nome da personalização</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
        </div>

        <div class="md-3">
            <label for="responsavel" class="form-label">Responsavel</label>
            <input type="text" class="form-control" name="responsavel" id="responsavel" placeholder="Digite o Nome do responsavel" required>
        </div>

        <div class="md-3">
            <label for="telefone" class="form-label" onkeypress="$(this).mask('(00) 0000-00009')">Telefone</label>
            <input class="form-control" name="telefone" id="telefone" placeholder="Digite o telefone"  required>
        </div>

        <button class="btn btn-success">Enviar</button>
    </form>
@endsection
