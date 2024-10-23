<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Títulos</title>

    <!-- Adicionando Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            /* Cor de fundo suave */
        }

        .hero {
            background-color: #343a40;
            /* Cor do cabeçalho */
            color: white;
            padding: 50px 0;
            text-align: center;
            border-radius: 0 0 15px 15px;
            /* Bordas arredondadas */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Sombra para profundidade */
        }

        .form-container {
            margin-top: 30px;
            /* Margem superior */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Sombra para profundidade */
            border-radius: 15px;
            /* Bordas arredondadas */
            background-color: #ffffff;
            /* Fundo branco */
            padding: 20px;
            /* Padding interno */
        }

        .btn-custom {
            border-radius: 25px;
            /* Bordas arredondadas para o botão */
            transition: background-color 0.3s;
            /* Transição suave para o fundo */
        }

        .btn-success-custom {
            background-color: #28a745;
        }

        .btn-info-custom {
            background-color: #17a2b8;
        }

        .btn-custom:hover {
            filter: brightness(90%);
            /* Efeito de hover em ambos os botões */
        }
    </style>
</head>

<body>
    <header class="hero">
        <div class="container">
            <h1>Adicionar Título ao Clube</h1>
        </div>
    </header>

    <div class="container p-3">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-6 form-container">
                    <form action="{{ route('titulo.form.post') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="clube" class="form-label">Selecione o Clube:</label>
                            <select class="form-control" id="clube" name="clube_id" required>
                                <option value="">-----</option>
                                @foreach ($clubes as $clube)
                                    <option value="{{ $clube->id }}">{{ $clube->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="competicao" class="form-label">Selecione a Competição:</label>
                            <select class="form-control" id="competicao" name="competicao_id" required>
                                <option value="">-----</option>
                                @foreach ($competicoes as $competicao)
                                    <option value="{{ $competicao->id }}">{{ $competicao->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <?php $years = range(1900, strftime('%Y', time())); ?>
                        <div class="mb-3">
                            <label for="ano" class="form-label">Ano:</label>
                            <select class="form-control" id="ano" name="ano" required>
                                <option>-----</option>
                                <?php foreach($years as $year) : ?>
                                <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mt-3">
                            <button type="submit"
                                class="btn btn-success btn-custom btn-success-custom btn-sm w-100">Adicionar
                                Título</button>
                            <a class="btn btn-info btn-custom btn-info-custom btn-sm w-100 mt-2"
                                href="{{ route('index.list') }}">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Adicionando Bootstrap JS e dependências -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
