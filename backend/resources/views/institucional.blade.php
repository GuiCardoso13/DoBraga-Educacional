@extends('layouts.layout')

@section('title', 'Institucional - Dobraga Educacional')

@section('extra-css')
    @vite('resources/css/institucional.css')
@endsection

@section('content')

<div class="section-programas container-fluid py-5" style="background: linear-gradient(var(--Azul) 0%, #103BC6 33%, #0E309D 73%, #04289E 100%);">
    <h2 class="text-center mb-5"
        style="color: var(--AmareloOG); font-family: 'FormaDJRDisplayExtraBold', sans-serif;">
        Conheça os nossos programas
    </h2>

    <div class="row justify-content-center g-4">

        <div class="col-12 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="text-center"
                        style="color: var(--Azul); font-family: 'FormaDJRDisplayBold', sans-serif;">
                        Cursinho Pré-Vestibular + ENEM
                    </h5>
                    <p class="text-center" style="font-family: 'SourceSansPro', sans-serif;">
                        Preparação focada nos principais vestibulares e no ENEM, com aulas atualizadas, simulados
                        regulares e apoio pedagógico completo e personalizado. Ideal para quem busca uma vaga na
                        universidade e quer alcançar um alto desempenho nas provas.
                    </p>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="text-center"
                        style="color: var(--Azul); font-family: 'FormaDJRDisplayBold', sans-serif;">
                        Reforço Escolar
                    </h5>
                    <p class="text-center" style="font-family: 'SourceSansPro', sans-serif;">
                        Acompanhamento personalizado para alunos do ensino fundamental e médio, com foco na
                        superação de dificuldades em disciplinas específicas. Auxiliamos na organização dos estudos
                        e na recuperação do conteúdo escolar.
                    </p>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-5 col-lg-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="text-center"
                        style="color: var(--Azul); font-family: 'FormaDJRDisplayBold', sans-serif;">
                        Preparatório para ETEC
                    </h5>
                    <p class="text-center" style="font-family: 'SourceSansPro', sans-serif;">
                        Cursos voltados para concursos públicos municipais, estaduais e federais. Aulas com foco em
                        conteúdo programático, técnicas de resolução de questões e orientação estratégica para cada
                        tipo de prova.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ url('/formulario-de-interesse') }}" class="text-decoration-none d-flex justify-content-center">
        <button type="submit" class="btn-start_now mt-5 pe-5 ps-5 py-2 ">
            COMECE AGORA
        </button>
    </a>
</div>

<div style="background-color: var(--Branco);">
    <div style="max-width: 900px; margin: 0 auto; text-align: center; padding: 40px 20px;">
        <p
            style="font-family: 'SourceSansProSemiBold', sans-serif; color: var(--Azul); font-size: 18px; line-height: 1.6;">
            No DOBRAGA Educacional, buscamos constantemente novas metodologias e ferramentas
            para tornar o aprendizado mais prático, envolvente e conectado com o mundo atual.
            Cada estudante é incentivado a explorar ideias e desenvolver seu potencial de forma
            criativa e eficiente.
        </p>
    </div>
</div>

<div class="container-fluid py-5" style="background-color: var(--Laranja);">
    <div class="container justify-content-center rounded-5 pt-2 pb-2 px-3 text-center text-white" style="background-color: var(--Azul); font-family: 'FormaDJRDisplayBold', sans-serif;
              max-width: 500px; width: 100%;">
        <h2 class="m-0">Cursinho Pré-Vestibular + ENEM</h2>
    </div>


    <div class="container mt-5">
        <div class="row g-4 text-center">


            <div class="col-md-4">
                <div class="card h-100 shadow-sm rounded-5">
                    <div class="card-body">
                        <img src="{{ asset('images/ENEM.svg') }}" alt="ENEM" class="img-fluid mb-2">
                        <p>Com a nota do ENEM, é possível ingressar em universidades federais pelo
                            <span class="fw-bold">Sisu</span>, conseguir bolsas pelo <span
                                class="fw-bold">Prouni</span>
                            e até financiar seus estudos com o <span class="fw-bold">Fies</span>.
                        </p>
                        <a href="https://www.gov.br/inep/pt-br/areas-de-atuacao/avaliacao-e-exames-educacionais/enem"
                            class="btn btn-outline-primary btn-sm mt-3 rounded-5 pe-4 ps-4">Saiba mais</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card h-100 shadow-sm rounded-5">
                    <div class="card-body">
                        <img src="{{ asset('images/Fuvest.svg') }}" alt="Fuvest" class="img-fluid mb-3">
                        <p class="mt-3">Responsável pelo vestibular da USP, a Fuvest exige preparação sólida e
                            estratégica para conquistar uma vaga em uma das melhores universidades da América
                            Latina.
                        </p>
                        <a href="https://www.fuvest.br/"
                            class="btn btn-outline-primary btn-sm mb-1 rounded-5 pe-4 ps-4">Saiba mais</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card h-100 shadow-sm rounded-5">
                    <div class="card-body">
                        <img src="{{ asset('images/Unicamp.svg') }}" alt="Unicamp" class="img-fluid mb-3">
                        <p>Um dos vestibulares mais concorridos do Brasil, a Unicamp oferece vagas
                            em cursos de excelência nas áreas de exatas, humanas, biológicas e artes.
                        </p>

                        <a href="https://www.comvest.unicamp.br/formas-de-ingresso/"
                            class="btn btn-outline-primary btn-sm mt-4 rounded-5 pe-4 ps-4">Saiba mais</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 offset-md-2">
                <div class="card h-100 shadow-sm rounded-5">
                    <div class="card-body">
                        <img src="{{ asset('images/Unesp.svg') }}" alt="Unesp" class="img-fluid mb-3">
                        <p class="mt-4">A Unesp tem um vestibular próprio e oferece cursos em várias cidades
                            do estado de São Paulo, com ampla variedade de áreas e ensino de qualidade.
                        </p>
                        <a href="https://vestibular.unesp.br/"
                            class="btn btn-outline-primary btn-sm mt-4 rounded-5 pe-4 ps-4">Saiba mais</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card h-100 shadow-sm rounded-5">
                    <div class="card-body">
                        <img src="{{ asset('images/Fatec.svg') }}" alt="Fatec" class="img-fluid">
                        <p>Com foco em cursos tecnológicos e alta empregabilidade, a Fatec realiza
                            vestibular próprio e oferece ensino gratuito e de qualidade em todo o estado de SP.
                        </p>
                        <a href="https://vestibular.fatec.sp.gov.br/home/"
                            class="btn btn-outline-primary btn-sm mt-1 rounded-5 pe-4 ps-4">Saiba mais</a>
                    </div>
                </div>
            </div>

        </div>
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