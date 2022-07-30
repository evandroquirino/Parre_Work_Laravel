@extends('adminlte::page')
@section('title', 'Cadastro de Pedidos')

@section('content')
<section class="d-flex justify-content-between ml-2">
    <h1>Pedidos</h1>
    <div class="mt-2">
        <a class="btn btn-secondary  mr-2" href="{{ route('dashboard')}}">Voltar para Home</a>
    </div>
</section>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome/Pedido</th>
                <th scope="col">Cor</th>
                <th scope="col">Tecido</th>
                <th scope="col">Detalhes</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pedidos as $pedido)
                <tr>
                    <td>
                        <a href="{{ route('pedidos.show', $pedido) }}">{{ $pedido->nome }}</a> 
                    </td>
                    <td>
                        {{ $pedido->cor }}
                    </td>
                    <td>
                        @foreach ($tecidos as $tecido)
                            @if ($tecido->id == $pedido->tecido_id)
                                {{ $tecido->nome }}
                            @endif
                        @endforeach                        
                    </td>
                    <td>
                        {{ $pedido->detalhes }}
                    </td>
                    <td>
                        <p>{{ App\Http\Controllers\PedidoController::totaldePecas($pedido->id) }} </p>
                    </td>
                    <td style="display: flex">
                        <a href="{{ route('pedido.edit', $pedido) }}" class="btn btn-warning">
                            Editar
                        </a>

                        <form action="{{ route('pedido.destroy', $pedido) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button 
                            type="submit" 
                            class="btn btn-danger" 
                            onclick="return confirm('tem certeza que deseja apagar?')">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">
                        Nenhum pedido cadastrado
                    </td>
                </tr>
            @endforelse
        </tbody>
        <a class="btn btn-success ml-2 mb-2" href="{{ route('pedidos.create') }}">Novo Pedido</a>
    </table>
    
@endsection

