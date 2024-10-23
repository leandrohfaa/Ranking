<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Títulos</title>
</head>




<body>
    <div class="container p-3">
        <div class="flex justify-content-center text-center">
           <h2>Seu titulo da pagina aqui</h2>
        </div>
        <div class="row">
            <div class="col-12 bg-light rounded border shadow-lg p-3">
                <form action="{{ route('titulo.form.post') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="clube" class="form-label">Selecione o Clube:</label>
                        <select class="form-control" id="clube" name="clube_id" required>
                            <option value="">Selecione um clube</option>
                            @foreach ($clubes as $clube)
                                <option value="{{ $clube->id }}">{{ $clube->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="competicao" class="form-label">Selecione a Competição:</label>
                        <select class="form-control" id="competicao" name="competicao_id" required>
                            <option value="">Selecione uma competição</option>
                            @foreach ($competicoes as $competicao)
                                <option value="{{ $competicao->id }}">{{ $competicao->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <?php $years = range(1900, strftime('%Y', time())); ?>
                    <div class="form-group">
                        <label for="ano" class="form-label">Ano:</label>
                        <select class="form-control" id="ano" name="ano" required>
                            <option>Select Year</option>
                            <?php foreach($years as $year) : ?>
                            <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-success">Adicionar Título</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
