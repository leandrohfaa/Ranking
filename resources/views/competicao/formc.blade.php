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
    <title>Formulario</title>
</head>
<div class="container p-3">
<form method="POST" action="{{route("competicao.form.post")}}">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Competição</label>
      <input type="competicao" class="form-control" id="competicao" aria-describedby="competicao" name="competicao">
      <div id="competicao" class="form-text">obs : Apenas competições disputadas por Brasileiros.</div>
      <br>
      <label for="pontuacao" class="form-label">Pontuação</label>
      <input type="number" class="form-control" id="pontuacao" name="pontuacao" min="0" step="1" aria-describedby="pontuacao" required>
    </br>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
</div>
<body>
    
</body>
</html>