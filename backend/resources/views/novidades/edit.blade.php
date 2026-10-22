@extends('layouts.app')

@section('content')
<h1 class="mb-4">Editar Novidade</h1>

<form action="{{ route('novidades.update', $novidade) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">URL</label>
        <input type="text" name="url" class="form-control" value="{{ $novidade->url }}">
    </div>
    <button class="btn btn-primary">Atualizar</button>
</form>
@endsection
