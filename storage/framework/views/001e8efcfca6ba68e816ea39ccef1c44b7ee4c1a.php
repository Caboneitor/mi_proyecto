<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Historial de Ventas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container-fluid">
        <a href="#" class="navbar-brand"><img src="img/logomv.png" width="50px" height="50px" alt=""></a>
        <a class="navbar-brand fw-bold" href="#">MokaVila</a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Empleado
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="nuevaventa.html">Registrar venta</a></li>
                        <li><a class="dropdown-item" href="nuevoenalmacen.html">Agregar al almacén</a></li>
                        <li><a class="dropdown-item" href="almacen.html">Almacén</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Jefe
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="nuevoproducto.html">Nuevo producto</a></li>
                        <li><a class="dropdown-item" href="nuevoempleado.html">Nuevo empleado</a></li>
                        <li><a class="dropdown-item" href="nuevacategoria.html">Nueva categoria</a></li>
                        <li><a class="dropdown-item" href="nuevometodo.html">Nuevo metodo</a></li>
                        <li><a class="dropdown-item active" href="historialventas.html">Historial de ventas</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="login.html">Cerrar sesión</a></li>

            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="bg-white border p-4 shadow-sm rounded">
        <h3 class="text-center mb-4">Historial General de Ventas</h3>

        <div class="table-responsive">
            <table class="table table-hover border">
                <thead class="table-secondary">
                <tr>
                    <th>Folio</th>
                    <th>Fecha</th>
                    <th>Atendido por</th>
                    <th>Productos (Detalle)</th>
                    <th>Total</th>
                    <th>Pago</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>#001</td>
                    <td>04/03/2026</td>
                    <td>Empleado 1</td>
                    <td>2x Pay de Limón, 1x Café</td>
                    <td>$185.00</td>
                    <td><span class="badge bg-primary">Efectivo</span></td>
                </tr>
                <tr>
                    <td>#002</td>
                    <td>04/03/2026</td>
                    <td>Empleado 1</td>
                    <td>1x Rebanada Pastel</td>
                    <td>$65.00</td>
                    <td><span class="badge bg-info text-dark">Tarjeta</span></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script href="<?php echo e(asset('js/bootstrap.min.js')); ?>" ></script>
</body>
</html>
<?php /**PATH C:\proyecto1laravel\mi_proyecto\resources\views/ejemplo2.blade.php ENDPATH**/ ?>