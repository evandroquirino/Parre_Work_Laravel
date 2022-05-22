@extends('layouts.app')
@section('title', 'Parresia Work')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Painel de Controle</div>

                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <section class="d-flex justify-content-between">
                            <button class="btn btn-success">NOVO PEDIDO</button>
                            
                            <div class="dropdown">
                                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    CADASTRAR...
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('clientes.index') }}">Cliente</a>
                                    <a class="dropdown-item" href="{{ route('costureiras.index') }}">Costureira/facção</a>
                                    <a class="dropdown-item" href="{{ route('personalizacoes.index') }}">Personalização</a>
                                    <a class="dropdown-item" href="{{ route('tecidos.index') }}">Tipo de Tecido</a>
                                </div>
                                </div>
                    </section> 
                    
                    //inserir foreach para listar todos os pedidos.
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src=".../100px180/" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                            <a href="#" class="btn btn-primary">Visitar</a>
                        </div>
                    </div>
                    //
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
