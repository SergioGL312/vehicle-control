<?php 
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ./login/FAcceso.php');
    }
    if ($_SESSION['rol'] == 'U') {
        header('Location: ./login/menu.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <title>Propietarios</title>
</head>

<body>
    <header class="p-3" style="background: #1f1f1f;">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white" style="font-size: 30px;">Propietarios</a>
                    </li>
                </ul>
                <div class="text-end">
                    <button type="button" class="btn btn-danger" id="back-home"
                        style="width: 80px; padding-left: 10px;">Regresar</button>
                </div>
            </div>
        </div>
    </header>

    <div class="p-5 m-0 border-0">
        <form class="row g-3" method="post" action="./Insert/IPropietarios.php">
            <div class="col-md-3">
                <label class="form-label" for="">Nombre</label>
                <input class="form-control border border-2" type="text" id="nombre" name="nombre" minlength="1"
                    maxlength="50">
            </div>

            <div class="col-md-4">
                <label class="form-label" for="">Apellido Paterno</label>
                <input class="form-control border border-2" type="text" id="apellido_paterno" name="apellido_paterno"
                    minlength="1" maxlength="50">
            </div>

            <div class="col-md-4">
                <label class="form-label" for="">Apellido Materno</label>
                <input class="form-control border border-2" type="text" id="apellido_materno" name="apellido_materno"
                    minlength="1" maxlength="50">
            </div>

            <div class="col-md-3">
                <label class="form-label" for="">Localidad</label>
                <input class="form-control border border-2" type="text" id="localidad" name="localidad" minlength="1"
                    maxlength="50">
            </div>

            <div class="col-md-3">
                <label class="form-label" for="">Municipio</label>
                <input class="form-control border border-2" type="text" id="municipio" name="municipio" minlength="1"
                    maxlength="50">
            </div>

            <div class="col-md-3">
                <label class="form-label" for="">RFC</label>
                <input class="form-control border border-2" type="text" id="rfc" name="rfc" minlength="1"
                    maxlength="13">
            </div>

            <div class="col-12 p-4" style="text-align: center;">
                <input type="submit" class="form_input submit_radius btn btn-success center"
                    style="padding-left: 50px; padding-right: 50px;">
            </div>
        </form>
    </div>

    <script src="./Javascripts/backHome.js"></script>
</body>

</html>