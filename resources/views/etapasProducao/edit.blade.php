@extends('layouts.app')
@section('title', 'Editar Etapa/Processo')

@section('content')
    <h1 class="ml-3">Editar Etapa/Processo</h1>
    <form action="{{ route('etapa.update', $etapa) }}" method="POST" class="p-5">
    @csrf
        @method('PUT')
        <div class="md-3">
            <label for="nome" class="form-label">Nome da Etapa/Processo</label>
            <input type="text" value="{{ $etapa->nome }}" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
        </div>
        <button class="btn btn-success">Editar</button>
    </form>
@endsection
