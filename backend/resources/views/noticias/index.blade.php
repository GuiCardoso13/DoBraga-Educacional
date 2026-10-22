@extends('layouts.app')

@section('content')
@section('page_title', 'Notícias')
@section('title', 'Notícias — DoBraga Educacional')

<a href="{{ route('noticias.create') }}" class="btn btn-success mb-3">Nova Notícia</a>
<form action="{{ route('noticias.index') }}" method="GET" class="mb-4 flex items-center">
    <input
        type="text"
        name="search"
        value="{{ request('search') }}"
        placeholder="Buscar Noticia..."
        class="border rounded-lg p-2 mr-2 w-64">
    <button type="submit" class="bg-blue text-black px-4 py-2 rounded-lg">
        Pesquisar
    </button>
</form>
<div class="row">
    @forelse($noticias as $noticia)
    <div class="col-md-4 mb-3">
        <div class="card">
            <img src="{{ asset('storage/' . $noticia->imagem) }}" class="card-img-top" alt="Imagem da Notícia">
            <div class="card-body">
                <h5 class="card-title">{{ $noticia->titulo }}</h5>
                <p class="card-text">{{ Str::limit($noticia->descricao, 100) }}</p>
                <a href="{{ route('noticias.edit', $noticia) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('noticias.destroy', $noticia) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Excluir</button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <p>Não há notícias cadastradas.</p>
    @endforelse
</div>
<div class="mt-4">
    {{ $noticias->appends(['search' => request('search')])->links() }}
</div>
@endsection