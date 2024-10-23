<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking de Clubes</title>
    <!-- Adicionando Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .hero {
            background-color: #343a40;
            color: white;
            padding: 50px 0;
            text-align: center;
            border-radius: 0 0 15px 15px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .btn-custom {
            margin: 5px;
            border-radius: 25px;
        }
        .table-container {
            margin-top: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            overflow: hidden;
        }
    </style>
</head>
<body>

    <header class="hero">
        <div class="container">
            <h1>Bem-vindo ao Ranking de Clubes</h1>
            <p>Maneira simples de mostrar qual o maior clube do Brasil</p>
            <a class="btn btn-info btn-lg btn-custom" href="{{ route('clube.list') }}">⚽Ver Clubes</a>
            <a class="btn btn-primary btn-lg btn-custom" href="{{ route('competicao.list') }}">🎯 Ver Competições</a>
            <a class="btn btn-success btn-lg btn-custom" href="{{ route('titulo.list') }}">🏆 Adicionar Novo Título</a>
        </div>
    </header>

    <div class="container mt-5">
        <h2 class="text-center">Ranking Atual</h2>
        <div class="table-container">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center">Posição</th>
                        <th scope="col">Clube</th>
                        <th scope="col" class="text-center">Títulos</th>
                        <th scope="col" class="text-center">Pontuação</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <!-- Adicionando Bootstrap JS e dependências -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>

