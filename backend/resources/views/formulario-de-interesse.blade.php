@section('title', 'Formulário de Interesse (Pré-Cadastro)')

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro DoBragaEducacional</title>
    <link rel="icon" type="image/png" href="{{ asset('images/avatar.png') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    @vite('resources/css/formulario.css')

    <style>
        .slide-collapse { transition: max-height .35s ease, opacity .25s ease; overflow: hidden; }
        .slide-collapse.collapsed { max-height: 0 !important; opacity: 0; padding: 0; margin: 0; }
        .slide-collapse.expanded { max-height: 500px; opacity: 1; }
        .small-muted { font-size: .85rem; color: #6c757d; }
        .validation-feedback { font-size: .85rem; color: #d63384; }
    </style>
</head>
<a href="https://wa.me/5515996175101" class="whatsapp-float" target="_blank" aria-label="WhatsApp">
    <i class="bi bi-whatsapp"></i>
</a>

<body>
    <header class="cabecalho-container d-flex justify-content-between p-3 px-lg-4">

        <!-- Logo desktop -->
        <img src="{{ asset('images/LOGO DOBRAGA.svg') }}" alt="Logo" class="d-none d-md-block ms-5" style="height:50px; width:auto;">

        <!-- Logo mobile -->
        <img src="{{ asset('images/LOGO DOBRAGA.svg') }}" alt="Logo" class="d-block d-md-none ms-3 mt-1"
            style="height:35px; width:auto;">

        <div class="barra-progresso d-none d-md-flex align-items-center">
            <div class="step">
                <div class="circle active bg-white"></div>
                <div class="description label">DADOS PESSOAIS</div>
            </div>

            <div class="step">
                <div class="circle"></div>
                <div class="description label">REVISÃO</div>
            </div>

            <div class="step">
                <div class="circle"></div>
                <div class="description label">CONCLUÍDO</div>
            </div>
        </div>

        <a href="/">
            <button type="submit" class="btn-voltar fs-6 fs-md-5 p-md-1 mt-1 me-2 mt-md-1 me-md-5 ">
                VOLTAR
            </button>
        </a>
    </header>

    <div id="container-remove" class="container mt-4 ms-md-5 me-lg-0 px-lg-4">

        <!-- Título -->
        <h5 class="title fw-bold text-center text-md-start mt-md-3 mt-3">
            FORMULÁRIO DE INTERESSE
        </h5>

        <!-- Linha abaixo do título -->
        <div class="linha-titulo mx-4 mx-md-0"></div>

        <!-- Texto abaixo -->
        <p class="subtittle text-center text-md-start ms-0">
            PREENCHA OS CAMPOS A SEGUIR PARA INICIAR O PRÉ-CADASTRO
        </p>

    </div>


    <div class="container mt-2  ms-md-5 me-lg-0 px-lg-4">
        <form method="POST" action="{{ route('formulario.store') }}" id="cadastroForm" class="px-3 px-md-0">
            @csrf
            <div class="row mb-3">
                <div class="col-12">
                    <label class="description form-label">Nome*</label>
                    <input type="text" id="nome" name="name" class="form-control"
                        placeholder="Nome Completo. Ex: João Barreto" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 col-md-6 col-lg-4 mt-md-4">
                    <label class="description form-label">Email*</label>
                    <input type="email" id="email" name="email" class="form-control"
                        placeholder="Endereço de Email. Ex: abc@dfg.h" required>
                </div>
                <div class="col-12 col-md-3 col-lg-4 mt-4">
                    <label class="description form-label">Gênero*</label>
                    <select id="genero" name="gender" class="form-control form-select"
                        aria-label="Default select example" required>
                        <option class="description" disabled selected value="">Gênero*</option>
                        <option class="description text-primary-emphasis" value="Feminino">FEMININO</option>
                        <option class="description text-primary-emphasis" value="Masculino">MASCULINO</option>
                        <option class="description text-primary-emphasis" value="Outro">OUTRO</option>
                    </select>
                </div>
                <div class="col-12 col-md-3 col-lg-4 mt-4">
                    <label class="description form-label">Idade*</label>
                    <input type="number" id="idade" name="age" class="form-control" placeholder="Idade. Ex: XX"
                        required min="0">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 col-md-4 mt-4">
                    <label class="description form-label">Telefone*</label>
                    <input type="text" id="telefone" name="phone" class="form-control" placeholder="(XX) 9XXXX-XXXX"
                        required pattern="^\(\d{2}\)\s\d{4,5}-\d{4}$">
                    <div class="form-text small-muted">Formato: (11) 91234-5678</div>
                    <div class="invalid-feedback">Telefone inválido. Use o formato (11) 91234-5678</div>
                </div>
                <div class="col-12 col-md-8 mt-4">
                    <label class="description form-label">Endereço*</label>
                    <input type="text" id="endereco" name="address" class="form-control"
                        placeholder="Ex. Rua Cel. Mario, N°XX - Centro, São Paulo - SP" required>
                </div>
            </div>

            <p class="subtittle mt-5">CASO SEJA MENOR DE IDADE, PREENCHA OS CAMPOS ADICIONAIS DO RESPONSÁVEL PELO ALUNO(A) INTERESSADO
            </p>

            <div id="responsavelSection" class="row">
                <div class="col-12 col-md-6 mt-md-3 mb-md-5">
                    <label class="description form-label">Nome*</label>
                    <input type="text" id="nomeResponsavel" name="resp_name" class="form-control"
                        placeholder="Nome do Responsável. Ex: João Barreto Pai" required>
                </div>
                <div class="col-12 mt-2 col-md-6 mt-md-3">
                    <label class="description form-label">Telefone*</label>
                    <input type="text" id="telefoneResponsavel" name="resp_phone" class="form-control"
                        placeholder="(XX) 9XXXX-XXXX" required pattern="^\(\d{2}\)\s\d{4,5}-\d{4}$">
                    <div class="form-text small-muted">Formato: (11) 91234-5678</div>
                    <div class="invalid-feedback">Telefone do responsável inválido. Use o formato (11) 91234-5678</div>
                </div>
            </div>

            <div id="container-select" class="d-flex flex-column mb-3">
                <label class="description form-label">ESCOLHA SEU INTERESSE*</label>
                <select id="interesse" name="interest" class="form-control form-select"
                    aria-label="Default select example" required>
                    <option class="description" disabled selected value="">ESCOLHA SEU INTERESSE*</option>
                    <option class="description text-primary-emphasis" value="Pré-Vestibular">FOCO EM PRÉ-VESTIBULAR
                    </option>
                    <option class="description text-primary-emphasis" value="Pré-Preparatório Para Concurso">
                        PRÉ-PREPARATÓRIO PARA CONCURSO</option>
                    <option class="description text-primary-emphasis" value="Reforço Escolar">REFORÇO ESCOLAR</option>
                </select>
            </div>
            <button type="button" onclick="validateAndReview()" id="btn-form"
                class="btn-confirmar fs-6 fs-md-5 p-md-1 ms-3 ms-md-0 me-md-5 mb-5 mt-3">
                CONFIRMAR
            </button>
        </form>

    </div>
    <!-- Tela Revisão -->
    <div id="revisao" style="display:none;" class="container mt-4 px-lg-4">
        <h5 class="title mb-3">REVISÃO DOS DADOS</h5>
        <div class="linha-titulo mb-4"></div>

        <div class="card p-3 mb-3 shadow-sm">
            <h6 class="fw-bold text-secondary mb-2">Aluno(a)</h6>
            <p><b>Nome:</b> <span id="revNome"></span></p>
            <p><b>Email:</b> <span id="revEmail"></span></p>
            <p><b>Gênero:</b> <span id="revGenero"></span></p>
            <p><b>Idade:</b> <span id="revIdade"></span></p>
            <p><b>Interesse:</b> <span id="revInteresse"></span></p>
            <p><b>Telefone:</b> <span id="revTelefone"></span></p>
            <p><b>Endereço:</b> <span id="revEndereco"></span></p>
        </div>

        <div class="card p-3 mb-4 shadow-sm">
            <h6 class="fw-bold text-secondary mb-2">Responsável</h6>
            <p><b>Nome:</b> <span id="revNomeResponsavel"></span></p>
            <p><b>Telefone:</b> <span id="revTelefoneResponsavel"></span></p>
        </div>

        <div class="d-flex gap-3">
            <button onclick="voltarEdicao()" class="btn-editar mb-5 mt-3">Editar</button>
            <button onclick="enviarFormulario()" class="btn-confirmar mb-5 mt-3">Enviar Dados</button>
        </div>
    </div>

    <!-- Tela Concluído -->
    <div id="concluido" class="container-fluid mt-4 d-none px-lg-4">

        <div class="container">
            <h5 class="title mb-3">FORMULÁRIO CONCLUÍDO</h5>
            <div class="linha-titulo mb-4"></div>

            <div class="row align-items-center">

                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <p class="title fs-4">
                        Parabéns! Suas informações foram salvas.
                    </p>
                    <p class="title text-dark">Entraremos em contato em breve!</p>

                    <a href="/">
                        <button onclick="voltarInicio()" class="btn-voltarInicio mt-3 px-4 py-2"> VOLTAR À TELA INICIAL
                        </button>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="container">
            <!-- <img src="{{ asset('images/Avatar.svg') }}" alt=""> -->
        </div>
        
    </div>

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

    @vite('resources/js/formulario.js')

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('cadastroForm');
    const idadeInput = document.getElementById('idade');
    const responsavelSection = document.getElementById('responsavelSection');
    const nomeResp = document.getElementById('nomeResponsavel');
    const telResp = document.getElementById('telefoneResponsavel');
    const telefone = document.getElementById('telefone');
    const telefoneResp = document.getElementById('telefoneResponsavel');

    const phoneRegex = /^\(\d{2}\)\s\d{4,5}-\d{4}$/;

    if (responsavelSection) {
        responsavelSection.classList.add('slide-collapse');
    }

    function setGuardianState(isAdult) {
        if (!responsavelSection) return;
        if (isAdult) {
            responsavelSection.classList.add('collapsed');
            responsavelSection.classList.remove('expanded');
            if (nomeResp) { nomeResp.required = false; nomeResp.classList.remove('is-invalid'); nomeResp.classList.remove('is-valid'); }
            if (telResp) { telResp.required = false; telResp.classList.remove('is-invalid'); telResp.classList.remove('is-valid'); }
            // remove aria
            responsavelSection.setAttribute('aria-hidden', 'true');
        } else {
            responsavelSection.classList.remove('collapsed');
            responsavelSection.classList.add('expanded');
            if (nomeResp) nomeResp.required = true;
            if (telResp) telResp.required = true;
            responsavelSection.removeAttribute('aria-hidden');
        }
    }

    function updateResponsavel() {
        const idadeVal = idadeInput && idadeInput.value ? parseInt(idadeInput.value, 10) : NaN;
        const isAdult = !isNaN(idadeVal) && idadeVal >= 18;
        setGuardianState(isAdult);
    }

    // phone mask: formats (11) 91234-5678 or (11) 1234-5678
    function maskPhone(e) {
        const el = e.target;
        const digits = el.value.replace(/\D/g, '');
        let formatted = digits;
        if (digits.length <= 2) {
            formatted = '(' + digits;
        } else if (digits.length <= 6) {
            formatted = '(' + digits.slice(0,2) + ') ' + digits.slice(2);
        } else if (digits.length <= 10) {
            // 9xxxx-xxxx
            formatted = '(' + digits.slice(0,2) + ') ' + digits.slice(2, digits.length-4) + '-' + digits.slice(digits.length-4);
        } else {
            formatted = '(' + digits.slice(0,2) + ') ' + digits.slice(2, digits.length-4) + '-' + digits.slice(digits.length-4, digits.length);
        }
        el.value = formatted;
    }

    function setValidityClass(el) {
        if (!el) return;
        if (el.checkValidity()) {
            el.classList.remove('is-invalid');
            el.classList.add('is-valid');
        } else {
            el.classList.remove('is-valid');
            el.classList.add('is-invalid');
        }
    }

    if (idadeInput) {
        idadeInput.addEventListener('input', updateResponsavel);
        idadeInput.addEventListener('change', updateResponsavel);
    }

    [telefone, telefoneResp].forEach(function(el) {
        if (!el) return;
        el.addEventListener('input', maskPhone);
        el.addEventListener('input', function() { setValidityClass(el); });
        el.addEventListener('blur', function() { setValidityClass(el); });
    });

    if (form) {
        Array.from(form.querySelectorAll('input[required], select[required]')).forEach(function(inp) {
            inp.addEventListener('input', function() { setValidityClass(inp); });
            inp.addEventListener('blur', function() { setValidityClass(inp); });
        });
    }

    updateResponsavel();
});

function validateAndReview() {
    const form = document.getElementById('cadastroForm');
    if (!form) return;

    const idadeInput = document.getElementById('idade');
    const nomeResp = document.getElementById('nomeResponsavel');
    const telResp = document.getElementById('telefoneResponsavel');
    const telefone = document.getElementById('telefone');
    const telefoneResp = document.getElementById('telefoneResponsavel');
    const idadeVal = idadeInput && idadeInput.value ? parseInt(idadeInput.value, 10) : NaN;
    const isAdult = !isNaN(idadeVal) && idadeVal >= 18;
    if (nomeResp) nomeResp.required = !isAdult;
    if (telResp) telResp.required = !isAdult;

    const phoneRegex = /^\(\d{2}\)\s\d{4,5}-\d{4}$/;
    if (telefone && !phoneRegex.test(telefone.value)) {
        telefone.classList.add('is-invalid');
        telefone.focus();
        return telefone.reportValidity ? telefone.reportValidity() : form.reportValidity();
    }
    if (!isAdult && telefoneResp && !phoneRegex.test(telefoneResp.value)) {
        telefoneResp.classList.add('is-invalid');
        telefoneResp.focus();
        return telefoneResp.reportValidity ? telefoneResp.reportValidity() : form.reportValidity();
    }

    if (form.checkValidity()) {
        if (typeof Revisao === 'function') {
            Revisao();
        } else {
            form.submit();
        }
    } else {
        form.reportValidity();
    }
}
</script>

</body>

</html>