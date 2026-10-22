@foreach ($aprovados as $aprovado)
    <div class="col-md-4 col-12">
        <div class="aprovados-card h-100" tabindex="0">
            <div class="aprovados-card-front">
                <img src="{{ asset('storage/' . $aprovado->imagem) }}" class="aprovados-img" alt="Foto de {{ $aprovado->nome }}">
            </div>
            <div class="aprovados-card-back">
                @if($aprovado->mensagem)
                    <p class="text-justify mb-3">
                        {{ $aprovado->mensagem }}
                    </p>
                @endif
                <div style="background-color: var(--Azul); width: 100%; height: 1px;"></div>
                <div class="d-flex align-items-center mt-3">
                <div>
                    <h6 class="mb-0" style="color: var(--Azul);">{{ $aprovado->nome }}</h6>
                    <span>{{ $aprovado->descricao }}</span>
                </div>
            </div>
            </div>
        </div>
    </div>
@endforeach