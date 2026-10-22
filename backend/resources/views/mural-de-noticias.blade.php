@extends('layouts.layout')

@section('title', 'Notícias - Dobraga Educacional')

@section('extra-css')
@vite('resources/css/noticias.css')
@vite('resources/js/noticia/loadMore.js')
@endsection

@section('content')

@php
    $totalNoticias = $noticias->count();
@endphp

<section class="py-5" style="background: linear-gradient(#194AED 0%, #103BC6 33%, #0E309D 73%, #04289E 100%);">
        <div class="container">
            <div class="row align-items-center">
                <article class="col-md-6 mb-4 mb-md-0">
                    <p class="text-white pe-4" style="text-align: justify;">
                        No DOBRAGA Educacional, acreditamos que estar bem informado é parte essencial da preparação para os vestibulares.
                    </p>
                    <p class="text-white pe-4" style="text-align: justify;">
                        Compartilhamos aqui as principais atualizações do universo do vestibulando, além de dicas práticas para o ENEM e os principais vestibulares da região.
                    </p>
                    <p class="text-white pe-4" style="text-align: justify;">
                        Nesta página, você também encontra novidades sobre  eventos, atividades e oportunidades exclusivas para os alunos do DOBRAGA. 
                    </p>
                </article>

                <div class="col-md-6 d-flex justify-content-center">
                    <iframe
                        class="rounded shadow w-100"
                        height="315"
                        src="https://www.youtube.com/embed/#"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen
                        role="region"
                        aria-label="Vídeo institucional">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

<div class="mural-de-noticias p-lg-5 p-md-3 p-sm-0">
    <h2 class="titulo mb-0 mt-md-2 mt-lg-0 mt-4 pt-lg-0 pt-md-2 pt-1">Notícias e Novidades</h2>

    <div class="grid-de-noticias">
        <div class="container" id="noticias-container">
            <div class="row g-4">
                <!-- Card de notícia genérico (USAR ESTE na hora de interligar com a dashboard)-->
                @include('partials._noticia_card', ['noticias' => $noticias->take(9)])
            </div>
        </div>
    </div>
    <!-- Fim da grid -->

    <!-- Botão mostrar mais -->
    <div class="p-lg-0 p-4 mb-md-4 mb-4">
        <!-- A página vai aparecer com 9 notícias pré-carregadas, no fim um botão mostrar mais vai carregar mais 6 a cada clique -->
        <button id="btn-load-more" class="botao-mostrar-mais p-2 px-4 {{ $totalNoticias <= 9 ? 'd-none' : '' }}">MOSTRAR MAIS</button>
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
                <a href="{{ url('/formulario-de-interesse') }}"><button class="btn-comece rounded-pill px-5 py-3 fw-bold mb-4">COMECE JÁ</button></a>
            </div>
        </div>
    </div>
</section>

@endsection