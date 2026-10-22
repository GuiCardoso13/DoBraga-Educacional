@extends('layouts.app')

@section('content')
<h1 class="mb-4">Novo Professor</h1>

<form action="{{ route('professores.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Descrição</label>
        <textarea name="descricao" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Foto</label>
        <input type="file" accept="image/*" name="foto" class="form-control">
    </div>
    <button class="btn btn-primary">Salvar</button>
</form>
@endsection
