<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clubes</title>
</head>

<body>
    <div class="container text-center">
        <br>
        <div class="btn-group">
            <a class="btn btn-success btn-lg" href="{{ route('competicao.create') }}">+ Competições</a>
            <a class="btn btn-info btn-lg" href="{{ route('index.list') }}">⬅️Voltar</a>
        </div>
        <br>
    </div>

    <style>
        .btn-group {
            display: flex;
            justify-content: center;
            gap: 30px;
            /* Define um espaço consistente entre os botões */
        }

        .btn-group .btn {
            padding: 15px 30px;
            /* Ajuste de padding para tornar os botões mais robustos */
            font-family: 'Poppins', sans-serif;
            /* Fonte moderna */
            font-size: 16px;
            /* Tamanho de fonte */
            font-weight: 600;
            /* Negrito */
            border-radius: 5px;
            /* Cantos arredondados */
            transition: background-color 0.3s ease, transform 0.2s ease;
            /* Transição suave para hover */
        }

        /* Efeito de hover para melhorar a interatividade */
        .btn:hover {
            background-color: #007bff;
            /* Muda a cor ao passar o mouse */
            color: white;
            /* Cor do texto */
            opacity: 0.9;
            transform: translateY(-2px);
            /* Leve efeito de flutuação ao passar o mouse */
        }

        /* Efeito para tornar os botões mais dinâmicos */
        .btn:active {
            transform: translateY(0);
            /* Volta ao estado normal ao clicar */
        }

        /* Adicione um efeito de sombra sutil */
        .btn {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Sombra sutil */
        }

        .btn:focus {
            outline: none;
            /* Remove o contorno padrão */
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
            /* Sombra ao focar */
        }
    </style>
</body>

</body>
<div class="container">
    <table class="table table-striped table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col" class="text-center">Id</th>
                <th scope="col" class="text-center">Competição</th>
                <th scope="col" class="text-center">Pontos</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($competicoes as $competicao)
                <tr>
                    <th scope="row" class="text-center">{{ $competicao->id }}</th>
                    <td>{{ $competicao->nome }}</td>
                    <td class="text-center">
                        {{ $competicao->pontuacao }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>

</body>

</html>
