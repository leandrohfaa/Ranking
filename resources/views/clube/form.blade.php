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
<form method="POST" action="{{route("clube.form.post")}}">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Nome do Clube</label>
      <input type="Clube" class="form-control" id="clube" aria-describedby="clube" name="clube">
      <div id="clube" class="form-text">obs  Apenas clubes Brasileiros.</div>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>
<body>
    
</body>
</html>