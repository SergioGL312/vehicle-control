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
    <title>Tarjetas de Circulación</title>
</head>

<body>
    <header class="p-3" style="background: #1f1f1f;">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white" style="font-size: 30px;">Tarjetas de
                            circulación</a>
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
        <form class="row g-3" method="post" action="./Insert/ITarjetas_circulacion.php">
            <div class="col-md-2">
                <label class="form-label">Tipo Servicio</label>
                <input class="form-control border border-2" type="text" id="tipo_servicio" name="tipo_servicio"
                    minlength="1" maxlength="20">
            </div>

            <div class="col-md-3">
                <label class="form-label">Numero Constancia Inscripcion</label>
                <input class="form-control border border-2" type="number" id="numero_constancia_inscripcion"
                    name="numero_constancia_inscripcion">
            </div>

            <div class="col-md-3">
                <label class="form-label">Servicio</label>
                <input class="form-control border border-2" type="text" id="servicio" name="servicio" minlength="1"
                    maxlength="50">
            </div>

            <div class="col-md-2">
                <label class="form-label">Origen</label>
                <input class="form-control border border-2" type="text" id="origen" name="origen" minlength="1"
                    maxlength="15">
            </div>

            <div class="col-md-2">
                <label class="form-label">Folio</label>
                <input class="form-control border border-2" type="number" id="folio" name="folio">
            </div>

            <div class="col-md-2">
                <label class="form-label">Fecha de Vencimiento</label>
                <input class="form-control border border-2" type="date" id="fecha_vencimiento" name="fecha_vencimiento">
            </div>

            <div class="col-md-2">
                <label class="form-label">Placa</label>
                <input class="form-control border border-2" type="text" id="placa" name="placa" minlength="1"
                    maxlength="10">
            </div>

            <div class="col-md-4">
                <label class="form-label">CVE Vehicular</label>
                <input class="form-control border border-2" type="number" id="cve_vehicular" name="cve_vehicular">
            </div>

            <div class="col-md-4">
                <label class="form-label">Uso</label>
                <input class="form-control border border-2" type="text" id="uso" name="uso" minlength="1"
                    maxlength="50">
            </div>

            <div class="col-md-2">
                <label class="form-label">Operacion</label>
                <input class="form-control border border-2" type="text" id="operacion" name="operacion" minlength="1"
                    maxlength="15">
            </div>

            <div class="col-md-2">
                <label class="form-label">Fecha de Operacion</label>
                <input class="form-control border border-2" type="date" id="fecha_operacion" name="fecha_operacion">
            </div>

            <div class="col-md-2">
                <label class="form-label">Oficina Expendidora</label>
                <input class="form-control border border-2" type="number" id="oficina_expendidora"
                    name="oficina_expendidora">
            </div>

            <div class="col-md-2">
                <label class="form-label">Movimiento</label>
                <input class="form-control border border-2" type="text" id="movimiento" name="movimiento" minlength="1"
                    maxlength="20">
            </div>


            <div class="col-md-2">
                <label class="form-label">RFA</label>
                <input class="form-control border border-2" type="number" id="rfa" name="rfa">
            </div>


            <div class="col-md-2">
                <label class="form-label">Id Vehiculo</label>
                <input class="form-control border border-2" type="number" id="id_vehiculo" name="id_vehiculo">
            </div>


            <div class="col-md-2">
                <label class="form-label">Id Propietario</label>
                <input class="form-control border border-2" type="number" id="id_propietario" name="id_propietario">
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