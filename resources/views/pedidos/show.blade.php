@extends('adminlte::page')
@section('title', 'Cadastro de Pedidos')

@section('content')

    <div class="card">
        <div class="card-header">
            Detalhes do Pedido: {{ $pedido->nome }}
        </div>

        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div>
                    <p><strong>Nome</strong>: {{ $pedido->nome }}</p>
                    <p><strong>Cliente</strong>: {{ $pedido->cliente_id }}</p>
                    <p><strong>Etapa</strong>: {{ $pedido->etapa_id }}</p>
                    <p><strong>Costureira</strong>: {{ $pedido->costureira_id }}</p>
                    <p><strong>Personalização</strong>: {{ $pedido->personalizacao_id }}</p>
                    <p><strong>Tecido</strong>: {{ $pedido->tecido_id }}</p>
                    <p><strong>Cor</strong>: {{ $pedido->cor }}</p>
                    <p><strong>Detalhes</strong>: {{ $pedido->detalhes }}</p>

                    <br>
                </div>  
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                        <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
                    </svg>
                </div> 
            </div>  
            <a class="btn btn-success" href="{{ route('pedidos.index') }}">
                Voltar para todos os pedidos
            </a>       
        </div>
       
    </div>
    
@endsection
