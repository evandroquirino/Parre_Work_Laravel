@extends('adminlte::page')
@section('title', 'Novo Tecido')

@section('content')
    <h1 class="ml-3">Novo Tecido</h1>
    <form action="{{ route('tecido.store') }}" method="POST" class="p-5">
    @csrf
        <div class="md-3">
            <label for="nome" class="form-label">Nome do Tecido</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome e composição" required>
        </div>
        <button class="btn btn-success">Enviar</button>
    </form>
@endsection
