@extends('layouts.app')

@section('content')
@section('page_title', 'Galeria de Fotos')
@section('title', 'Adicionar Foto — DoBraga Educacional')
<h1 class="mb-4">Nova Foto</h1>

<form action="{{ route('galerias.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Foto</label>
        <input type="file" accept="image/*" name="foto" class="form-control">
    </div>
    <button class="btn btn-primary">Salvar</button>
</form>
@endsection
