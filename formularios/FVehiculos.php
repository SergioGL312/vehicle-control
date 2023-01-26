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
    <title>Document</title>
</head>

<body>
    <header class="p-3" style="background: #1f1f1f;">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white" style="font-size: 30px;">Vehiculos</a>
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
        <form class="row g-3" method="get" action="./Insert/IVehiculos.php">
            <div class="col-md-2">
                <label class="form-label" for="">NIV</label>
                <input class="form-control border border-2" type="number" id="niv" name="niv">
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">Tipo</label>
                <input class="form-control border border-2" type="text" id="tipo" name="tipo" minlength="1" maxlength="30">
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">Marca</label>
                <input class="form-control border border-2" type="text" id="marca" name="marca" minlength="1" maxlength="30">
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">Modelo</label>
                <input class="form-control border border-2" type="text" id="modelo" name="modelo" minlength="1" maxlength="30">
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">Numero de Serie</label>
                <input class="form-control border border-2" type="text" id="numero_serie" name="numero_serie" minlength="1" maxlength="30">
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">Clase</label>
                <input class="form-control border border-2" type="text" id="clase" name="clase" minlength="1" maxlength="30">
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">Tipo de Combustible</label>
                <input class="form-control border border-2" type="text" id="tipo_combustible" name="tipo_combustible" minlength="1" maxlength="30">
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">Numero de Cilindros</label>
                <input class="form-control border border-2" type="text" id="numero_cilindros" name="numero_cilindros" minlength="1" maxlength="30">
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">Caballos de Fuerza</label>
                <input class="form-control border border-2" type="number" id="caballos_fuerza" name="caballos_fuerza">
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">Tipo de Carroceria</label>
                <input class="form-control border border-2" type="text" id="tipo_carroceria" name="tipo_carroceria" minlength="1" maxlength="30">
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">Color</label>
                <input class="form-control border border-2" type="text" id="color" name="color" minlength="1" maxlength="30">
            </div>


            <div class="col-md-2">
                <label class="form-label" for="">Transmision</label>
                <input class="form-control border border-2" type="text" id="transmision" name="transmision" minlength="1" maxlength="30">
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">Serie de Motor</label>
                <input class="form-control border border-2" type="number" id="serie_motor" name="serie_motor">
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">Capacidad</label>
                <input class="form-control border border-2" type="text" id="capacidad" name="capacidad" minlength="1" maxlength="30">
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