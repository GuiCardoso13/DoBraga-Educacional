@extends('layouts.app')

@section('content')
<h1 class="mb-4">Editar Professor</h1>

<form action="{{ route('professores.update', $professor) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" value="{{ $professor->nome }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Descrição</label>
        <textarea name="descricao" class="form-control">{{ $professor->descricao }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Foto Atual</label><br>

        @if($professor->foto)
            <img src="{{ asset('storage/' . $professor->foto) }}" width="120" class="mb-2 rounded">
        @else
            <p>Nenhuma foto cadastrada</p>
        @endif
    </div>

    <div class="mb-3">
        <label class="form-label">Nova Foto (opcional)</label>
        <input type="file" name="foto" class="form-control">
    </div>

    <button class="btn btn-primary">Atualizar</button>

</form>
@endsection
