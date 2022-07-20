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
                    <p><strong>Cliente</strong>: 
                        @foreach ($cliente as $cliente)
                            @if ($cliente->id == $pedido->cliente_id)
                                {{ $cliente->nome }}
                            @endif
                        @endforeach 
                    </p>
                    <p><strong>Etapa</strong>: 
                        @foreach ($etapa as $etapa)
                            @if ($etapa->id == $pedido->etapa_id)
                                {{ $etapa->nome }}
                            @endif
                        @endforeach 
                    </p>
                    <p><strong>Costureira</strong>: 
                        @foreach ($costureira as $costureira)
                            @if ($costureira->id == $pedido->costureira_id)
                                {{ $costureira->nome }}
                            @endif
                        @endforeach 
                    </p>
                    <p><strong>Personalização</strong>: 
                        @foreach ($personalizacao as $personalizacao)
                            @if ($personalizacao->id == $pedido->personalizacao_id)
                                {{ $personalizacao->nome }}
                            @endif
                        @endforeach 
                    </p>
                    <p><strong>Tecido</strong>: 
                        @foreach ($tecido as $tecido)
                            @if ($tecido->id == $pedido->tecido_id)
                                {{ $tecido->nome }}
                            @endif
                        @endforeach 
                    </p>
                    <p><strong>Cor</strong>: {{ $pedido->cor }}</p>
                    <p><strong>Detalhes</strong>: {{ $pedido->detalhes }}</p>
                    <p><strong>Data do pedido</strong>: {{ $pedido->data_pedido }}</p>

                    <br>
                </div> 
                <a class="card col-md-3 h-100" href="/img/layouts/{{$pedido->imagem}}"> 
                    <img src="/img/layouts/{{$pedido->imagem}}" alt="{{ $pedido->nome }}">
                </a>
            </div>  
            <a class="btn btn-success" href="{{ route('pedidos.index') }}">
                Voltar para todos os pedidos
            </a>       
        </div>
       
    </div>
    
@endsection
