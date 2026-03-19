<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Empleado</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
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
                        <li><a class="dropdown-item active" href="nuevoempleado.html">Nuevo empleado</a></li>
                        <li><a class="dropdown-item" href="nuevacategoria.html">Nueva categoria</a></li>
                        <li><a class="dropdown-item" href="nuevometodo.html">Nuevo metodo</a></li>
                        <li><a class="dropdown-item" href="historialventas.html">Historial de ventas</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="login.html">Cerrar sesión</a></li>

            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 border p-4 bg-white shadow-sm rounded">

            <p class="text-end fw-bold">02/03/2026</p> <h3 class="text-center mb-5">Registrar empleado</h3> <form>
                <div class="mb-3 row">
                    <label class="col-sm-4 col-form-label fw-bold">Nombre(s):</label> <div class="col-sm-8">
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-4 col-form-label fw-bold">Apellido Paterno:</label> <div class="col-sm-8">
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-4 col-form-label fw-bold">Apellido Materno:</label> <div class="col-sm-8">
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-4 col-form-label fw-bold">Puesto:</label> <div class="col-sm-8">
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-4 col-form-label fw-bold">Correo:</label> <div class="col-sm-8">
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-4 col-form-label fw-bold">Contraseña:</label> <div class="col-sm-8">
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-light border px-5 py-2 fw-bold shadow-sm">Guardar</button> </div>
            </form>

        </div>
    </div>
</div>
<script href="{{ asset('js/bootstrap.min.js') }}" ></script>
</body>
</html>
