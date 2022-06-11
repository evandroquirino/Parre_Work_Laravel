@extends('layouts.app')
@section('title', 'Cadastro de Pedidos')

@section('content')
<section class="d-flex justify-content-between ml-2">
    <h1>Pedidos</h1>
    <a class="btn btn-secondary mr-2" href="{{ route('dashboard')}}">Voltar para Home</a>
</section>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Costureira</th>
                <th scope="col">Cor</th>
                <th scope="col">Detalhes</th>

            </tr>
        </thead>
        <tbody>
            @foreach($pedidos as $pedido)
                <tr>
                    <td>
                        {{ $pedido->costureira_id }}
                    </td>
                    <td>
                        {{ $pedido->cor }}
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
        <a class="btn btn-success ml-2" href="">Novo Cliente</a>
    </table>
    
@endsection
