@extends('layouts.app')

@section('content')
@section('page_title', 'Professores')
@section('title', 'Professores — DoBraga Educacional')

<a href="{{ route('professores.create') }}" class="btn btn-success mb-3">Novo Professor</a>

<form action="{{ route('professores.index') }}" method="GET" class="mb-4 flex items-center">
    <input
        type="text"
        name="search"
        value="{{ request('search') }}"
        placeholder="Buscar Professor..."
        class="border rounded-lg p-2 mr-2 w-64">
    <button type="submit" class="bg-blue text-black px-4 py-2 rounded-lg">
        Pesquisar
    </button>
</form>

<div class="row">
    @forelse($professores as $professor)
    <div class="col-md-2 mb-3">
        <div class="card">
            @if($professor->foto)
        <img src="{{ asset('storage/' . $professor->foto) }}" width="100%">
    @else
        <span>Sem foto</span>
    @endif
            <div class="card-body">
                <h5 class="card-title">{{ $professor->nome }}</h5>
                <p class="card-text">{{ Str::limit($professor->descricao, 100) }}</p>
                <a href="{{ route('professores.edit', $professor) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('professores.destroy', $professor) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Excluir</button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <p>Não há professores cadastrados.</p>
    @endforelse
</div>
<div class="mt-4">
    {{ $professores->appends(['search' => request('search')])->links() }}
</div>
@endsection
