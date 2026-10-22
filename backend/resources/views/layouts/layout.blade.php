<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dobraga Educacional')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/avatar.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    @vite('resources/css/app.css')
    @yield('extra-css')
</head>

<a href="https://wa.me/5515996175101" class="whatsapp-float" target="_blank" aria-label="WhatsApp">
    <i class="bi bi-whatsapp"></i>
</a>

<body>
    <div class="header-placeholder d-none d-xl-block"></div>
    <header class="d-none d-xl-block py-3" style="background-color: var(--Azul);">
        <nav class="border-bottom border-white">
            <div class="container d-flex align-items-center justify-content-between">
                
                    <div class="mb-2">
                        <img src="{{ asset('images/Avatar.svg') }}" alt="Avatar" class="me-2 logo-avatar">
                        <img src="{{ asset('images/LOGO DOBRAGA.svg') }}" alt="DOBRAGA" class="">
                    </div>
                
                <ul class="nav justify-content-center py-2 gap-4" style="font-family: 'FormaDJRDisplay';">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/sobre') }}">SOBRE NÓS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/institucional') }}">INSTITUCIONAL</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/mural-de-noticias') }}">NOTÍCIAS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/mural-dos-aprovados') }}">APROVADOS</a></li>
                    <li class="nav-item">
                        <a href="{{ url('/formulario-de-interesse') }}" class="ms-2" style="font-family: 'SourceSansProBold';">
                            <button class="btn-start_now py-1">COMECE AGORA</button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/simulados') }}" class="ms-2" style="font-family: 'SourceSansProBold';">
                            <button class="btn-simulate py-1">SIMULADOS</button>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="text-white mt-3" style="background-color: var(--Azul);">
            <div class="container">
                <div class="d-flex align-items-center justify-content-center gap-4 flex-wrap" style="font-family: 'SourceSansProBold';">
                    <a href="https://wa.me/5515996175101" class="Contatos text-white text-decoration-none d-flex align-items-center"
                        target="_blank"> <!-- maldito tava só no mobile-->
                        <i class="bi bi-whatsapp me-2"></i> (15) 99617-5101
                    </a>
                    <a href="mailto:davidbraga@dobragaeducacional.com" class="text-white text-decoration-none d-flex align-items-center"
                        target="_blank">
                        <i class="bi bi-envelope-fill me-2"></i> davidbraga@dobragaeducacional.com
                    </a>
                    <a href="https://maps.app.goo.gl/jc7XBQcesCGNi4sZ7" class="text-white text-decoration-none d-flex align-items-center"
                        target="_blank">
                        <i class="bi bi-geo-alt-fill me-2"></i> Localização
                    </a>

                    <a href="{{ url('/login') }}" class="text-white text-decoration-none d-flex align-items-center justify-content-center" target="_blank">
                        <i class="bi bi-person-fill me-2"></i> Administrador
                    </a>

                    <span class="d-flex align-items-center gap-3 ms-3">
                        <a href="https://www.instagram.com/dobragaeducacional/" class="text-white" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="https://web.facebook.com/fisicadobraga/?_rdc=1&_rdr" class="text-white" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.youtube.com/@DoBragaEducacional/videos" class="text-white" target="_blank"><i class="bi bi-youtube"></i></a>
                        <a href="https://www.tiktok.com/@fisicadobraga" class="text-white" target="_blank"><i class="bi bi-tiktok"></i></a>
                    </span>
                </div>
            </div>
        </div>
    </header>

    <div class="header-placeholder d-block d-xl-none"></div>
    <header class="d-block d-xl-none" style="background-color: var(--Azul);">
        <nav class="navbar navbar-dark p-3">
            <div class="container d-flex align-items-center justify-content-between">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <img src="{{ asset('images/Avatar.svg') }}" alt="Avatar" class="me-2 logo-avatar">
                    <img src="{{ asset('images/LOGO DOBRAGA.svg') }}" alt="DOBRAGA" class="logo-texto">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuMobile" aria-controls="menuMobile" aria-expanded="false" aria-label="Menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="menuMobile">
                <ul class="navbar-nav text-center p-1">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/sobre') }}">SOBRE NÓS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/institucional') }}">INSTITUCIONAL</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/mural-de-noticias') }}">NOTÍCIAS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/mural-dos-aprovados') }}">APROVADOS</a></li>
                    <li class="nav-item mt-2"><a href="{{ url('/formulario-de-interesse') }}" class="btn btn-light text-primary fw-bold w-75 mx-auto">COMECE AGORA</a></li>
                    <li class="nav-item mt-2"><a href="{{ url('/simulados') }}" class="btn btn-outline-light w-75 mx-auto">SIMULADOS</a></li>
                    <li class="nav-item mt-3">
                        <a href="https://wa.me/5515996175101" class="text-white text-decoration-none d-flex align-items-center justify-content-center" target="_blank">
                            <i class="bi bi-whatsapp me-2"></i> (15) 99617-5101
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="text-white text-decoration-none d-flex align-items-center justify-content-center" target="_blank">
                            <i class="bi bi-envelope-fill me-2"></i> davidbraga@dobragaeducacional.com
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://maps.app.goo.gl/jc7XBQcesCGNi4sZ7" class="text-white text-decoration-none d-flex align-items-center justify-content-center" target="_blank">
                            <i class="bi bi-geo-alt-fill me-2"></i> Localização
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/login') }}" class="text-white text-decoration-none d-flex align-items-center justify-content-center" target="_blank">
                            <i class="bi bi-person-fill me-2"></i> Administrador
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <div class="d-flex justify-content-center gap-3">
                            <a href="https://www.instagram.com/dobragaeducacional/" class="text-white" target="_blank"><i class="bi bi-instagram"></i></a>
                            <a href="https://web.facebook.com/fisicadobraga/?_rdc=1&_rdr" class="text-white" target="_blank"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.youtube.com/@DoBragaEducacional/videos" class="text-white" target="_blank"><i class="bi bi-youtube"></i></a>
                            <a href="https://www.tiktok.com/@fisicadobraga" class="text-white" target="_blank"><i class="bi bi-tiktok"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-black text-white rodapeeee">
        <div class="container py-4">
            <hr class="border-light opacity-100">
            <div class="row text-center text-md-start mt-4">
                <div class="col-12 col-md-2 mb-4 mb-md-0">
                    <img src="{{ asset('images/LOGO DOBRAGA FOOTER.svg') }}" alt="Logo" class="img-fluid" style="max-height:50px;">
                </div>
                <div class="col-12 col-md-2 mb-4 mb-md-0">
                    <h6 class="fw-bold">Dobraga Educacional</h6>
                    <ul class="list-unstyled small">
                        <li><a href="{{ url('/sobre') }}" class="text-white text-decoration-none">Sobre nós</a></li>
                        <li><a href="{{ url('/institucional') }}" class="text-white text-decoration-none">Institucional</a></li>
                        <li><a href="{{ url('/mural-de-noticias') }}" class="text-white text-decoration-none">Notícias</a></li>
                        <li><a href="{{ url('/mural-dos-aprovados') }}" class="text-white text-decoration-none">Aprovados</a></li>
                    </ul>
                </div>

                <!-- aumentei esta coluna para col-md-3 para dar espaço ao e-mail -->
                <div class="col-12 col-md-3 mb-4 mb-md-0">
                    <h6 class="fw-bold">Contatos</h6>
                    <p class="small mb-1 contact-email">davidbraga@dobragaeducacional.com</p>
                    <p class="small mb-0">+55 (15) 99617-5101</p>
                </div>

                <div class="col-12 col-md-3 mb-4 mb-md-0">
                    <h6 class="fw-bold">Endereço</h6>
                    <p class="small mb-0">
                        Rua Coronel Licínio Seabra,<br>
                        435 - Centro, Tatuí - SP<br>
                        18270-240
                    </p>
                </div>

                <!-- reduzi a largura desta coluna para manter soma = 12 -->
                <div class="col-12 col-md-2">
                    <h6 class="fw-bold">Redes Sociais</h6>
                    <div class="d-flex gap-3 justify-content-center d-md-none">
                        <a href="https://www.instagram.com/dobragaeducacional/"><i class="bi bi-instagram fs-5 text-white"></i></a>
                        <a href="https://www.facebook.com/dobragaeducacional"><i class="bi bi-facebook fs-5 text-white"></i></a>
                        <a href="https://www.youtube.com/@DoBragaEducacional"><i class="bi bi-youtube fs-5 text-white"></i></a>
                        <a href="https://www.tiktok.com/@dobragaeducacional"><i class="bi bi-tiktok fs-5 text-white"></i></a>
                    </div>
                    <div class="d-none d-md-block">
                        <div class="d-flex gap-3 justify-content-start mb-2">
                            <a href="https://www.instagram.com/dobragaeducacional/"><i class="bi bi-instagram fs-5 text-white"></i></a>
                            <a href="https://www.facebook.com/dobragaeducacional"><i class="bi bi-facebook fs-5 text-white"></i></a>
                            <a href="https://www.youtube.com/@DoBragaEducacional"><i class="bi bi-youtube fs-5 text-white"></i></a>
                            <a href="https://www.tiktok.com/@dobragaeducacional"><i class="bi bi-tiktok fs-5 text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="border-light opacity-100">
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @vite('resources/js/scripts.js')
    @vite('resources/js/app.js')

</body>

</html>



<!-- [15/10/2025] 11 dias para o EPA 😩 -->