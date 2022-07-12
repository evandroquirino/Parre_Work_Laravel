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

            </tr>
        </thead>
        <tbody>
            @foreach($pedidos as $pedido)
                <tr>
                    <td>
                        <a href="{{ route('pedidos.show', $pedido) }}">{{ $pedido->nome }}</a> 
                    </td>
                    <td>
                        {{ $pedido->cor }}
                    </td>
                    <td>
                        {{ $pedido->tecido_id }}
                    </td>
                    <td>
                        {{ $pedido->detalhes }}
                    </td>
                    <td style="display: flex">
                        <a href="" class="btn btn-warning">
                            Editar
                        </a>

                        <form action="" method="POST">
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
            @endforeach
        </tbody>
        <a class="btn btn-success ml-2" href="{{ route('pedidos.create') }}">Novo Pedido</a>
    </table>
    
@endsection
