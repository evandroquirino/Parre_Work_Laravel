@extends('adminlte::page')
@section('title', 'Cadastro de tipo de tecidos')

@section('content')
<section class="d-flex justify-content-between ml-2">
    
    <h1>Lista de Tecidos</h1>
    <div class="mt-2">
        <a class="btn btn-secondary  mr-2" href="{{ route('dashboard')}}">Voltar para Home</a>
    </div>
</section>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tecidos as $tecido)
                <tr>
                    <td>
                        {{ $tecido->nome }}
                    </td>
                    <td style="display: flex">
                        <a href="{{ route('tecido.edit', $tecido) }}" class="btn btn-warning">
                            Editar
                        </a>

                        <form action="{{ route('tecido.destroy', $tecido) }}" method="POST">
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
        <a class="btn btn-success ml-2" href="{{ route('tecidos.create')}}">Novo Tecido</a>
    </table>
    
@endsection
