@extends('adminlte::page')
@section('title', 'Editar Tecido')

@section('content')
    <h1 class="ml-3">Editar Tecido</h1>
    <form action="{{ route('tecido.update', $tecido) }}" method="POST" class="p-5">
    @csrf
    @method('PUT')

        <div class="md-3">
            <label for="nome" class="form-label">Nome do Tecido</label>
            <input type="text" value="{{ $tecido->nome }}" class="form-control" name="nome" id="nome" placeholder="Digite o nome e composição" required>
        </div>
        <button class="btn btn-success">Editar</button>
    </form>
@endsection
