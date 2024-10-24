<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Contacto</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f4f7fa;
        }

        .navbar {
            background-color: #343a40;
        }

        .navbar-brand,
        .nav-link {
            color: #ffffff !important;
            font-weight: 600;
            transition: background-color 0.3s, color 0.3s;
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
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .content-section:hover {
            transform: scale(1.02);
        }

        .contact-title {
            font-size: 2.5em;
            font-weight: bold;
            margin-bottom: 20px;
            color: #343a40;
        }

        .contact-info {
            color: #495057;
            font-size: 1.2em;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .location-title {
            font-size: 1.8em;
            font-weight: bold;
            margin-top: 40px;
            margin-bottom: 20px;
            color: #343a40;
        }

        .map-container {
            margin-top: 20px;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        iframe {
            width: 100%;
            height: 450px;
            border: 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MR Compulap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link" href="{{ route('servicios') }}">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('contacto') }}">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Sección de Contacto -->
        <div class="content-section text-center">
            <h2 class="contact-title">Contacto</h2>
            <p class="contact-info">¿Tienes alguna pregunta o necesitas más información? ¡Estamos aquí para ayudarte!</p>
            <p><strong>Teléfono:</strong> (062) 606295</p>
            <p><strong>Móvil:</strong> 984765906</p>
            <p><strong>Email:</strong> <a href="mailto:contacto@mrcompulap.com">contacto@mrcompulap.com</a></p>

            <!-- Sección de Ubicación -->
            <h3 class="location-title">Ubicación</h3>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14389.79678376874!2d-76.24717635170354!3d-9.927918392779743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91a7c33185aac815%3A0x569c047c81cdcc0e!2sMr.%20CompuLap!5e1!3m2!1ses-419!2spe!4v1729719494851!5m2!1ses-419!2spe"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
