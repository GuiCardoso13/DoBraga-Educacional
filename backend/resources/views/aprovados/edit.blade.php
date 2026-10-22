@extends('layouts.app')

@section('content')
@section('page_title', 'Alunos Aprovados')
@section('title', 'Editar Aprovado — DoBraga Educacional')
<div class="container">
    <h1 class="mb-4">Editar Aprovado</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Erro!</strong> Verifique os campos abaixo.
            <ul class="mt-2 mb-0">
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('aprovados.update', $aprovado) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        {{-- NOME --}}
        <div class="mb-3">
            <label class="form-label">Nome do Aluno</label>
            <input type="text" name="nome" class="form-control" value="{{ $aprovado->nome }}" required>
        </div>
        {{-- DESCRIÇÃO (Universidades/Concursos que passou) --}}
        <div class="mb-3">
            <label class="form-label">Descrição breve</label>
            <input type="text" name="descricao" class="form-control" value="{{ $aprovado->descricao }}">
        </div>
        {{-- DEPOIMENTO --}}
        <div class="mb-3">
            <label class="form-label">Depoimento</label>
            <textarea name="mensagem" rows="4" class="form-control">{{ $aprovado->mensagem }}</textarea>
        </div>
        {{-- IMAGEM ATUAL --}}
        <div class="mb-3">
            <label for="imagem">Imagem Atual</label>
            <br>
            @if($aprovado->imagem)
            <img src="{{ asset('storage/' . $aprovado->imagem) }}" width="250" class="rounded mb-2">
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Nova Imagem (opcional)</label>
            <input type="file" accept="image/*" name="imagem" class="form-control">
            <small class="text-muted">Envie apenas se deseja substituir</small>
        </div>
        <button class="btn btn-primary">Atualizar</button>
        <a href="{{ route('aprovados.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
