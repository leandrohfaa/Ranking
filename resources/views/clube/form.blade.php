<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar Clube - Ranking de Clubes</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Estilos Personalizados -->
    <style>
        body {
            background-color: #f8f9fa; /* Cor de fundo suave */
            font-family: 'Arial', sans-serif; /* Fonte moderna */
            font-size: 1.5rem; 
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

        .btn-info {
            background-color: #004aaa; /* Cor do botão "Voltar" */
            border: none; /* Remover borda */
            transition: background-color 0.3s; /* Efeito de transição */
            color: #ffffff;
        }

        .btn-info:hover {
            background-color: #004aaa; /* Cor do botão "Voltar" ao passar o mouse */
        }
    </style>
</head>

<body>

<div class="container">

    <form method="POST" action="{{ route('clube.form.post') }}">
        @csrf
        <div class="mb-3">
            <label for="clube" class="form-label">Nome do Clube</label>
            <input type="text" class="form-control" id="clube" name="clube" required aria-describedby="clubeHelp">
            <div id="clubeHelp" class="form-text">Obs: Apenas clubes Brasileiros.</div>
        </div>
        <button type="submit" class="btn btn-success w-100">Salvar</button> 
        <a class="btn btn-info w-100 mt-2" href="{{ route('clube.list') }}">Voltar</a>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
