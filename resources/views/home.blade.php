<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mr. Compulap</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        .wrapper {
            display: flex;
            flex: 1;
            flex-wrap: wrap;
        }
        .sidebar {
            width: 250px;
            background-color: #343a40;
            padding: 20px;
            min-height: 100vh;
        }
        .sidebar a {
            color: #fff;
            display: block;
            padding: 10px;
            text-decoration: none;
            font-size: 18px;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            flex: 1;
            padding: 20px;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #f8f9fa;
            padding: 10px;
            border-top: 1px solid #eaeaea;
        }
        /* Media queries para mejorar la responsividad */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                padding: 10px;
                position: relative;
                min-height: auto;
            }
            .content {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <header class="bg-light p-3">
        <h1 class="text-center">Mr. Compulap Dashboard</h1>
    </header>

    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="sidebar">
                    <a href="{{ route('home') }}">Inicio</a>
                    <a href="{{ route('productosadmin') }}">Productos</a>
                    <a href="{{ route('serviciosadmin') }}">Servicios</a>
                    <a href="{{ route('ventas') }}">Ventas</a>
                </div>
            </div>
        </nav>

        <main class="content">
            <h2>Panel Principal</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-white bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Productos</h5>
                            <p class="card-text">Gestión de productos y stock disponible.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-white bg-success">
                        <div class="card-body">
                            <h5 class="card-title">Servicios</h5>
                            <p class="card-text">Monitorea y administra los servicios ofrecidos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-white bg-warning">
                        <div class="card-body">
                            <h5 class="card-title">Ventas</h5>
                            <p class="card-text">Seguimiento y control de ventas realizadas.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sección de gráficos -->
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ventas Mensuales</h5>
                            <canvas id="ventasChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Productos en Inventario</h5>
                            <canvas id="productosChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <footer class="text-center mt-auto py-3 bg-light">
        <p>&copy; {{ date('Y') }} Mr. Compulap. Todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap JS y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de Ventas Mensuales
        var ctx = document.getElementById('ventasChart').getContext('2d');
        var ventasChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
                datasets: [{
                    label: 'Ventas',
                    data: [500, 600, 800, 700, 1000, 900],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Gráfico de Productos en Inventario
        var ctx2 = document.getElementById('productosChart').getContext('2d');
        var productosChart = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Laptop A', 'Laptop B', 'PC Gamer', 'Impresora X', 'Teclado Z'],
                datasets: [{
                    label: 'Cantidad en Inventario',
                    data: [12, 19, 3, 5, 2],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
