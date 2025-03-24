<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Agregar Municipio</title>
  </head>
  <body>
    <div class="container">
       <h1>Agregar Municipio</h1>
            <form method="POST" action="{{route('comunas.store')}}">
                    @csrf
        <div class="mb-3">
            <label for="id" class="form-label">Code</label>
            <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled">
            <div id="idHelp" class="form-text">Municipality code</div>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Municipality</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp"
            placeholder="commune name">
        </div>
        <label for="departament">Departament:</label>
        <select class="form-select" id="departament" name="code" required>
            <option selected disabled value="">Choose one...</option>
            @foreach ($departamentos as $departamentos)
                <option value="{{ $departamento->depa_codi }}">{{ $departamento->depa_nomb }}</option>
            @endforeach
        </select>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('municipios.index') }}" class="btn btn-warning">Cancel</a>
        </div>  
  </body>
</html>