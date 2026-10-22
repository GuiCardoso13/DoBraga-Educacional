@extends('layouts.layout')

@section('title', 'Início - Dobraga Educacional')

@section('content')
    <section class="logos py-5" style="background-color: var(--Laranja);">
        <div class="container d-flex justify-content-center gap-5 flex-wrap">
            <div class="logo-item text-center">
                <img src="{{ asset('images/Avatar Grande.svg') }}" alt="Logo Dobraga Educacional" class="img-fluid"
                    style="max-width: 300px;">
            </div>
            <div class="logo-item text-center">
                <img src="{{ asset('images/Avatar Grande.svg') }}" alt="Logo Dobraga Educacional" class="img-fluid"
                    style="max-width: 300px;">
            </div>
        </div>
    </section>
    <section class="banner-apresentacao text-white text-center p-5"
        style="background: linear-gradient(var(--Azul) 0%, #103BC6 33%, #0E309D 73%, #04289E 100%);">
        <div class="container">
            <p class="">
                Oferecemos preparação completa e personalizada para a FUVEST, Unicamp, UNESP, Fatec, ENEM e outros
                vestibulares da região.
            </p>
            <p class="mb-0">
                Também disponibilizamos reforço escolar e programas específicos para concursos, garantindo apoio em todas as
                etapas do seu aprendizado.
            </p>
        </div>
    </section>
    <section class="novidades py-5 bg-light mx-3">
        <div class="container px-3">
            <h2 class="text-center fw-bold" style="color: var(--Azul); font-family: 'FormaDJRDisplayExtraBold';">
                Acompanhe as Novidades!
            </h2>

            <div class="pt-4">

                <div class="row align-items-start">
                    <div class="col-md-6 mb-3 px-lg-5 pe-lg-3   ">
                        <p>Fique por dentro de tudo o que acontece no DOBRAGA Educacional!</p>
                        <p>Acompanhe nossos vídeos e lives no YouTube e Instagram e tenha acesso a conteúdos exclusivos:
                            dicas de estudo, orientações para os vestibulares, novidades do mercado de trabalho, bastidores
                            da instituição e muito mais. Conhecimento de qualidade também ao vivo e onde você estiver.</p>
                        <p>Em nossas redes sociais e na página de Notícias, você encontra informações importantes como datas
                            de inscrição para vestibulares, divulgação de editais, além de novidades sobre eventos da
                            instituição e oportunidades de descontos especiais. Tudo em um só lugar para você não perder
                            nada que faz diferença na sua jornada.</p>
                    </div>
                    <div class="col-md-6 px-lg-5">
                        <div class="ratio ratio-16x9" style="max-width: auto;">
                            <iframe src="https://www.youtube.com/embed/VIDEO_ID1" title="YouTube video"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

            </div>
            <div class="d-flex justify-content-center gap-3 lg-gap-4 mt-5 flex-wrap mb-0">
                <a href="https://www.youtube.com/@DoBragaEducacional" class="btn-youtube d-flex text-decoration-none align-items-center">
                    <button class="btn-youtube px-4 py-2">
                        <i class="bi bi-youtube"></i> INSCREVA-SE
                    </button>
                </a>
                <a href="https://www.instagram.com/dobragaeducacional/" class="btn-instagram text-white text-decoration-none d-flex align-items-center">
                    <button class="btn-instagram px-4 py-2">
                        <i class="bi bi-instagram"></i> SEGUIR PÁGINA
                    </button>
                </a>
                <a href="{{ url('/mural-de-noticias') }}" class="d-flex text-decoration-none align-items-center">
                    <button class="btn-noticias px-4 py-2">NOTÍCIAS</button>
                </a>
            </div>
        </div>
    </section>
    <div class="fundador text-white px-3 pt-5 position-relative" style="background-color: var(--Laranja);">
        <div class="container lg-px-5">
            <div class="row">
                <div class="col-md-8 offset-md-4 pb-4">
                    <h5 class="fw-bold d-inline-block px-3 py-2 rounded" style="background-color: var(--Azul);">
                        Metodologia
                    </h5>
                    <p class="mt-3">
                        Nossa metodologia é totalmente personalizada, pensada para atender às necessidades de cada aluno.
                        Com uma equipe de professores experientes e apaixonados pelo ensino, oferecemos um aprendizado de
                        qualidade que respeita o ritmo, valoriza o potencial e direciona o estudante para alcançar seus
                        objetivos com confiança.
                    </p>
                </div>
            </div>
        </div>
        <img src="{{ asset('images/Garota.svg') }}" alt="Garota" class="img-fluid garota-metodologia ">
    </div>
    <section class="espacos py-5 text-white px-4" style="background: linear-gradient(180deg, var(--Azul) 0%, #103BC6 33%, #0E309D 73%, #04289E 100%);" id="galeria-fotos">
        <div class="container text-center">
            <h3 class="fw-bold mb-5">Conheça os espaços da Instituição</h3>
    
            <div class="row g-4">
                @php $slots = 6; @endphp
                @for ($i = 0; $i < $slots; $i++)
                    @php $item = $galerias->get($i); @endphp
                    <div class="col-12 col-md-4">
                        <div class="espaco-card {{ $item ? '' : 'empty' }}">
                            @if ($item)
                                <img src="{{ asset('storage/' . $item->foto) }}" class="espaco-img" alt="Foto da galeria">
                            @else
                                <div class="espaco-empty">
                                    <i class="bi bi-image" aria-hidden="true" style="font-size:2rem"></i>
                                </div>
                            @endif
                        </div>
                    </div>
                @endfor
            </div>
    
            <button class="btn btn-light rounded-pill px-4 mt-5">MOSTRAR MAIS</button>
        </div>
    </section>
    <section class="aprovados-professores bg-white">
        <div class="container">
            <h2 class="text-center fw-bold mt-4" style="color: var(--Azul); font-family: 'FormaDJRDisplayExtraBold';">
                Conheça os alunos que conquistaram a sua aprovação com apoio da Plataforma Dobraga Educacional
            </h2>
            <div class="row justify-content-center mb-4">
                <div class="col-md-4 mb-3">
                    <div class="card h-100 shadow-sm rounded-4">
                        <div class="card-body">
                            <p>Entrei na DoBraga no início do ano de 2024, queria cursar direito em alguma universidade, mas não sabia qual ainda.
                            Sempre estudei em escola pública, então tive algumas defasagens no ensino, mas na DoBraga tive todo apoio na escolha da 
                            universidade e na minhas dúvidas nas matérias. Sempre atenciosos e os professores muito bons quem realmente sabem o que o vestibular exige.
                            Com apoio da DoBraga passei em 1° Na Unirio e ganhei uma bolsa de estudos de 100% na Uniso de Sorocaba.
                            Só tenho a agradecer ao Braga e todo sua equipe. ❤️</p>
                            <hr>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-person-circle fs-2"></i>
                                <div>
                                    <strong>Caio Rezende</strong><br>
                                    Direito | UNIRIO | Direito | UNISO (Prouni)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card h-100 shadow-sm rounded-4">
                        <div class="card-body">
                            <p>Só tenho a agradecer ao Braga e sua equipe pela atenção e dedicação comigo durante os meses que estive ai, optei por cursar medicina, 
                            e mesmo sabendo das dificuldades em pouco menos de 6 meses tive uma melhora significativa com meus simulados por refazer vestibulares 
                            antigos dentro e fora de sala, assim pude identificar padrão de cada prova e o que cada uma exigia de mim, logo dei mais atenção às 
                            matérias as quais eu tinha maior dificuldade.
                            Prestei minhas provas muito mais tranquila e convicta das minhas escolhas.
                            Começo meu 2024 fazendo meu curso dos sonhos.Obrigada DoBraga!</p>
                            <hr>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-person-circle fs-2"></i>
                                <div>
                                    <strong>Lavinia Kirschner</strong><br>
                                    Medicina | UNIP
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card h-100 shadow-sm rounded-4">
                        <div class="card-body">
                            <p>Professores incríveis, com didática maravilhosa. 
                            Me ajudou muito para passar nos vestibulares grandes como a FUVEST (vestibular da USP) e a UNICAMP! 
                            Com certeza a DoBraga me ajudou a alcançar meu sonho!</p>
                            <hr>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-person-circle fs-2"></i>
                                <div>
                                    <strong>Isabela Dias Abrantes</strong><br>
                                    Química | UNICAMP
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center gap-3 mb-5 flex-wrap">
                <a href="{{ url('/formulario-de-interesse') }}" class="btn btn-warning text-white px-4">COMECE JÁ</a>
                <a href="{{ url('/mural-dos-aprovados') }}" class="btn btn-outline-warning px-4"
                    style="color: var(--Laranja); border-color: var(--Laranja);">MURAL DOS APROVADOS</a>
            </div>
        </div>
    </section>
    <div class="professores-bg py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-4" style="color: #fff;">
                Conheça os nossos Professores
            </h2>
            <div class="d-none d-md-block">
                <div id="professoresCarouselDesktop" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000" data-bs-wrap="true">
                    <div class="carousel-inner">
                    @php
                        $perSlide = 3;
                        $total = $professores->count();
                        $values = $professores->values();
                    @endphp

                    @if ($total > 0)
                        @for ($start = 0; $start < $total; $start += $perSlide)
                            <div class="carousel-item {{ $start == 0 ? 'active' : '' }}">
                                <div class="row justify-content-center">
                                    @for ($j = 0; $j < $perSlide; $j++)
                                        @php $idx = ($start + $j) % $total; $prof = $values->get($idx); @endphp
                                        <div class="col-md-4 d-flex justify-content-center mb-4 mb-md-0">
                                            <div class="prof-card h-100" tabindex="0">
                                                <div class="prof-card-front">
                                                    <img src="{{ asset('storage/' . $prof->foto) }}"
                                                        class="prof-img"
                                                        alt="Foto de {{ $prof->nome }}">
                                                </div>
                                                <div class="prof-card-back">
                                                    <div class="prof-nome-back">{{ $prof->nome }}</div>
                                                    <div class="prof-desc">{{ $prof->descricao }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        @endfor
                    @endif
                </div>
                    <div class="d-flex justify-content-center gap-4 mt-4">
                        <button class="carousel-control-prev position-static" type="button"
                            data-bs-target="#professoresCarouselDesktop" data-bs-slide="prev"
                            style="background: none; border: none;">
                            <span aria-hidden="true" style="font-size:2rem; color:#fff;">&#60;</span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next position-static" type="button"
                            data-bs-target="#professoresCarouselDesktop" data-bs-slide="next"
                            style="background: none; border: none;">
                            <span aria-hidden="true" style="font-size:2rem; color:#fff;">&#62;</span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="d-block d-md-none">
                <div id="professoresCarouselMobile" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000" data-bs-wrap="true">
                    <div class="carousel-inner">
                    @foreach($professores->chunk(1) as $index => $grupo)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <div class="d-flex justify-content-center">
                                @foreach($grupo as $prof)
                                        <div class="prof-card h-100" tabindex="0">
                                            <div class="prof-card-front">
                                                <img src="{{ asset('storage/' . $prof->foto) }}"
                                                    class="prof-img"
                                                    alt="Foto de {{ $prof->nome }}">
                                            </div>
                                            <div class="prof-card-back">
                                                <div class="prof-nome-back">{{ $prof->nome }}</div>
                                                <div class="prof-desc">{{ $prof->descricao }}</div>
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
                            <span aria-hidden="true" style="font-size:2rem; color:#fff;">&#60;</span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next position-static" type="button"
                            data-bs-target="#professoresCarouselMobile" data-bs-slide="next"
                            style="background: none; border: none;">
                            <span aria-hidden="true" style="font-size:2rem; color:#fff;">&#62;</span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    <section class="faq-section py-5">
        <div class="container">
            <div class="text-center mb-4">
                <span class="d-inline-block" style="font-size:2.5rem; color: var(--Azul);">
                    <i class="bi bi-question-circle-fill"></i>
                </span>
                <h2 class="fw-bold d-inline-block ms-2"
                    style="color: var(--Azul); font-family: 'FormaDJRDisplayExtraBold';">
                    Perguntas Frequentes
                </h2>
            </div>
            <div class="faq-list">
                <div class="faq-card mb-4 shadow-sm rounded-4 bg-white p-4">
                    <button class="faq-question fw-bold d-flex justify-content-between align-items-center w-100"
                        type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false"
                        aria-controls="faq1"
                        style="color: var(--Azul); font-size: 1.15rem; border: none; background: none;">
                        <span>1. Como funciona o curso?</span>
                        <i class="bi bi-chevron-down faq-icon" style="font-size: 1.5rem; transition: transform 0.3s;"></i>
                    </button>
                    <div class="collapse faq-answer mt-2 row" id="faq1">
                        <div class="col-12 col-md-8">
                            Conciliar estudo e trabalho de garçom não é uma tarefa fácil, mas é possível. Estudar três
                            horas
                            por dia é capaz sim de construir uma aprovação, embora demore mais. Minhas sinceras gratidão
                            ao
                            Dobraga Educacional.
                        </div>
                        <div class="col-12 col-md-4 d-flex align-items-center justify-content-center mt-3 mt-md-0">
                            <div class="ratio ratio-16x9 w-100">
                                <!-- <video controls poster="https://via.placeholder.com/320x180?text=Video">
                                    <source src="video.mp4" type="video/mp4">
                                    Seu navegador não suporta vídeo.
                                </video> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-card mb-4 shadow-sm rounded-4 bg-white p-4">
                    <button class="faq-question fw-bold d-flex justify-content-between align-items-center w-100"
                        type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false"
                        aria-controls="faq2"
                        style="color: var(--Azul); font-size: 1.15rem; border: none; background: none;">
                        <span>2. O que é uma mentoria individualizada?</span>
                        <i class="bi bi-chevron-down faq-icon" style="font-size: 1.5rem; transition: transform 0.3s;"></i>
                    </button>
                    <div class="collapse faq-answer mt-2 row" id="faq2">
                        <div class="col-12 col-md-8">
                            Conciliar estudo e trabalho de garçom não é uma tarefa fácil, mas é possível. Estudar três
                            horas
                            por dia é capaz sim de construir uma aprovação, embora demore mais. Minhas sinceras gratidão
                            ao
                            Dobraga Educacional.
                        </div>
                        <div class="col-12 col-md-4 d-flex align-items-center justify-content-center mt-3 mt-md-0">
                            <div class="ratio ratio-16x9 w-100">
                                <!-- <video controls poster="https://via.placeholder.com/320x180?text=Video">
                                    <source src="video.mp4" type="video/mp4">
                                    Seu navegador não suporta vídeo.
                                </video> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-card mb-4 shadow-sm rounded-4 bg-white p-4">
                    <button class="faq-question fw-bold d-flex justify-content-between align-items-center w-100"
                        type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false"
                        aria-controls="faq3"
                        style="color: var(--Azul); font-size: 1.15rem; border: none; background: none;">
                        <span>3. A partir de que ano posso cursar?</span>
                        <i class="bi bi-chevron-down faq-icon" style="font-size: 1.5rem; transition: transform 0.3s;"></i>
                    </button>
                    <div class="collapse faq-answer mt-2 row" id="faq3">
                        <div class="col-12 col-md-8">
                            Conciliar estudo e trabalho de garçom não é uma tarefa fácil, mas é possível. Estudar três
                            horas
                            por dia é capaz sim de construir uma aprovação, embora demore mais. Minhas sinceras gratidão
                            ao
                            Dobraga Educacional, Prof. David, Amanda e Macarrão, que foram essenciais na construção da
                            minha
                            aprovação. Obrigado a todos os envolvidos.
                        </div>
                        <div class="col-12 col-md-4 d-flex align-items-center justify-content-center mt-3 mt-md-0">
                            <div class="ratio ratio-16x9 w-100">
                                <!-- <video controls poster="https://via.placeholder.com/320x180?text=Video">
                                    <source src="video.mp4" type="video/mp4">
                                    Seu navegador não suporta vídeo.
                                </video> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-card mb-4 shadow-sm rounded-4 bg-white p-4">
                    <button class="faq-question fw-bold d-flex justify-content-between align-items-center w-100"
                        type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false"
                        aria-controls="faq4"
                        style="color: var(--Azul); font-size: 1.15rem; border: none; background: none;">
                        <span>4. 1h de aula por dia não é pouco?</span>
                        <i class="bi bi-chevron-down faq-icon" style="font-size: 1.5rem; transition: transform 0.3s;"></i>
                    </button>
                    <div class="collapse faq-answer mt-2 row" id="faq4">
                        <div class="col-12 col-md-8">
                            Conciliar estudo e trabalho de garçom não é uma tarefa fácil, mas é possível. Estudar três
                            horas
                            por dia é capaz sim de construir uma aprovação, embora demore mais. Minhas sinceras gratidão
                            ao
                            Dobraga Educacional, Prof. David, Amanda e Macarrão, que foram essenciais na construção da
                            minha
                            aprovação. Obrigado a todos os envolvidos.
                        </div>
                        <div class="col-12 col-md-4 d-flex align-items-center justify-content-center mt-3 mt-md-0">
                            <div class="ratio ratio-16x9 w-100">
                                <!-- <video controls poster="https://via.placeholder.com/320x180?text=Video">
                                    <source src="video.mp4" type="video/mp4">
                                    Seu navegador não suporta vídeo.
                                </video> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-card mb-4 shadow-sm rounded-4 bg-white p-4">
                    <button class="faq-question fw-bold d-flex justify-content-between align-items-center w-100"
                        type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false"
                        aria-controls="faq5"
                        style="color: var(--Azul); font-size: 1.15rem; border: none; background: none;">
                        <span>5. Vocês trabalham com Reforço escolar?</span>
                        <i class="bi bi-chevron-down faq-icon" style="font-size: 1.5rem; transition: transform 0.3s;"></i>
                    </button>
                    <div class="collapse faq-answer mt-2 row" id="faq5">
                        <div class="col-12 col-md-8">
                            Conciliar estudo e trabalho de garçom não é uma tarefa fácil, mas é possível. Estudar três
                            horas
                            por dia é capaz sim de construir uma aprovação, embora demore mais. Minhas sinceras gratidão
                            ao
                            Dobraga Educacional, Prof. David, Amanda e Macarrão, que foram essenciais na construção da
                            minha
                            aprovação. Obrigado a todos os envolvidos.
                        </div>
                        <div class="col-12 col-md-4 d-flex align-items-center justify-content-center mt-3 mt-md-0">
                            <div class="ratio ratio-16x9 w-100">
                                <!-- <video controls poster="https://via.placeholder.com/320x180?text=Video">
                                    <source src="video.mp4" type="video/mp4">
                                    Seu navegador não suporta vídeo.
                                </video> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="localizacao-section py-5" style="background: var(--Laranja);">
        <div class="container">
            <div class="text-center mb-4">
                <span class="d-inline-block px-5 py-1 rounded-4 fw-bold"
                    style="background: var(--Azul); color: #fff; font-size: 2rem; font-family: 'FormaDJRDisplayExtraBold';">
                    Onde estamos localizados?
                </span>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div class="localizacao-card bg-white rounded-4 shadow-sm p-4 mb-4"
                    style="max-width: 800px; width: 100%; border: 2px solid var(--Azul);">
                    <div class="row g-0 d-flex align-items-center">
                        <div class="col-12 col-md-7">
                            <div class="ps-1 ratio ratio-16x9 rounded-3 overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3663.081139752031!2d-47.85362142411654!3d-23.349074753828567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c5d9ce395eacd3%3A0xdf3af5492dfbea1e!2sDOBRAGA%20Educacional!5e0!3m2!1spt-BR!2sbr!4v1760580250166!5m2!1spt-BR!2sbr"
                                    allowfullscreen loading="lazy" style="border:0;"></iframe>
                            </div>
                        </div>
                        <div class="col-12 col-md-5 d-flex align-items-center">
                            <div class="p-2 ps-4">
                                <h5 class="fw-bold mb-2" style="color: var(--Azul);">Aulas presenciais</h5>
                                <div class="mb-2" style="color: #222;">
                                    Rua Coronel Lúcia Seabra, 435<br>
                                    Centro, Tatuí - SP
                                </div>
                                <div class="mb-3" style="color: var(--Azul);">
                                    <span class="fw-bold" style="color: var(--Azul);">Funcionamento: 14:00 às
                                        20:30</span>
                                </div>
                                <ul class="list-unstyled" style="font-size: 1rem;">
                                    <li class="mb-2"><i class="bi bi-check-square-fill text-success me-2"></i> Espaço
                                        climatizado e preparado para o aprendizado</li>
                                    <li class="mb-2"><i class="bi bi-check-square-fill text-success me-2"></i> Fácil
                                        acesso
                                        e transporte próximo</li>
                                    <li class="mb-2"><i class="bi bi-check-square-fill text-success me-2"></i> Ambiente
                                        seguro e estruturado</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="https://maps.app.goo.gl/Rjb79zeVAqUTUhweA"><button class="btn-loc px-5 py-1">
                    COMO CHEGAR?
                </button></a>
            </div>
        </div>
    </section>
    <section style="background: linear-gradient(var(--Azul) 0%, #103BC6 33%, #0E309D 73%, #04289E 100%);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 text-center mb-3 mb-md-0">
                    <img src="{{ asset('images/Avatar.svg') }}" alt="Personagem" class="img-fluid mb-0 mt-3"
                        style="max-width: 200px;">
                </div>
                <div class="col-md-6 text-white">
                    <h3 class="fw-bold mb-3" style="color: #FFD700;">Pronto para transformar seu aprendizado?</h3>
                    <p style="text-align: justify;">
                        No DOBRAGA Educacional, acreditamos no poder de uma educação personalizada e inspiradora. Se
                        você
                        chegou até aqui, é porque se importa com qualidade. Vamos juntos dar o próximo passo? Entre em
                        contato ou acompanhe nossos canais e venha fazer parte dessa experiência.
                    </p>
                </div>
                <div class="col-md-3 text-center">
                    <a href="{{ url('/formulario-de-interesse') }}"><button class="btn-comece rounded-pill px-5 py-3 fw-bold mb-4">COMECE JÁ</button></a>
                </div>
            </div>
        </div>
    </section>
@endsection