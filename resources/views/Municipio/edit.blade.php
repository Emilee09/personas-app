<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Municipality</title>
  </head>
  <body>
    <div class="container">
       <h1>Edit Municipality </h1>
            <form method="POST" action="{{route('municipios.store')}}">
            @method('put')
            @csrf
        <div class="mb-3">
            <label for="id" class="form-label">Code</label>
            <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled">
            <div id="idHelp" class="form-text">Municipality id </div>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Municipality</label>
            <input type="text" required class="form-control" id="name" placeholder="municipio name"
            name="name" value="{{ $municipio->muni_nomb }}">
        </div>
        <label for="departament">Departament:</label>
        <select class="form-select" id="departament" name="code" required>
            <option selected disabled value="">Choose one...</option>
            @foreach ($departamentos as $departamentos)
                if($departamento->depa_codi == $municipio->depa_codi)
                    <option value="{{ $departamento->depa_codi }}" selected>{{ $departamento->depa_nomb }}</option>
                else
                    <option value="{{ $departamento->depa_codi }}">{{ $departamento->depa_nomb }}</option>
                <option value="{{ $departamento->depa_codi }}">{{ $departamento->depa_nomb }}</option>
            @endforeach
        </select>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('municipios.index') }}" class="btn btn-warning">Cancel</a>
        </div>  
</form>
  </body>
</html>