
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Simulados</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../src/images/dobragaAvatar.png">

    @vite('resources/css/simulado-teste.css')
</head>

<body>
    <h1>Listar Questão</h1>
    <div class="input_field">
        <div>
            <label for="disciplina">Disciplina:</label>
            <select id="disciplina">
                <option value="">--Escolha--</option>
                <option value="todas">Todas as disciplinas</option>
                <option value="linguagens">Linguagens</option>
                <option value="humanas">Ciências Humanas</option>
                <option value="natureza">Ciências da Natureza</option>
                <option value="matematica">Matemática</option>
            </select>
        </div>

        <div>
            <label for="num_questoes">Nº de Questões</label>
            <select id="num_questoes">
                <option value="">--Escolha--</option>
                <option value="1">1</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
            </select>
        </div>

        <div>
            <button class="enviar" type="submit" onclick="buscarQuestao()">Enviar</button>
        </div>
    </div>

    <div class="question_field"></div>

    @vite('resources/js/simulado.js')
</body>

</html>