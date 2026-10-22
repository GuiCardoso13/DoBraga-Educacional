@extends('layouts.layout')

@section('title', 'Sobre - Dobraga Educacional')

@section('extra-css')
@vite('resources/css/sobre.css')
@endsection

@section('content')

<main>
    <section class="py-5" style="background: linear-gradient(#194AED 0%, #103BC6 33%, #0E309D 73%, #04289E 100%);">
        <div class="container">
            <div class="row align-items-center">
                <article class="col-md-6 mb-4 mb-md-0">
                    <p class="text-white pe-4" style="text-align: justify;">
                        O DOBRAGA Educacional é uma escola com técnicas inovadoras e exclusivas, ajudamos você a
                        conquistar sua vaga nas melhores universidades do país. Nossa equipe de professores
                        especialistas utiliza uma metodologia prática e eficaz para transformar esse desafio em uma
                        jornada de aprendizado mais leve e assertiva.
                    </p>
                    <p class="text-white pe-4" style="text-align: justify;">
                        Oferecemos cursos intensivos, com aulas presenciais e online, e conteúdos atualizados. Assim,
                        você estará pronto para sua jornada profissional.
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

    <section class="container my-5">
        <div class="row">
            <article class="col-md-6" style="color: #103BC6;">
                <p>
                    Fundado em 2005, o DOBRAGA Educacional nasceu do sonho do professor David Braga Guimarães Wilkin
                    Chew, apaixonado por ensinar e por transformar a vida dos jovens através da educação. Começou em
                    Tatuí/SP com uma pequena turma de pré-vestibular, oferecendo aulas de reforço em Física e Matemática.
                </p>
                <p>
                    O projeto foi crescendo, conquistando espaço na cidade e região, até se consolidar como uma das
                    principais instituições preparatórias para vestibulares e mercado de trabalho.
                </p>
                <p>
                    Ao longo dos anos, o DOBRAGA Educacional já ajudou centenas de estudantes a alcançarem aprovação em
                    universidades de destaque e também a se prepararem para o primeiro emprego, oferecendo cursos
                    voltados às demandas atuais das empresas.
                </p>
                <p>
                    Hoje, a instituição se orgulha de ser reconhecida como um centro educacional moderno, inovador e
                    próximo de seus alunos, mantendo viva a missão de tornar o aprendizado mais acessível, prático e
                    transformador.
                </p>
            </article>

            <aside class="col-md-6" style="color: #103BC6;">
                <h6 style="font-family: 'SourceSansProBold', sans-serif; color: #103BC6;">Tem como missão:</h6>
                <p>Formar cidadãos e profissionais preparados para enfrentar os desafios acadêmicos e do mercado de
                    trabalho.</p>

                <h6 style="font-family: 'SourceSansProBold', sans-serif; color: #103BC6;">Tem como visão:</h6>
                <p>Ser referência regional em educação transformadora, inspirando jovens a conquistarem seus objetivos
                    e realizarem seus sonhos.</p>

                <p>O DOBRAGA Educacional acredita que cada aluno é único.</p>
                <p>Por isso, desenvolvemos um planejamento de estudo personalizado, que considera as facilidades,
                    dificuldades, preferências e objetivos de cada estudante.</p>
                <p>Além disso, unimos metodologias inovadoras, aulas dinâmicas e recursos tecnológicos para garantir o
                    máximo aproveitamento. Nosso foco é transformar o aprendizado em uma experiência prática e envolvente
                    — seja na preparação para os vestibulares mais concorridos, seja na inserção dos jovens no mercado de
                    trabalho.</p>
            </aside>
        </div>
    </section>

    <section class="fundo d-flex flex-column" aria-labelledby="fundador-title">
        <div class="outro-fundo" aria-hidden="true"></div>

        <section class="fundador text-white py-5" style="background-color: #FF5A1F;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 text-center mb-4 mb-md-0">
                        <img src="{{asset('images/David Braga.svg')}}" alt="Foto do fundador David Braga" class="img-fluid rounded shadow" />
                    </div>

                    <article class="col-md-8">
                        <h5 class="fw-bold d-inline-block px-3 py-2 rounded" style="background-color: #103BC6;">
                            Sobre o Fundador
                        </h5>
                        <p class="mt-3">
                            O professor David Braga Guimarães Wilkin Chew é educador com longa trajetória no ensino de
                            Física e Matemática. Conhecido por sua didática clara e envolvente, já lecionou em diferentes
                            instituições antes de fundar o DOBRAGA Educacional. Seu propósito sempre foi democratizar o
                            acesso ao ensino de qualidade em Tatuí e região, criando um espaço onde os estudantes pudessem
                            se sentir motivados e confiantes para alcançar seus objetivos. Mais do que um professor, David
                            Braga é um mentor, que inspira alunos a acreditarem no próprio potencial.
                        </p>
                    </article>
                </div>
            </div>
        </section>
    </section>

    <section class="valores text-white py-5" style="background: linear-gradient(#194AED 0%, #103BC6 33%, #0E309D 73%, #04289E 100%);">
        <div class="container">
            <h6 class="fw-bold mb-4" style="font-family: 'SourceSansProBold', sans-serif;">Valores</h6>
            <div class="row text-start">
                <div class="col-md-6 mb-4">
                    <h6 class="fw-bold">1. Pessoas em Primeiro Lugar</h6>
                    <p>Acreditamos que a verdadeira transformação começa com o respeito, o acolhimento e o desenvolvimento
                        de cada indivíduo.</p>
                </div>

                <div class="col-md-6 mb-4">
                    <h6 class="fw-bold">3. Inovação com Propósito</h6>
                    <p>Estamos sempre em busca de novas metodologias e ideias que tornem o ensino mais prático, inclusivo e
                        conectado com o mundo atual.</p>
                </div>

                <div class="col-md-6 mb-4">
                    <h6 class="fw-bold">2. Compromisso com o Aluno</h6>
                    <p>O sucesso do aluno é o nosso maior resultado. Por isso, guiamos nossas ações para garantir aprendizado
                        de qualidade e experiência positiva.</p>
                </div>

                <div class="col-md-6 mb-4">
                    <h6 class="fw-bold">4. Resultados que Transformam</h6>
                    <p>Valorizamos o esforço, a disciplina e a busca constante por conquistas que gerem impacto real na vida
                        dos nossos alunos e na comunidade.</p>
                </div>
            </div>
        </div>
    </section>

    <section style="background-color: #ffffff;">
        <div class="container">
            <h2 class="text-center mb-5 mt-4" style="color: #103BC6; font-family: 'SourceSansProBold', sans-serif;">Conheça os espaços da Instituição</h2>

            <div class="row justify-content-center">
                <div class="col-md-5 mb-4">
                    <div class="card p-3" style="background-color: #194AED; border-radius: 15px; height: 250px; display:flex; justify-content:center; align-items:center;">
                        <img src="#" alt="Espaço da Instituição" class="img-fluid" style="max-width:100px;" />
                    </div>
                </div>

                <div class="col-md-5 mb-4">
                    <div class="card p-3" style="background-color: #194AED; border-radius: 15px; height: 250px; display:flex; justify-content:center; align-items:center;">
                        <img src="#" alt="Espaço da Instituição" class="img-fluid" style="max-width:100px;" />
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="#" class="text-decoration-none">
                    <button class="btn-mostrar-mais rounded-pill py-2 mb-4" type="button">MOSTRAR MAIS</button>
                </a>
            </div>
        </div>
    </section>
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
</main>

@endsection