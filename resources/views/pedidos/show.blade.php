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
                    <p><strong>Total de peças</strong>: {{ App\Http\Controllers\PedidoController::totaldePecas($pedido->id) }}</p>
                    <p><strong>Data do pedido</strong>: {{ $pedido->data_pedido }}</p>

                    <br>
                </div> 
                <div>
                <table class="table table-striped table-sm table-dark">
                    <thead>
                        <tr>
                        <th scope="col">Camiseta</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">PP</th>
                        <td>{{ $pedido->camisetaPP }}</td>
                        </tr>
                        <tr>
                        <th scope="row">P</th>
                        <td>{{ $pedido->camisetaP }}</td>
                        </tr>
                        <tr>
                        <th scope="row">M</th>
                        <td>{{ $pedido->camisetaM }}</td>
                        </tr>
                        <tr>
                        <th scope="row">G</th>
                        <td>{{ $pedido->camisetaG }}</td>
                        </tr>
                        <tr>
                        <th scope="row">GG</th>
                        <td>{{ $pedido->camisetaGG }}</td>
                        </tr>
                        <tr>
                        <th scope="row">XG</th>
                        <td>{{ $pedido->camisetaXG }}</td>
                        </tr>
                        <tr>
                        <th scope="row">EXG</th>
                        <td>{{ $pedido->camisetaEXG }}</td>
                        </tr>
                        <tr>
                        <th scope="row">XGG</th>
                        <td>{{ $pedido->camisetaXGG }}</td>
                        </tr>
                        <tr>
                        <th scope="row">EXGG</th>
                        <td>{{ $pedido->camisetaEXGG }}</td>
                        </tr>
                    </tbody>
                </table>
                </div>
                <div>
                <table class="table table-striped table-sm table-dark">
                    <thead>
                        <tr>
                        <th scope="col">Baby Look</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">PP</th>
                        <td>{{ $pedido->babyPP }}</td>
                        </tr>
                        <tr>
                        <th scope="row">P</th>
                        <td>{{ $pedido->babyP }}</td>
                        </tr>
                        <tr>
                        <th scope="row">M</th>
                        <td>{{ $pedido->babyM }}</td>
                        </tr>
                        <tr>
                        <th scope="row">G</th>
                        <td>{{ $pedido->babyG }}</td>
                        </tr>
                        <tr>
                        <th scope="row">GG</th>
                        <td>{{ $pedido->babyGG }}</td>
                        </tr>
                        <tr>
                        <th scope="row">XG</th>
                        <td>{{ $pedido->babyXG }}</td>
                        </tr>
                        <tr>
                        <th scope="row">EXG</th>
                        <td>{{ $pedido->babyEXG }}</td>
                        </tr>
                        <tr>
                        <th scope="row">XGG</th>
                        <td>{{ $pedido->babyXGG }}</td>
                        </tr>
                    </tbody>
                </table>
                </div>
                <div>
                <table class="table table-striped table-sm table-dark">
                    <thead>
                        <tr>
                        <th scope="col">Infantil</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">02</th>
                        <td>{{ $pedido->infantil02 }}</td>
                        </tr>
                        <tr>
                        <th scope="row">04</th>
                        <td>{{ $pedido->infantil04 }}</td>
                        </tr>
                        <tr>
                        <th scope="row">06</th>
                        <td>{{ $pedido->infantil06 }}</td>
                        </tr>
                        <tr>
                        <th scope="row">08</th>
                        <td>{{ $pedido->infantil08 }}</td>
                        </tr>
                        <tr>
                        <th scope="row">10</th>
                        <td>{{ $pedido->infantil10 }}</td>
                        </tr>
                        <tr>
                        <th scope="row">12</th>
                        <td>{{ $pedido->infantil12 }}</td>
                        </tr>
                        <tr>
                        <th scope="row">14</th>
                        <td>{{ $pedido->infantil14 }}</td>
                        </tr>
                    </tbody>
                </table>
                </div>
                <a class="card col-md-3 w-100 h-100" href="/img/layouts/{{$pedido->imagem}}"> 
                    <img src="/img/layouts/{{$pedido->imagem}}" alt="{{ $pedido->nome }}">
                </a>
            </div>  
            <a class="btn btn-success" href="{{ route('pedidos.index') }}">
                Voltar para todos os pedidos
            </a>       
        </div>
       
    </div>
    
@endsection

