<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>@yield('title', 'DoBraga Educacional')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="{{ asset('images/avatar.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    @vite('resources/css/dashboard.css')

</head>

<body>
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                            <a href="{{ route('dashboard') }}"><img class="logo_icon img-responsive"
                                    src="{{ asset('images/avatar.svg') }}" alt="#" /></a>
                        </div>
                    </div>
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            <div class="user_img"><img class="img-responsive"
                                    src="{{ asset('images/David Braga.svg') }}" alt="#" /></div>
                            <div class="user_info">
                                <h6>{{ Auth::user()->name }}</h6>
                                <p><span class="online_animation"></span> Online</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <h4>Gerenciar Conteúdos</h4>
                    <ul class="list-unstyled components">
                        <li class="active">
                            <a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i>
                                <span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="#element" data-bs-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle"><i class="fa fa-tasks"></i>
                                <span>Website</span></a>
                            <ul class="collapse list-unstyled" id="element">
                                <li>
                                    <a href="{{ route('aprovados.index') }}"><i class="fa fa-graduation-cap"></i>
                                        <span>Alunos Aprovados</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('professores.index') }}"><i class="fa fa-group"></i> <span>Nossos
                                            Professores</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('novidades.index') }}"><i class="fa fa-info"></i>
                                        <span>Novidades</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('galerias.index') }}"><i class="fa fa-picture-o"></i>
                                        <span>Galeria de fotos</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('noticias.index') }}"><i class="fa fa-newspaper-o"></i>
                                        <span>Notícias</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('formulario.index') }}"><i class="fa fa-clipboard"></i> <span>Formulário de Interesse</span></a></li>
                        <!-- <li><a href="#"><i class="fa fa-cog"></i>
                                <span>Configurações</span></a>
                        </li> -->
                    </ul>
                </div>
            </nav>
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i
                                    class="fa fa-bars"></i></button>
                            <div class="logo_section">
                                <a href="{{ route('dashboard') }}"><img class="img-responsive"
                                        src="{{ asset('images/LOGO DOBRAGA.svg') }}" alt="#" /></a>
                            </div>
                            <div class="right_topbar">
                                <div class="icon_info">
                                    <!-- <ul>
                                        <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a>
                                        </li>
                                    </ul> -->
                                    <ul class="user_profile_dd">
                                        <li>
                                            <a class="dropdown-toggle" data-bs-toggle="dropdown"><img
                                                    class="img-responsive rounded-circle"
                                                    src="{{ asset('images/David Braga.svg') }}" alt="#" /><span
                                                    class="name_user">{{ Auth::user()->name }}</span></a>
                                            <div class="dropdown-menu">
                                                <!-- <a class="dropdown-item"
                                                    href="route('profile.edit')">{{ __('Meu Perfil') }}</a> -->
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <a href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                        {{ __('Sair') }} <i class="fa fa-sign-out"></i>
                                                    </a>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>@yield('page_title', 'Dashboard')</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    @vite('resources/js/dashboard.js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
