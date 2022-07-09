@extends('adminlte::page')
@section('title', 'Cadastro de tipo de personalização')

@section('content')
<section class="d-flex justify-content-between ml-2">
    <h1>Lista de Personalizações</h1>
    <div class="mt-2">
        <a class="btn btn-secondary  mr-2" href="{{ route('dashboard')}}">Voltar para Home</a>
    </div>    
</section>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Responsável</th>
                <th scope="col">Telefone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($personalizacoes as $personalizacao)
                <tr>
                    <td>
                        {{ $personalizacao->nome }}
                    </td>
                    <td>
                        {{ $personalizacao->responsavel }}
                    </td>
                    <td>
                        {{ $personalizacao->telefone }}
                    </td>
                    <td style="display: flex">
                        <a href="{{ route('personalizacao.edit', $personalizacao) }}" class="btn btn-warning">
                            Editar
                        </a>

                        <form action="{{ route('personalizacao.destroy', $personalizacao) }}" method="POST">
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
        <a class="btn btn-success ml-2" href="{{ route('personalizacoes.create')}}">Nova Personalização</a>
    </table>
    
@endsection
