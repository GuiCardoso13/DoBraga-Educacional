@extends('layouts.app')

@section('content')
@section('page_title', 'Novidades')
@section('title', 'Novidades — DoBraga Educacional')

<a href="{{ route('novidades.create') }}" class="btn btn-success mb-3">Nova Novidade</a>

<form action="{{ route('novidades.index') }}" method="GET" class="mb-4 flex items-center">
    <input
        type="text"
        name="search"
        value="{{ request('search') }}"
        placeholder="Buscar Novidade..."
        class="border rounded-lg p-2 mr-2 w-64">
    <button type="submit" class="bg-blue text-black px-4 py-2 rounded-lg">
        Pesquisar
    </button>
</form>

<table class="table table-bordered table-striped">
    <thead class="table-primary">
        <tr>
            <th>ID</th>
            <th>URL</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($novidades as $novidade)
        <tr>
            <td>{{ $novidade->id }}</td>
            <td>{{ $novidade->url }}</td>
            <td>
                <a href="{{ route('novidades.edit', $novidade) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('novidades.destroy', $novidade) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="mt-4">
    {{ $novidades->appends(['search' => request('search')])->links() }}
</div>
@endsection
