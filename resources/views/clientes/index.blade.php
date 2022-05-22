@extends('layouts.app')
@section('title', 'Cadastro de Clientes')

@section('content')
<section class="d-flex justify-content-between ml-2">
    <h1>Lista de Clientes</h1>
    <a class="btn btn-secondary mr-2" href="{{ route('dashboard')}}">Voltar para Home</a>
</section>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>
                        {{ $cliente->nome }}
                    </td>
                    <td>
                        {{ $cliente->telefone }}
                    </td>
                    <td style="display: flex">
                        <a href="{{ route('cliente.edit', $cliente) }}" class="btn btn-warning">
                            Editar
                        </a>

                        <form action="{{ route('cliente.destroy', $cliente) }}" method="POST">
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
        <a class="btn btn-success ml-2" href="{{ route('clientes.create')}}">Novo Cliente</a>
    </table>
    
@endsection
