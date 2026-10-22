@extends('layouts.app')

@section('content')
@section('page_title', 'Alunos Aprovados')
@section('title', 'Aprovados — DoBraga Educacional')

<a href="{{ route('aprovados.create') }}" class="btn btn-success mb-3">Novo Aprovado</a>

<form action="{{ route('aprovados.index') }}" method="GET" class="mb-4 flex items-center">
    <input
        type="text"
        name="search"
        value="{{ request('search') }}"
        placeholder="Buscar Aprovado..."
        class="border rounded-lg p-2 mr-2 w-64">
    <button type="submit" class="bg-blue text-black px-4 py-2 rounded-lg">
        Pesquisar
    </button>
</form>

<div class="container">
<div class="row">
    @forelse($aprovados as $aprovado)
    <div class="col-md-2 mb-3">
        <div class="card">
            @if($aprovado->imagem)
        <img src="{{ asset('storage/' . $aprovado->imagem) }}" width="100%">
    @else
        <span>Sem imagem</span>
    @endif
            <div class="card-body">
                <h5 class="card-title">{{ $aprovado->nome }}</h5>
                <p class="card-text">{{ Str::limit($aprovado->descricao, 100) }}</p>
                <a href="{{ route('aprovados.edit', $aprovado) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('aprovados.destroy', $aprovado) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Excluir</button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <p>Não há aprovados cadastrados.</p>
    @endforelse
</div>
<div class="mt-4">
    {{ $aprovados->appends(['search' => request('search')])->links() }}
</div>
</div>


@endsection