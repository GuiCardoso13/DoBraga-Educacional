@extends('layouts.app')

@section('content')
    <h1>Criar Nova Notícia</h1>

    <form action="{{ route('noticias.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- TITULO --}}
        <div class="mb-3">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" required>
        </div>

        {{-- CATEGORIA --}}
        <div class="mb-3">
            <label for="titulo">Categoria</label>
            <input type="text" name="categoria" id="categoria" class="form-control" required>
        </div>

        {{-- DESCRICAO --}}
        <div class="mb-3">
            <label for="descricao">Descrição (breve resumo)</label>
            <textarea name="descricao" id="descricao" class="form-control" required></textarea>
        </div>

        {{-- IMAGEM --}}
        <div class="mb-3">
            <label for="imagem">Imagem</label>
            <input type="file" accept="image/*" name="imagem" id="url_imagem" class="form-control" required>
        </div>

        <hr>

        {{-- PARAGRAFOS --}}
        <h1>Parágrafos da Notícia</h1>
        <div id="paragrafos-container">
            <div class="paragrafo-item mb-3">
                <!-- <label class="form-label">Parágrafo</label>
                <textarea name="paragrafos[]" class="form-control" required></textarea>
                <button type="button" class="btn btn-danger btn-sm mt-1 remove-paragrafo">Remover Parágrafo</button> -->
            </div>
        </div>

        <button type="button" class="btn btn-success btn-sm mb-4" id="add-paragrafo">+ Adicionar Parágrafo</button>

        <hr>

        {{-- ANEXOS --}}
        <h1>Anexos (links ou arquivos)</h1>
        <div id="anexos-container">
            <div class="anexo-item mb-3">
                <!-- <label class="form-label">Título do Anexo</label>
                <input type="text" name="anexos[0][titulo]" class="form-control">

                <label class="mt-2">Tipo</label>
                <select name="anexos[0][tipo]" class="form-control">
                    <option value="link">Link</option>
                    <option value="arquivo">Arquivo</option>
                </select>

                <label class="mt-2">Conteúdo</label>
                <input type="text" name="anexos[0][valor]" class="form-control anexo-input-link">
                <input type="file" name="anexos[0][valor]" class="form-control anexo-input-arquivo d-none">

                <button type="button" class="btn btn-danger btn-sm mt-1 remove-anexo">Remover</button> -->
            </div>
        </div>

        <button type="button" id="add-anexo" class="btn btn-success btn-sm mb-4">+ Adicionar Anexo</button>

        <hr>

        <button type="submit" class="btn btn-primary mt-3">Criar Notícia</button>
    </form>

    @vite('resources/js/noticia/noticiaCreate.js')
@endsection
