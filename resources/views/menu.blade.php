<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menú de Navegación</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Menú</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Inicio</a>
                    </li>

                    <!-- Menú desplegable de Ubicación -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="ubicacionDropdown" role="button" data-bs-toggle="dropdown">
                            Ubicación
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/comunas">Comunas</a></li>
                            <li><a class="dropdown-item" href="/municipios">Municipios</a></li>
                            <li><a class="dropdown-item" href="/departamento s">Departamentos</a></li>
                            <li><a class="dropdown-item" href="/paises">Países</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container mt-4">
        <h1>Bienvenido al Menú de Ubicación</h1>
        <p>Seleccione una opción del menú para explorar Comunas, Municipios, Departamentos o Países.</p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>