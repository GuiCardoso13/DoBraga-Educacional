<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login - DoBraga Educacional</title>
    @vite('resources/css/app.css')
        <link rel="icon" type="image/png" href="{{ asset('images/avatar.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

</head>

<body class="vh-100">
    <div class="row h-100 g-0">

        <div class="col-md-6 d-none d-md-block d-md-flex flex-column lado-esquerdo justify-content-center align-items-center">
            <img src="{{ asset('images/avatar.png') }}" alt="logo dobraga">
            <img src="{{ asset('images/textologo.png') }}" alt="logo dobraga" class="mt-2">
        </div>

        <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">

            <h1 class="titulologin mb-4 text-center fw-bold">INSIRA SEUS DADOS DE ACESSO</h1>

            <div class="card shadow-lg rounded-4 p-4" style="max-width: 400px; width: 100%;">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3 text-start">
                        <label for="email" class="form-label fw-bold">EMAIL</label>
                        <input type="email" name="email" id="email" class="form-control rounded-3" placeholder="Ex: Admin" required autofocus>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mb-3 text-start">
                        <label for="password" class="form-label fw-bold">SENHA</label>
                        <input type="password" name="password" id="password" class="form-control rounded-3" placeholder="Ex: DobragaEducacionalADM123@" required>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="mb-3 form-check text-start">
                        <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                        <label class="form-check-label" for="remember_me">
                            Lembrar login
                        </label>
                    </div>


                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary rounded-3 fw-bold">
                            <i class="bi bi-lock"></i> LOG IN
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    </div>
    </div>













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>