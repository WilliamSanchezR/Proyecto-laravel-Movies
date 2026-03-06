<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineHub - Películas</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #e50914;
            --dark-bg: #141414;
            --darker-bg: #0a0a0a;
            --card-bg: #1f1f1f;
            --text-primary: #ffffff;
            --text-secondary: #b3b3b3;
            --hover-color: #f40612;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, var(--darker-bg) 0%, var(--dark-bg) 100%);
            color: var(--text-primary);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navbar Styles */
        .cinema-navbar {
            background: rgba(10, 10, 10, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(229, 9, 20, 0.2);
            padding: 1rem 0;
            box-shadow: 0 4px 20px rgba(229, 9, 20, 0.1);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            color: var(--primary-color) !important;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .navbar-brand:hover {
            color: var(--hover-color) !important;
            transform: scale(1.05);
        }

        .nav-link {
            color: var(--text-primary) !important;
            font-weight: 500;
            margin: 0 0.5rem;
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: width 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Container */
        .main-container {
            flex: 1;
            padding: 2rem 0;
            min-height: calc(100vh - 180px);
        }

        /* Cards */
        .content-card {
            background: var(--card-bg);
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .content-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(229, 9, 20, 0.2);
        }

        /* Buttons */
        .btn-primary {
            background: var(--primary-color);
            border: none;
            padding: 0.6rem 1.5rem;
            font-weight: 600;
            border-radius: 6px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(229, 9, 20, 0.3);
        }

        .btn-primary:hover {
            background: var(--hover-color);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(229, 9, 20, 0.5);
        }

        .btn-warning {
            background: #ffa500;
            border: none;
            color: white;
            font-weight: 500;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .btn-warning:hover {
            background: #ff8c00;
            transform: translateY(-2px);
        }

        .btn-info {
            background: #008CBA;
            border: none;
            color: white;
            font-weight: 500;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .btn-info:hover {
            background: #007399;
            transform: translateY(-2px);
        }

        .btn-danger {
            background: #dc3545;
            border: none;
            font-weight: 500;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .btn-danger:hover {
            background: #c82333;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: #6c757d;
            border: none;
            font-weight: 500;
            border-radius: 6px;
        }

        .btn-secondary:hover {
            background: #5a6268;
        }

        /* Tables */
        .table {
            background: transparent;
            color: var(--text-primary);
            border-radius: 0;
            overflow: visible;
            box-shadow: none;
            margin-bottom: 0;
        }

        .table thead {
            background: transparent;
            border-bottom: 2px solid rgba(229, 9, 20, 0.3);
        }

        .table thead th {
            color: #ffffff;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 1px;
            padding: 1rem;
            border: none;
            background: transparent;
        }

        .table tbody tr {
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.3s ease;
            background: transparent;
        }

        .table tbody tr:hover {
            background: rgba(229, 9, 20, 0.03);
        }

        .table tbody td {
            padding: 1rem;
            vertical-align: middle;
            border: none;
            background: transparent;
            color: #ffffff;
        }

        /* Ensure text elements in tables are white */
        .table td strong,
        .table td span:not(.badge) {
            color: #ffffff;
        }

        /* Table buttons in actions column */
        .table .btn-sm {
            padding: 0.4rem 0.8rem;
            font-size: 0.875rem;
            white-space: nowrap;
        }

        /* Improved hover for buttons inside tables */
        .table .btn-info:hover {
            background: #0099cc;
            transform: none;
            box-shadow: 0 0 15px rgba(0, 140, 186, 0.5);
        }

        .table .btn-warning:hover {
            background: #ffb733;
            transform: none;
            box-shadow: 0 0 15px rgba(255, 165, 0, 0.5);
        }

        .table .btn-danger:hover {
            background: #e04555;
            transform: none;
            box-shadow: 0 0 15px rgba(220, 53, 69, 0.5);
        }

        .table td form {
            display: inline-block;
            margin: 0;
        }

        /* Responsive table wrapper */
        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        @media (max-width: 768px) {
            .table td, .table th {
                padding: 0.75rem 0.5rem;
                font-size: 0.875rem;
            }

            .table .btn-sm {
                padding: 0.3rem 0.6rem;
                font-size: 0.8rem;
                margin-bottom: 0.25rem;
            }
        }

        /* Forms */
        .form-label {
            color: var(--text-primary);
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .form-control, .form-select {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #ffffff;
            border-radius: 8px;
            padding: 0.75rem;
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            background: rgba(255, 255, 255, 0.08);
            border-color: var(--primary-color);
            color: #ffffff;
            box-shadow: 0 0 0 0.2rem rgba(229, 9, 20, 0.25);
        }

        /* Select options styling */
        .form-select option {
            background: #1a1a1a;
            color: #ffffff;
            padding: 0.5rem;
        }

        .form-select option:checked,
        .form-select option:hover {
            background: var(--primary-color);
            color: #ffffff;
        }

        /* Headings */
        h1, h2, h3, h4, h5, h6 {
            color: var(--text-primary);
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        h1 {
            font-size: 2.5rem;
            background: linear-gradient(135deg, var(--primary-color), var(--hover-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Alerts */
        .alert {
            border-radius: 8px;
            border: none;
        }

        .alert-danger {
            background: rgba(220, 53, 69, 0.1);
            color: #ff6b6b;
            border-left: 4px solid #dc3545;
        }

        .alert-success {
            background: rgba(40, 167, 69, 0.1);
            color: #51cf66;
            border-left: 4px solid #28a745;
        }

        /* Footer */
        .cinema-footer {
            background: rgba(10, 10, 10, 0.95);
            border-top: 1px solid rgba(229, 9, 20, 0.2);
            padding: 1.5rem 0;
            margin-top: auto;
            text-align: center;
        }

        .cinema-footer p {
            margin: 0;
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: var(--darker-bg);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--hover-color);
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .main-container > * {
            animation: fadeIn 0.6s ease;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg cinema-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">🎬 CineHub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    style="background: var(--primary-color); border: none;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/peliculas') }}">Películas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/categorias') }}">Categorías</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container main-container">
        @yield('content')
    </div>

    <footer class="cinema-footer">
        <p>&copy; {{ date('Y') }} CineHub. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>