@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>Editar Notícia</h1>

    <form action="{{ route('noticias.update', $noticia) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- TÍTULO --}}
        <div class="mb-3">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo', $noticia->titulo) }}" required>
        </div>

        {{-- CATEGORIA --}}
        <div class="mb-3">
            <label for="titulo">Categoria</label>
            <input type="text" name="categoria" id="categoria" class="form-control" value="{{ old('categoria', $noticia->categoria) }}" required>
        </div>

        {{-- DESCRIÇÃO --}}
        <div class="mb-3">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" required>{{ old('descricao', $noticia->descricao) }}</textarea>
        </div>

        {{-- IMAGEM ATUAL--}}
        <div class="mb-3">
            <label for="imagem">Imagem Atual</label>
            <br>
            @if($noticia->imagem)
            <img src="{{ asset('storage/' . $noticia->imagem) }}" width="250" class="rounded mb-2">
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Nova Imagem (opcional)</label>
            <input type="file" accept="image/*" name="imagem" class="form-control">
            <small class="text-muted">Envie apenas se deseja substituir</small>
        </div>

        <hr>

        {{-- PARÁGRAFOS --}}
        <div class="mb-3">
            <h1>Parágrafos</h1>

            <div id="paragrafos">
                @foreach($noticia->paragrafos as $par)
                <div class="p-3 mb-2 paragrafo-item input-group">
                    <textarea name="paragrafos[]" class="form-control" rows="3" required>{{ $par->conteudo }}</textarea>
                    <button type="button" class="btn btn-danger btn-sm remove-paragrafo">X</button>
                </div>
            @endforeach
            </div>
            <button type="button" class="btn btn-primary btn-sm  mt-2 mb-2" id="add-paragrafo">+ Adicionar Parágrafo</button>
        </div>

        <hr>

        {{-- ANEXOS --}}
        <div class="mb-3">
            <h1>Anexos</h1>

            <div id="anexos">
                @foreach($noticia->anexos as $i => $anexo)
                <div class="p-3 mb-2 anexo-item">

                    <label class="form-label">Título do Anexo</label>
                    <input type="text" name="anexos[{{ $i }}][titulo]" class="form-control" value="{{ $anexo->titulo }}" required>

                    <label class="mt-2">Tipo</label>
                    <select name="anexos[{{ $i }}][tipo]" class="form-select tipo-selector">
                        <option value="link" {{ $anexo->tipo === 'link' ? 'selected' : '' }}>Link</option>
                        <option value="arquivo" {{ $anexo->tipo === 'arquivo' ? 'selected' : '' }}>Arquivo</option>
                    </select>

                    {{-- se for LINK --}}
                    <input type="text" name="anexos[{{ $i }}][valor]" class="form-control mt-2 input-link {{ $anexo->tipo === 'arquivo' ? 'd-none' : '' }}" value="{{ $anexo->valor }}">

                    {{-- se for ARQUIVO --}}
                    <input type="file" accept="image/*, .pdf, video/*" name="anexos[{{ $i }}][valor]" class="form-control mt-2 input-file {{ $anexo->tipo === 'link' ? 'd-none' : '' }}">

                    @if($anexo->tipo === 'arquivo')
                    <small class="text-muted d-block">
                        Arquivo atual: {{ $anexo->tipo === 'arquivo' ? $anexo->nome_original : '—' }}
                    </small>
                    @endif

                    <button type="button" class="btn btn-danger btn-sm mt-2 remove-anexo">Remover Anexo</button>
                </div>
            @endforeach
            </div>
            <button type="button" class="btn btn-primary btn-sm mt-2 mb-2" id="add-anexo">+ Adicionar Anexo</button>
        </div>


        <button type="submit" class="btn btn-success mt-3">Atualizar Notícia</button>
    </form>
</div>
@vite('resources/js/noticia/noticiaEdit.js')
@endsection
