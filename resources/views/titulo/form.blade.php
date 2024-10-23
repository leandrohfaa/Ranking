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
                <option value="{{ $competicao->id }}">{{ $competicao->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="ano" class="form-label">Ano:</label>
        <input type="number" class="form-control" id="ano" name="ano" required min="1900" max="{{ date('Y') }}">
    </div>

    <div class="form-group">
        <label for="pontuacao" class="form-label">Pontuação:</label>
        <input type="number" class="form-control" id="pontuacao" name="pontuacao" required>
    </div>

    <button type="submit" class="btn btn-success">Adicionar Título</button>
</form>


<body>
    
</body>
</html>