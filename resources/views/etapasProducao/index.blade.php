@extends('adminlte::page')
@section('title', 'Etapas da Produção')

@section('content')
<section class="d-flex justify-content-between ml-2">
    <h1>Etapas da Produção</h1>
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
            @foreach($etapas as $etapa)
                <tr>
                    <td>
                        {{ $etapa->nome }}
                    </td>
                    <td style="display: flex">
                        <a href="{{ route('etapa.edit', $etapa) }}" class="btn btn-warning">
                            Editar
                        </a>

                        <form action="{{ route('etapa.destroy', $etapa) }}" method="POST">
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
        <a class="btn btn-success ml-2" href="{{ route('etapas.create')}}">Nova Etapa</a>
    </table>
    
@endsection
