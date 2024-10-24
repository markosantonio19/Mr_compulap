<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Servicios</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        .navbar {
            background-color: #212529;
        }

        .navbar-brand, .nav-link {
            color: #ffffff !important;
            font-weight: 600;
        }

        .nav-link.active {
            background-color: #007bff;
            border-radius: 5px;
        }

        .nav-link:hover {
            background-color: #007bff;
            color: #ffffff !important;
        }

        .content-section {
            margin-top: 40px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }

        .service-title {
            font-size: 2.5em;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .service-description {
            color: #495057;
            font-size: 1.2em;
            line-height: 1.6;
        }

        .service-item {
            margin-bottom: 30px;
        }

        .service-item img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MR Compulap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('index') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('productos') }}">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('servicios') }}">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Sección de Servicios -->
        <div class="content-section text-center">
            <h2 class="service-title">Nuestros Servicios</h2>
            <p class="service-description">Ofrecemos una amplia gama de servicios para satisfacer tus necesidades tecnológicas.</p>
            <div class="row">
                <div class="col-md-4 service-item">
                    <img src="https://via.placeholder.com/400x300" alt="Servicio de Reparación">
                    <h4>Reparación de Laptops y PC</h4>
                    <p>Servicio completo de reparación que incluye cambios de piezas, reparación de placa madre y más.</p>
                </div>
                <div class="col-md-4 service-item">
                    <img src="https://via.placeholder.com/400x300" alt="Servicio de Mantenimiento">
                    <h4>Mantenimiento Preventivo</h4>
                    <p>Mantenemos tu equipo funcionando de manera óptima con limpiezas y ajustes preventivos.</p>
                </div>
                <div class="col-md-4 service-item">
                    <img src="https://via.placeholder.com/400x300" alt="Instalación de Software">
                    <h4>Instalación de Software</h4>
                    <p>Instalamos el sistema operativo y otros programas necesarios para mantener tu equipo actualizado.</p>
                </div>
            </div>
            <button class="btn btn-primary mt-4">Ver Más Servicios</button>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
