<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar Competição</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Estilos Personalizados -->
    <style>
        body {
            background-color: #f8f9fa; /* Cor de fundo suave */
            font-family: 'Arial', sans-serif; /* Fonte moderna */
        }

        .container {
            max-width: 500px; /* Limitar a largura do formulário */
            margin-top: 100px; /* Margem superior para centralizar */
            padding: 30px; /* Espaço interno */
            background-color: #ffffff; /* Fundo branco para o formulário */
            border-radius: 10px; /* Bordas arredondadas */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Sombra para dar profundidade */
        }

        h2 {
            text-align: center; /* Centralizar título */
            margin-bottom: 20px; /* Espaço abaixo do título */
        }

        .btn-success {
            background-color: #28a745; /* Cor do botão "Salvar" em verde */
            border: none; /* Remover borda */
            transition: background-color 0.3s; /* Efeito de transição */
        }

        .btn-success:hover {
            background-color: #218838; /* Cor do botão ao passar o mouse */
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Adicionar Competição</h2> <!-- Título do formulário -->
    <form method="POST" action="{{ route('competicao.form.post') }}">
        @csrf
        <div class="mb-3">
            <label for="competicao" class="form-label">Competição</label>
            <input type="text" class="form-control" id="competicao" name="competicao" required aria-describedby="competicaoHelp">
            <div id="competicaoHelp" class="form-text">Obs: Apenas competições disputadas por Brasileiros.</div>
        </div>
        
        <div class="mb-3">
            <label for="pontuacao" class="form-label">Pontuação</label>
            <input type="number" class="form-control" id="pontuacao" name="pontuacao" min="0" step="1" required aria-describedby="pontuacaoHelp">
        </div>
        
        <button type="submit" class="btn btn-success w-100">Salvar</button> <!-- Botão "Salvar" em verde -->
        <a class="btn btn-info w-100 mt-2" href="{{ route('competicao.list') }}">Voltar</a> <!-- Botão "Voltar" -->
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
