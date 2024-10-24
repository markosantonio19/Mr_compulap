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
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
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

        .search-box {
            margin-bottom: 20px;
        }

        .product-item {
            margin-bottom: 30px;
            transition: transform 0.3s;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            overflow: hidden;
            padding: 15px;
            background-color: #ffffff;
        }

        .product-item:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .product-item img {
            width: 100%;
            height: 150px; /* Altura ajustada para mejorar el diseño */
            object-fit: cover; /* Para ajustar la imagen sin distorsión */
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

        .product-price {
            font-size: 1.5em;
            color: #28a745; /* Color verde para el precio */
            font-weight: bold;
        }

        .product-stock {
            font-size: 1em;
            color: #dc3545; /* Color rojo para el stock bajo */
            margin-bottom: 10px;
        }

        .btn-comprar {
            background-color: #ffc107; /* Color amarillo para el botón Comprar */
            border: none;
        }

        .btn-comprar:hover {
            background-color: #e0a800; /* Color más oscuro al pasar el ratón */
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
            <div class="search-box">
                <input type="text" id="searchInput" class="form-control" placeholder="Buscar productos..." onkeyup="filterProducts()">
            </div>
            <div class="row" id="productList">
                @foreach($productos as $producto)
                    <div class="col-md-4 product-item">
                        <img src="{{ asset('storage/' . $producto->imagen) }}" alt="{{ $producto->nombre }}">
                        <h4>{{ $producto->nombre }}</h4>
                        <p class="product-description">{{ $producto->descripcion }}</p>
                        <p class="product-price">S/ {{ number_format($producto->precio, 2) }}</p>
                        <p class="product-stock">Stock: {{ $producto->stock }} unidades</p>
                        <button class="btn btn-comprar">Comprar</button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function filterProducts() {
            const input = document.getElementById('searchInput');
            const filter = input.value.toLowerCase();
            const productList = document.getElementById('productList');
            const products = productList.getElementsByClassName('product-item');

            for (let i = 0; i < products.length; i++) {
                const productName = products[i].getElementsByTagName("h4")[0].innerText.toLowerCase();
                if (productName.includes(filter)) {
                    products[i].style.display = ""; // Muestra el producto
                } else {
                    products[i].style.display = "none"; // Oculta el producto
                }
            }
        }
    </script>
</body>
</html>
