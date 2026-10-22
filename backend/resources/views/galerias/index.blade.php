@extends('layouts.app')

@section('content')
@section('page_title', 'Galeria de Fotos')
@section('title', 'Galeria — DoBraga Educacional')

<a href="{{ route('galerias.create') }}" class="btn btn-success mb-3">Nova Imagem</a>

<form action="{{ route('galerias.index') }}" method="GET" class="mb-4 flex items-center">
    <input
        type="text"
        name="search"
        value="{{ request('search') }}"
        placeholder="Buscar imagem..."
        class="border rounded-lg p-2 mr-2 w-64">
    <button type="submit" class="bg-blue text-black px-4 py-2 rounded-lg">
        Pesquisar
    </button>

</form>
<div class="container">
<div class="row">
    @foreach($galerias as $galeria)
    <div class="col-md-3 mb-3">
        <div class="card">
            <img src="{{ asset('storage/' . $galeria->foto) }}" class="card-img-top" alt="imagem">
            <div class="card-body">
                <a href="{{ route('galerias.edit', $galeria) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('galerias.destroy', $galeria) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Excluir</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="mt-4">
    {{ $galerias->appends(['search' => request('search')])->links() }}
</div>
</div>
@endsection