@extends('layouts.layout')

@section('title', 'Por que fazer o ENEM pode transformar seu futuro - Notícias')

@section('extra-css')
@vite('resources/css/noticia-enem-exemplo.css')
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
                        <p class="p-rotulo p-1 px-2 m-0">ENEM</p>
                    </div>
                </div>
                <!-- Data -->
                <p class="descricao">20 de outubro de 2025.</p>

                <div class="titulo-subtitulo">
                    <!-- Título -->
                    <h3 class="titulo-noticia mb-3">Por que fazer o <span style="color: var(--Azul);">ENEM</span>
                        pode transformar seu futuro.
                    </h3>


                    <!-- Aqui onde vai poder adicionar parágrafos a notícia -->
                    <p class="descricao">
                        O Exame Nacional do Ensino Médio (ENEM) é muito mais do que apenas uma prova: ele representa
                        uma oportunidade estratégica para estudantes que buscam ingressar em instituições de ensino
                        superior em todo o Brasil. Além de ser a porta de entrada para universidades públicas via
                        SISU, o ENEM também possibilita o acesso a programas de bolsas de estudo, como o ProUni, e a
                        financiamentos estudantis, como o FIES, ampliando o leque de oportunidades para quem deseja
                        continuar os estudos.
                    </p>
                    <p class="descricao">
                        Preparar-se para o ENEM não apenas aumenta as chances de aprovação, mas também contribui
                        significativamente para o desenvolvimento de competências essenciais, como interpretação de
                        textos, raciocínio lógico, resolução de problemas e expressão escrita. Com o exame, os
                        estudantes aprendem a organizar seus conhecimentos, gerenciar o tempo e se adaptar a
                        diferentes tipos de questões, habilidades que são úteis tanto na vida acadêmica quanto na
                        profissional.
                    </p>
                    <p class="descricao">
                        Além disso, conhecer e aproveitar as vantagens do ENEM permite que os jovens planejem seu
                        futuro com mais segurança, escolhendo cursos e universidades que se alinham aos seus
                        objetivos. Participar do exame também traz experiências valiosas de autoconhecimento e
                        disciplina, mostrando que cada etapa da preparação contribui para o crescimento pessoal e
                        acadêmico.
                    </p>
                    <p class="descricao">
                        Em resumo, o ENEM é uma ferramenta poderosa para transformar oportunidades em conquistas,
                        incentivando a educação de qualidade e abrindo caminhos para o desenvolvimento profissional
                        e pessoal dos estudantes.
                    </p>
                </div>


                <!-- Aqui poderá adicionar anexos (links [stories, vídeos, etc] ou downloads de arquivos APENAS por link) -->
                <div class="anexos">
                    <div class="links mb-1">
                        <!-- Quando houver, vai inserir aqui -->
                        <a href="https://www.guiadacarreira.com.br/blog/quantas-horas-de-prova-tem-o-enem"
                            class="hyperlink"><i class="bi bi-paperclip"></i>Acesse aqui o site oficial de como
                            funciona a prova do ENEM.</a>
                    </div>
                    <div class="links mb-1">
                        <!-- Quando houver, vai inserir aqui -->
                        <a href="https://www.guiadacarreira.com.br/blog/quantas-horas-de-prova-tem-o-enem"
                            class="hyperlink"><i class="bi bi-paperclip"></i>Baixar agora o EDITAL do ENEM 2025.</a>
                    </div>

                    <!-- Aqui poderá adicionar mídias (vídeos incorporados) -->

                    <div class="midia mt-4 d-none"> <!-- IMPORTANTE!! retirar d-none no back -->
                        <!-- YouTube -->
                        <div class="youtube mb-4">
                            <div class="ratio ratio-16x9 w-100 w-lg-75">
                                <iframe src="https://www.youtube.com/embed/[endereço do vídeo]"
                                    title="Vídeo do YouTube" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
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