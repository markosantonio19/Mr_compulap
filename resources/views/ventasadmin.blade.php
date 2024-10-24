<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas - Admin - Mr. Compulap</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Incluye tu CSS -->
    <!-- Agregar Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('home') }}">Mr. Compulap</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
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
        <h1>Ventas - Administración</h1>
        <p>Aquí puedes gestionar las ventas de productos y servicios.</p>
        
        <!-- Aquí podrías incluir una tabla de ventas, gráficos, o formularios para administrar las ventas -->
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Cliente</th>
                    <th>Cantidad</th>
                    <th>Precio Total</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Laptop XYZ</td>
                    <td>Juan Pérez</td>
                    <td>1</td>
                    <td>S/ 2500</td>
                    <td>2024-10-20</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Impresora ABC</td>
                    <td>María Gómez</td>
                    <td>2</td>
                    <td>S/ 1200</td>
                    <td>2024-10-21</td>
                </tr>
                <!-- Agrega más filas según sea necesario -->
            </tbody>
        </table>
    </main>

    <footer class="text-center mt-4">
        <p>&copy; {{ date('Y') }} Mr. Compulap. Todos los derechos reservados.</p>
    </footer>

    <!-- Agregar Bootstrap JS y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
