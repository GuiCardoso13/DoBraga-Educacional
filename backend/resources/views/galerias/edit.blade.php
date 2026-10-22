@extends('layouts.app')

@section('content')
@section('page_title', 'Galeria de Fotos')
@section('title', 'Alterar Foto — DoBraga Educacional')
<h1 class="mb-4">Alterar Foto</h1>

<form action="{{ route('galerias.update', $galeria) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="mb-3">
            <label for="foto">Foto Atual</label>
            <br>
            @if($galeria->foto)
            <img src="{{ asset('storage/' . $galeria->foto) }}" width="250" class="rounded mb-2">
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Nova Foto (opcional)</label>
            <input type="file" accept="image/*" name="foto" class="form-control">
            <small class="text-muted">Envie apenas se deseja substituir</small>
        </div>
    <button class="btn btn-primary">Atualizar</button>
</form>
@endsection
