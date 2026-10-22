@extends('layouts.layout')

@section('title', $noticia->titulo . ' - Notícias')

@section('extra-css')
@vite('resources/css/noticiaFull.css')
@endsection

@section('content')

<div class="noticia-field p-lg-5 p-md-3 p-sm-0">

    <!-- Botão voltar, volta para o mural de notícias -->
    <div class="p-lg-0 p-4 mb-md-4 mb-4">
        <a href="{{ url('/mural-de-noticias') }}" class="botao-voltar p-2 px-4">Voltar</a>
    </div>

    <div class="container d-flex">
        <div class="col-12 col-md-12 col-lg-8 pe-lg-4">
            <div class="card-noticia p-3 mb-4 mb-lg-0">

                <div class="imagem-rotulo">
                    <img class="imagem-noticia" src="{{asset(path: 'storage/' . $noticia->imagem) }}" alt="imagem-noticia">
                    <div class="rotulo m-0">
                        <p class="p-rotulo p-1 px-2 m-0">{!! $noticia->categoria !!}</p>
                    </div>
                </div>
                <!-- Data -->
                <p class="descricao">{{ $noticia->created_at->translatedFormat('d \d\e F \d\e Y') }}</p>

                <div class="titulo-subtitulo">
                    <!-- Título -->
                    <h3 class="titulo-noticia mb-3">{!! $noticia->titulo !!}</h3>


                    <!-- Aqui onde vai poder adicionar parágrafos a notícia -->
                    @foreach($noticia->paragrafos as $p)
                        <p>{{ $p->conteudo }}</p>
                    @endforeach
                </div>


                <!-- Aqui poderá adicionar anexos (links [stories, vídeos, etc] ou downloads de arquivos APENAS por link) -->
                <div class="anexos">
                        @foreach($noticia->anexos as $a)
                            @if($a->tipo === 'arquivo')
                                <div class="links mb-1">
                                    <a href="{{ asset('storage/' . $a->valor) }}" download="{{ $a->nome_original ?? $a->titulo ?? 'arquivo' }}" class="hyperlink"><i class="bi bi-paperclip"></i>{{ $a->titulo }}</a>
                                </div>
                            @else
                                <div class="links mb-1">
                                    <a href="{{ $a->valor }}" target="_blank" class="hyperlink"><i class="bi bi-paperclip"></i>{{ $a->titulo }}</a>
                                </div>
                            @endif
                        @endforeach

                    <!-- Aqui poderá adicionar mídias (vídeos incorporados) -->

                    {{-- <div class="midia mt-4 d-none"> <!-- IMPORTANTE!! retirar d-none no back -->
                        <!-- YouTube -->
                        <div class="youtube mb-4">
                            <div class="ratio ratio-16x9 w-100 w-lg-75">
                                <iframe src="https://www.youtube.com/embed/[endereço do vídeo]"
                                    title="Vídeo do YouTube" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- <div class="container dobraga-info d-flex col-4">
                <div class="img-avatar-s p-5">
                    <img class="img-avatar" src="./images/Avatar Grande.svg" alt="Dobraga Educacional">
                </div>
            </div> -->
    </div>
</div>

<section style="background: linear-gradient(var(--Azul) 0%, #103BC6 33%, #0E309D 73%, #04289E 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3 text-center mb-3 mb-md-0">
                <img src="{{ asset('images/Avatar.svg') }}" alt="Personagem" class="img-fluid mb-0 mt-3" style="max-width: 200px;">
            </div>
            <div class="col-md-6 text-white">
                <h3 class="fw-bold mb-3" style="color: #FFD700;">Pronto para transformar seu aprendizado?</h3>
                <p style="text-align: justify;">
                    No DOBRAGA Educacional, acreditamos no poder de uma educação personalizada e inspiradora. Se você chegou até aqui, é porque se importa com qualidade. Vamos juntos dar o próximo passo? Entre em contato ou acompanhe nossos canais e venha fazer parte dessa experiência.
                </p>
            </div>
            <div class="col-md-3 text-center">
                <button class="btn-comece rounded-pill px-5 py-3 fw-bold mb-4">COMECE JÁ</button>
            </div>
        </div>
    </div>
</section>

@endsection