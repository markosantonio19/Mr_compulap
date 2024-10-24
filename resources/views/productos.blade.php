<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Productos</title>

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

        .product-title {
            font-size: 2.5em;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .product-description {
            color: #495057;
            font-size: 1.2em;
            line-height: 1.6;
        }

        .product-item {
            margin-bottom: 30px;
        }

        .product-item img {
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
                        <a class="nav-link active" href="{{ route('productos') }}">Productos</a>
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
        <!-- Sección de Productos -->
        <div class="content-section text-center">
            <h2 class="product-title">Nuestros Productos</h2>
            <p class="product-description">Explora nuestra variedad de productos tecnológicos, desde laptops hasta componentes y accesorios.</p>
            <div class="row">
                <div class="col-md-4 product-item">
                    <img src="https://via.placeholder.com/400x300" alt="Producto 1">
                    <h4>Producto 1</h4>
                    <p>Descripción breve del producto 1.</p>
                </div>
                <div class="col-md-4 product-item">
                    <img src="https://via.placeholder.com/400x300" alt="Producto 2">
                    <h4>Producto 2</h4>
                    <p>Descripción breve del producto 2.</p>
                </div>
                <div class="col-md-4 product-item">
                    <img src="https://via.placeholder.com/400x300" alt="Producto 3">
                    <h4>Producto 3</h4>
                    <p>Descripción breve del producto 3.</p>
                </div>
            </div>
            <button class="btn btn-primary mt-4">Ver Más Productos</button>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
