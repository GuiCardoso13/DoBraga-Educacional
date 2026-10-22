@extends('layouts.app')

@section('content')
@section('page_title', 'Alunos Aprovados')
@section('title', 'Adicionar Aprovado — DoBraga Educacional')
<div class="container mt-4">
    <h1 class="mb-4">Novo Aprovado</h1>

    <form action="{{ route('aprovados.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- NOME --}}
        <div class="mb-3">
            <label class="form-label">Nome do Aluno</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        {{-- DESCRIÇÃO --}}
        <div class="mb-3">
            <label class="form-label">Descrição breve</label>
            <input type="text" name="descricao" class="form-control">
        </div>
        {{-- DEPOIMENTO --}}
        <div class="mb-3">
            <label class="form-label">Depoimento</label>
            <textarea name="mensagem" class="form-control"></textarea>
        </div>
        {{-- IMAGEM --}}
        <div class="mb-3">
            <label for="imagem">Imagem</label>
            <input type="file" accept="image/*" name="imagem" id="url_imagem" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('aprovados.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
