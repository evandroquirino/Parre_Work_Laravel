@extends('layouts.app')
@section('title', 'Cadastro de Costureiras')

@section('content')
<section class="d-flex justify-content-between ml-2">
    <h1>Lista de Costureiras</h1>
    <a class="btn btn-secondary mr-2" href="{{ route('dashboard')}}">Voltar para Home</a>
</section>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Endereço</th>
            </tr>
        </thead>
        <tbody>
            @foreach($costureiras as $costureira)
                <tr>
                    <td>
                        {{ $costureira->nome }}
                    </td>
                    <td>
                        {{ $costureira->telefone }}
                    </td>
                    <td>
                        {{ $costureira->endereco }}
                    </td>
                    <td style="display: flex">
                        <a href="{{ route('costureira.edit', $costureira) }}" class="btn btn-warning">
                            Editar
                        </a>

                        <form action="{{ route('costureira.destroy', $costureira) }}" method="POST">
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
        <a class="btn btn-success ml-2" href="{{ route('costureiras.create')}}">Nova Costureira</a>
    </table>
    
@endsection
