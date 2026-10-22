
// [15/10/2025] Esquema de questões 100% pronto. Resta visual - CSS

window.buscarQuestao = buscarQuestao;

function numeroAleatorioPorDisciplina(disciplina, ano) {
    let min, max;

    if (ano <= 2016) {
        // Estrutura e organização de provas antigas (2009-2016)
        switch (disciplina) {
            case 'humanas': min = 1; max = 45; break;
            case 'natureza': min = 46; max = 90; break;
            case 'linguagens': min = 91; max = 135; break;
            case 'matematica': min = 136; max = 180; break;
            default: return null;
        }
    } else {
        // Estrutura e organização de provas atuais (2017-atual...)
        switch (disciplina) {
            case 'linguagens': min = 1; max = 45; break;
            case 'humanas': min = 46; max = 90; break;
            case 'natureza': min = 91; max = 135; break;
            case 'matematica': min = 136; max = 180; break;
            default: return null;
        }
    }
    let numero = Math.floor(Math.random() * (max - min + 1)) + min;

    return numero;
}

function escolherDisciplinaAleatoria() {
    const disciplinas = ["linguagens", "humanas", "natureza", "matematica"];

    const i = Math.floor(Math.random() * disciplinas.length);
    return disciplinas[i];
}

function pegarAnoAleatorio() {
    // A estrutura de provas com 180 questões (45 p/ cada disciplina) foi introduzida em 2009
    // A 'API ENEM' possui questões até o ano de 2023 apenas
    let min = 2009, max = 2023;
    let ano = Math.floor(Math.random() * (max - min + 1)) + min;

    return ano;
}

function buscarQuestao() {
    const disciplina = document.getElementById('disciplina').value;
    const num_questoes = parseInt(document.getElementById('num_questoes').value, 10);
    console.log(disciplina, num_questoes);

    // Espaço que aparecerá as questões
    const container = document.querySelector('.question_field');
    container.innerHTML = ''; // limpa antes
    const respostas = new Array(num_questoes); // array para guardar as questões
    let carregadas = 0;

    // Caso de erro mostra um alert simples
    if (!disciplina || isNaN(num_questoes) || num_questoes <= 0) {
        alert('Selecione uma disciplina e insira um número válido de questões.');
        return;
    }

    for (let i = 0; i < num_questoes; i++) {
        const ano = pegarAnoAleatorio();

        // se "todas", sorteia uma disciplina
        let disciplinaEscolhida = disciplina;

        if (disciplina === "todas") {
            disciplinaEscolhida = escolherDisciplinaAleatoria();
        }


        // gera o número de questão baseado na disciplina escolhida
        const index = numeroAleatorioPorDisciplina(disciplinaEscolhida, ano);

        const url = `https://api.enem.dev/v1/exams/${ano}/questions/${index}`;

        fetch(url)
            .then(res => res.json())
            .then(questao => {
                respostas[i] = { questao, ano };
                carregadas++;

                // só renderiza quando todas estiverem carregadas
                if (carregadas === num_questoes) {
                    respostas.forEach((item, id) => {
                        const card = document.createElement('div');
                        card.classList.add('question_card');

                        const title = document.createElement('div');
                        title.textContent = `Questão ${id + 1} — ${item.questao.discipline} (${item.ano})`;
                        card.appendChild(title);

                        // Pergunta

                        if (item.questao.context && (item.questao.context).trim() !== "") {
                            let texto_pergunta = item.questao.context.replace(/!\[.*?\]\(.*?\)/g, '')

                            const pergunta = document.createElement('p');
                            pergunta.textContent = texto_pergunta;
                            card.appendChild(pergunta);
                        }

                        // Imagens, se houver

                        if (item.questao.files && item.questao.files.length > 0) {
                            item.questao.files.forEach(fileUrl => {
                                const img = document.createElement('img');
                                img.src = fileUrl;
                                img.alt = 'Imagem da questão';
                                img.style.maxWidth = "400px";
                                card.appendChild(img);
                            });
                        }

                        // Alternativas

                        if (item.questao.alternativesIntroduction) {
                            const introducaoAlternativas = document.createElement('p');
                            introducaoAlternativas.classList.add('introducao_pergunta');
                            introducaoAlternativas.textContent = item.questao.alternativesIntroduction;
                            card.appendChild(introducaoAlternativas);
                        }

                        const ul = carregarAlternativas(item.questao);
                        card.appendChild(ul);

                        container.appendChild(card);
                    });
                }
            })
            .catch(err => console.error(err));
    }
}

function carregarAlternativas(questao) {
    const div = document.createElement('div');
    div.classList.add('alternativas_field');

    questao.alternatives.forEach(alt => {
        const label = document.createElement('label');
        label.classList.add('alternativa');

        const input = document.createElement('input');
        input.setAttribute('type', 'radio');
        input.setAttribute('value', alt.letter);
        input.setAttribute('name', 'alternativa');

        const span = document.createElement('span');
        span.textContent = `${alt.letter}: `;

        input.addEventListener('change', () => {
            verificarResposta(input.value, questao, resposta);
        });

        label.appendChild(input);
        label.appendChild(span);

        if (alt.text) {
            const texto_da_questao = document.createElement('span');
            texto_da_questao.textContent = alt.text;
            label.appendChild(texto_da_questao);
        }

        if (alt.file) {
            const img = document.createElement('img');
            img.src = alt.file;
            img.alt = `Alternativa ${alt.letter}`;
            img.style.maxWidth = "200px";
            label.appendChild(img);
        }

        div.appendChild(label);
    });

    const resposta = document.createElement('span');
    resposta.classList.add('feedback');

    div.appendChild(resposta);

    return div;
}

function verificarResposta(escolhaAlternativa, questao, respostaQuestao) {
    const alternativaCorreta = questao.alternatives.find(alt => alt.isCorrect === true);

    const letraCorreta = alternativaCorreta ? alternativaCorreta.letter : 'Não encontrada.'

    if (escolhaAlternativa == letraCorreta) {
        respostaQuestao.textContent = 'Parabéns, resposta correta!';
    } else {
        respostaQuestao.textContent = `Resposta incorreta. Alternativa correta é ${questao.correctAlternative}.`;
    }
}