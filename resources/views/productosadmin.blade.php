<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Productos - Mr. Compulap</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #e9ecef;
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar-brand, .nav-link {
            color: white !important;
            font-weight: bold;
        }
        .container {
            background-color: white;
            padding: 2.5rem;
            border-radius: 10px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.15);
            margin-top: 2rem;
        }
        h1 {
            color: #343a40;
            font-weight: 700;
            margin-bottom: 2rem;
            text-align: center;
        }
        #btnMostrarFormulario {
            background-color: #28a745;
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }
        #btnMostrarFormulario:hover {
            background-color: #218838;
        }
        #formularioAgregar {
            display: none;
            margin-top: 2rem;
        }
        .form-group label {
            font-weight: bold;
            color: #495057;
        }
        .form-control {
            border-radius: 8px;
        }
        button[type="submit"] {
            background-color: #007bff;
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            color: white;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        footer {
            margin-top: 3rem;
            padding: 1.5rem;
            background-color: #007bff;
            color: white;
            text-align: center;
        }
        .alert {
            margin-top: 1rem;
            border-radius: 8px;
        }
        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .product-card {
            background-color: #fff;
            border: none;
            border-radius: 10px;
            padding: 1rem;
            margin: 1.5rem;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 18rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .product-card img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 1rem;
        }
        .product-card h5 {
            color: #007bff;
            font-weight: bold;
            font-size: 1.25rem;
        }
        .product-card p {
            color: #666;
            margin-bottom: 0.5rem;
        }
        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
        }
        .btn-product {
            margin: 0.25rem;
        }
        .search-bar input {
            padding: 0.75rem;
            border-radius: 10px;
            border: 1px solid #ced4da;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{ route('home') }}">Mr. Compulap</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('productosadmin') }}">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('serviciosadmin') }}">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ventas') }}">Ventas</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    
    <main class="container mt-4">
        <h1>Agregar Productos</h1>
        <button class="btn btn-primary mb-3" id="btnMostrarFormulario">Agregar Producto</button>

        <!-- Mensajes de éxito o error -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('productosagregar') }}" method="POST" enctype="multipart/form-data" id="formularioAgregar">
    @csrf <!-- Token de seguridad -->
    <div class="form-group">
        <label for="nombre">Nombre del producto:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre del producto" required>
    </div>
    <div class="form-group">
        <label for="precio">Precio:</label>
        <input type="number" class="form-control" id="precio" name="precio" placeholder="Ingresa el precio del producto" required step="0.01">
    </div>
    <div class="form-group">
        <label for="stock">Stock:</label>
        <input type="number" class="form-control" id="stock" name="stock" placeholder="Ingresa la cantidad en stock" required>
    </div>
    <div class="form-group">
        <label for="descripcion">Descripción:</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Ingresa una descripción del producto"></textarea>
    </div>
    <div class="form-group">
        <label for="imagen">Imagen:</label>
        <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
    </div>

    <button type="submit" class="btn btn-success">Agregar Producto</button>
</form>


        <!-- Buscador de productos -->
        <div class="search-bar mt-4">
            <input type="text" class="form-control" id="buscador" placeholder="Buscar productos...">
        </div>

        <!-- Contenedor de productos -->
        <h2 class="mt-5">Lista de Productos</h2>
        <div class="product-container" id="productContainer">
            @forelse($productos as $producto)
                <div class="product-card" data-id="{{ $producto->id }}">
                    <img src="{{ asset('storage/' . $producto->imagen) }}" alt="Imagen de {{ $producto->nombre }}">
                    <h5>{{ $producto->nombre }}</h5>
                    <p>Precio: S/ {{ $producto->precio }}</p>
                    <p>Stock: {{ $producto->stock }}</p>
                    <p>{{ $producto->descripcion }}</p>
                    <button class="btn btn-warning btn-product" onclick="editarProducto({{ $producto->id }})">Editar</button>
                    <button class="btn btn-danger btn-product" onclick="eliminarProducto({{ $producto->id }})">Eliminar</button>
                </div>
            @empty
                <p>No hay productos agregados aún.</p>
            @endforelse
        </div>

        <script>
            function eliminarProducto(productId) {
                if (confirm("¿Estás seguro de que deseas eliminar este producto?")) {
                    fetch(`/eliminarProducto/${productId}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json',
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        alert(data.message);
                        if (data.success) {
                            document.querySelector(`[data-id="${productId}"]`).remove();
                        }
                    });
                }
            }

            function editarProducto(productId) {
                // Lógica para editar el producto (puedes implementar un modal o redirigir a otra página)
                alert(`Editar producto con ID: ${productId}`);
            }

            document.getElementById('btnMostrarFormulario').onclick = function() {
                const formulario = document.getElementById('formularioAgregar');
                formulario.style.display = formulario.style.display === 'none' ? 'block' : 'none';
            };

            // Lógica para buscar productos
            document.getElementById('buscador').addEventListener('keyup', function() {
                const filter = this.value.toLowerCase();
                const products = document.querySelectorAll('.product-card');
                products.forEach(product => {
                    const name = product.querySelector('h5').textContent.toLowerCase();
                    product.style.display = name.includes(filter) ? 'block' : 'none';
                });
            });
        </script>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Mr. Compulap. Todos los derechos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
