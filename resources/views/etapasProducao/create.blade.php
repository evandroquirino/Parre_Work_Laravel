@extends('adminlte::page')
@section('title', 'Nova Etapa')

@section('content')
    <h1 class="ml-3">Nova Etapa de Produção</h1>
    <form action="{{ route('etapa.store') }}" method="POST" class="p-5">
    @csrf
        <div class="md-3">
            <label for="nome" class="form-label">Nome da Etapa/Processo</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
        </div>
        <button class="btn btn-success">Enviar</button>
    </form>
@endsection
