<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runawey - Administración</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background: #f8f9fa; }
        .sidebar { min-height: 100vh; background: #212529; color: #fff; }
        .sidebar a { color: #fff; text-decoration: none; display: block; padding: 1rem; }
        .sidebar a.active, .sidebar a:hover { background: #0d6efd; color: #fff; }
        .sidebar .nav-icon { margin-right: 8px; }
        .content { padding: 2rem; }
        .navbar { background: #fff; }
    </style>
</head>
<body>
    <div class="d-flex">
        <nav class="sidebar flex-shrink-0 p-3">
            <a href="/dashboard" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto">
                <span class="fs-4"><i class="fa-solid fa-bus"></i> Runawey</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li><a href="/dashboard" class="nav-link"><i class="fa-solid fa-house nav-icon"></i> Dashboard</a></li>
                <li><a href="/buses" class="nav-link"><i class="fa-solid fa-bus nav-icon"></i> Buses</a></li>
                <li><a href="/paradas" class="nav-link"><i class="fa-solid fa-location-dot nav-icon"></i> Paradas</a></li>
                <li><a href="/rutas" class="nav-link"><i class="fa-solid fa-road nav-icon"></i> Rutas</a></li>
                <li><a href="/flota" class="nav-link"><i class="fa-solid fa-clipboard-list nav-icon"></i> Flota</a></li>
                <li><a href="/conductores" class="nav-link"><i class="fa-solid fa-id-card nav-icon"></i> Conductores</a></li>
                <li><a href="/usuarios" class="nav-link"><i class="fa-solid fa-users nav-icon"></i> Usuarios</a></li>
                <li><a href="/reportes" class="nav-link"><i class="fa-solid fa-file-lines nav-icon"></i> Reportes</a></li>
                <li><a href="/notificaciones" class="nav-link"><i class="fa-solid fa-bell nav-icon"></i> Notificaciones</a></li>
                <li><a href="/viajes" class="nav-link"><i class="fa-solid fa-map-location-dot nav-icon"></i> Viajes</a></li>
            </ul>
        </nav>
        <div class="content flex-grow-1">
            @yield('content')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>
