@extends('layouts.layout')

@section('title', 'Mural dos Aprovados - Dobraga Educacional')

@section('extra-css')
@vite('resources/css/mural-dos-aprovados.css')
@vite('resources/js/aprovado/loadMore.js')

@endsection

@php
    $totalAprovados = $aprovados->count();
@endphp

@section('content')

<div class="bg-gradient-azul container-fluid py-5 h-100 px-lg-5">
    <div class="container">
        <div class="row align-items-center py-3 px-3 px-lg-5">
            <div class="col-md-6 text-white mb-4 mb-md-0">
                <h3 style="color: var(--Branco); font-family: 'SourceSansProBlack', sans-serif;">
                    Conheça os alunos do Dobraga Educacional que conquistaram a sua aprovação dos sonhos.
                </h3>
                <p class="fw-bold mb-0" style="color: var(--AmareloOG); font-family: 'SourceSansPro', sans-serif;">
                    Venha com a gente aqui!
                </p>
            </div>
            <!-- Carrossel desktop -->
            <div class="col-md-6 d-none d-md-block">
                <div id="aprovadosCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
                    data-bs-interval="3000" data-bs-wrap="true">
                    <div class="carousel-inner">
                        @php
                            $perSlide = 3;
                            $total = $aprovados->count();
                            $values = $aprovados->values();
                        @endphp

                        @if ($total > 0)
                            @for ($start = 0; $start < $total; $start += $perSlide)
                                <div class="carousel-item {{ $start == 0 ? 'active' : '' }} p-2">
                                    <div class="d-flex justify-content-center gap-4">
                                        @for ($j = 0; $j < $perSlide; $j++)
                                            @php $idx = ($start + $j) % $total; $apv = $values->get($idx); @endphp
                                            <div class="carousel-img border border-2 border-white bg-white rounded-4 overflow-hidden"
                                                style="width: 120px; height: 120px;">
                                                <img src="{{ asset('storage/' . $apv->imagem) }}" alt="Placeholder"
                                                    class="img-fluid w-100 h-100" style="object-fit: cover;">
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            @endfor
                        @endif
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<div class="container pt-5 px-lg-5 px-4">
    <h2 class="text-center mb-5" style="font-family: 'FormaDJRDisplayExtraBold', sans-serif; color: var(--Azul);">
        Depoimentos</h2>
    
        <!-- Card 1 -->
        <div class="d-none d-md-block">
            <div id="professoresCarouselDesktop" class="carousel slide" data-bs-ride="false">
                <div class="carousel-inner">
                    @foreach($aprovados->chunk(3) as $index => $grupo)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <div class="row justify-content-center">
                                @foreach($grupo as $apv)
                                    <div class="col-md-4 d-flex justify-content-center mb-4 mb-md-0">
                                        <div class="prof-card h-100" tabindex="0">
                                            <div class="prof-card-front">
                                                <img src="{{ asset('storage/' . $apv->imagem) }}"
                                                    class="prof-img"
                                                    alt="Foto de {{ $apv->nome }}">
                                            </div>
                                            <div class="prof-card-back">
                                                <p>{{ $apv->mensagem }}</p>
                                                <div style="background-color: var(--Azul); width: 100%; height: 1px;"></div>
                                                <div class="prof-nome-back mt-1">{{ $apv->nome }}</div>
                                                <div class="prof-desc">{{ $apv->descricao }}</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center gap-4 mt-4">
                    <button class="carousel-control-prev position-static" type="button"
                        data-bs-target="#professoresCarouselDesktop" data-bs-slide="prev"
                        style="background: none; border: none;">
                        <span aria-hidden="true" style="font-size:2rem; color:#666;">&#60;</span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next position-static" type="button"
                        data-bs-target="#professoresCarouselDesktop" data-bs-slide="next"
                        style="background: none; border: none;">
                        <span aria-hidden="true" style="font-size:2rem; color:#666;">&#62;</span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
            </div>
        </div>
                <div class="d-block d-md-none">
            <div id="professoresCarouselMobile" class="carousel slide" data-bs-ride="false">
                <div class="carousel-inner">
                    @foreach($aprovados->chunk(3) as $index => $grupo)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <div class="row justify-content-center">
                                @foreach($grupo as $apv)
                                    <div class="col-md-4 d-flex justify-content-center mb-4 mb-md-0">
                                        <div class="prof-card h-100" tabindex="0">
                                            <div class="prof-card-front">
                                                <img src="{{ asset('storage/' . $apv->imagem) }}"
                                                    class="prof-img"
                                                    alt="Foto de {{ $apv->nome }}">
                                            </div>
                                            <div class="prof-card-back">
                                                <p >{{ $apv->mensagem }}</p>
                                                <div style="background-color: var(--Azul); width: 100%; height: 1px;"></div>
                                                <div class="prof-nome-back mt-4">{{ $apv->nome }}</div>
                                                <div class="prof-desc">{{ $apv->descricao }}</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center gap-4 mt-4">
                    <button class="carousel-control-prev position-static" type="button"
                        data-bs-target="#professoresCarouselMobile" data-bs-slide="prev"
                        style="background: none; border: none;">
                        <span aria-hidden="true" style="font-size:2rem; color:#666;">&#60;</span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next position-static" type="button"
                        data-bs-target="#professoresCarouselMobile" data-bs-slide="next"
                        style="background: none; border: none;">
                        <span aria-hidden="true" style="font-size:2rem; color:#666;">&#62;</span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
            </div>
        </div>
    <!-- Fim da grid -->

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