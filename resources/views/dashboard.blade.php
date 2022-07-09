@extends('adminlte::page')

@section('content_header')
    <section class="d-flex justify-content-between">
        <a href="{{ route('pedidos.index') }}">
            <button class="btn btn-success">PEDIDOS</button>
        </a>
            
            <div class="dropdown">
                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    CADASTRAR...
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route('clientes.index') }}">Cliente</a>
                    <a class="dropdown-item" href="{{ route('costureiras.index') }}">Costureira/facção</a>
                    <a class="dropdown-item" href="{{ route('personalizacoes.index') }}">Personalização</a>
                    <a class="dropdown-item" href="{{ route('tecidos.index') }}">Tipo de Tecido</a>
                    <a class="dropdown-item" href="{{ route('etapas.index') }}">Etapas da Produção</a>
                </div>
                </div>
    </section> 
@stop

@section('content')
    //inserir foreach para listar todos os pedidos.
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src=".../100px180/" alt="Imagem de capa do card">
        <div class="card-body">
            <h5 class="card-title">Título do card</h5>
            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
            <a href="#" class="btn btn-primary">Visitar</a>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
