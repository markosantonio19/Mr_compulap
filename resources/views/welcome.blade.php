<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MR Compulap</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #212529;
        }

        .navbar-brand,
        .nav-link {
            color: #ffffff !important;
            font-weight: 600;
        }

        .nav-link.active {
            background-color: #007bff;
            border-radius: 5px;
        }

        .nav-link:hover {
            background-color: #0056b3;
            color: #ffffff !important;
        }

        .content-section {
            margin-top: 40px;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .content-section:hover {
            transform: translateY(-5px);
        }

        .about-section {
            margin-top: 40px;
            padding: 30px;
            background-color: #e9ecef;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .about-title {
            color: #343a40;
            font-size: 2.5em;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .about-text {
            color: #495057;
            font-size: 1.2em;
            line-height: 1.6;
        }

        .vision-title {
            font-weight: bold;
            margin-top: 20px;
            color: #007bff;
        }

        .vision-text {
            margin-top: 10px;
        }

        .about-image {
            max-width: 100%;
            border-radius: 8px;
            margin-top: 20px;
        }

        .services-section {
            margin-top: 40px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .service-item {
            margin-bottom: 30px;
            transition: transform 0.3s;
        }

        .service-item:hover {
            transform: scale(1.05);
        }

        .service-item img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .service-description {
            margin-top: 15px;
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

        .contact-info {
            background-color: #f1f1f1;
            padding: 20px;
            border-radius: 8px;
            margin-top: 40px;
        }

        .contact-info h4 {
            margin-bottom: 10px;
        }

        .btn-contact {
            background-color: #28a745;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-contact:hover {
            background-color: #218838;
        }

        .footer {
            background-color: #212529;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
            margin-top: 40px;
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
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('productos') }}">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('servicios') }}">Servicios</a>
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
        <!-- Sección de Bienvenida -->
        <div class="content-section text-center">
            <h2>¡Bienvenidos a Mr. Compulap!</h2>
            <p>Somos Mr. Compulap, un negocio a domicilio y tienda física. Con servicio técnico de equipos tecnológicos
                (instalación de Windows, videojuegos, reparación de placa madre), comercialización de partes de laptops
                y PC.</p>
                <a href="{{ route('productos') }}" class="btn btn-primary">Ver Productos</a>
                </div>

        <!-- Sección Quiénes Somos -->
        <div class="about-section">
            <h2 class="about-title">¿QUIÉNES SOMOS?</h2>
            <p class="about-text">
                Mr. Compulap es un negocio dedicado a la comercialización de laptops y equipos informáticos relacionados,
                así como a ofrecer servicios técnicos de laptops, computación e impresoras. Actualmente, tenemos
                presencia en el mercado regional y contamos con la capacidad para ofrecer las mejores soluciones y
                servicios para laptops y computadoras, respaldados por el mejor equipo profesional del área de
                informática.
            </p>
            <div class="text-center">
    <img src="{{ asset('imagenes/logo.jpg') }}" alt="Imagen de nuestro equipo" class="about-image img-fluid w-50">
</div>
            <h3 class="vision-title">Visión</h3>
            <p class="vision-text about-text">
                Seremos el negocio más exitoso en la venta de productos para mejorar su experiencia, siendo la mejor
                opción en el mercado.
            </p>
        </div>

        <!-- Sección de Servicios -->
        <div class="services-section">
            <h2 class="text-center">Nuestros Servicios</h2>
            <div class="row">
                <div class="col-md-4 service-item">
                    <img src="{{ asset('imagenes/reparacion.jpg') }}" alt="Servicio de Reparación">
                    <div class="service-description">
                        <h4>Reparación de Laptops y PC</h4>
                        <p>Ofrecemos un servicio completo de reparación de laptops y computadoras, incluyendo cambios de
                            piezas, reparación de placa madre y mucho más.</p>
                    </div>
                </div>
                <div class="col-md-4 service-item">
                    <img src="{{ asset('imagenes/mantenimiento.png') }}" alt="Servicio de Mantenimiento">
                    <div class="service-description">
                        <h4>Mantenimiento Preventivo</h4>
                        <p>Nuestro equipo se encarga de mantener tu equipo funcionando de manera óptima, realizando
                            limpiezas y ajustes preventivos.</p>
                    </div>
                </div>
                <div class="col-md-4 service-item">
                    <img src="{{ asset('imagenes/instalacion.jpg') }}" alt="Instalación de Software">
                    <div class="service-description">
                        <h4>Instalación de Software</h4>
                        <p>Instalamos el sistema operativo Windows y otros programas que necesites para mantener tu equipo
                            actualizado.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección de Contacto -->
        <div class="contact-info text-center">
            <h4>¿Cómo contactarnos?</h4>
            <p>Teléfono: (062) 606295</p>
            <p>Móvil: 920 950 117</p>
            <button class="btn btn-contact">Contáctanos</button>
        </div>
    </div>

    <footer class="footer">
        <p>© 2024 MR Compulap. Todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
