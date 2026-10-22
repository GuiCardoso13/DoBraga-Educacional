@foreach($noticias as $noticia)
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="item">
                        <div class="card-noticia p-3">
                            <!-- O link levará pra página específica de notícia -->
                            <a href="{{ route('noticias.public.show', $noticia->slug) }}">
                                <div class="imagem-rotulo">
                                    <img class="imagem-noticia" src="{{  asset(path: 'storage/' . $noticia->imagem) }}"
                                        alt="imagem-noticia">
                                    <div class="rotulo m-0">
                                        <p class="p-rotulo p-1 px-2 m-0">{{ strtoupper(Str::limit($noticia->categoria)) }}</p>
                                    </div>
                                </div>
                            </a>

                            <div class="titulo-subtitulo">
                                <!-- SE POSSÍVEL - na hora da criação de uma nova notícia a opção de destacar em azul algo do título -->
                                <h3 class="titulo-noticia">
                                    <!-- <span style="color: var(--Azul);">aqui</span>. -->
                                    {{ $noticia->titulo }}
                                </h3>
                                <!-- Tem um limitador de linhas aqui -->
                                <p class="descricao">
                                    {{ Str::limit($noticia->descricao, 150) }}
                                </p>
                            </div>

                            <div class="mb-2">
                                <!-- O link levará pra página específica de notícia -->
                                <a href="{{ route('noticias.public.show', $noticia->slug) }}" class="botao-ler-mais p-1 px-3">Ler mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
