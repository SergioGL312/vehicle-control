<?php
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }
    if ($_SESSION['rol'] == 'U') {
        header('Location: ../menu.php');
    }
    include("../database/db.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM tarjetas_circulacion WHERE id = '$id';";

        $con = conectar();
        $result = ejecutar($con, $query);
        if (mysqli_num_rows($result) == 1) {
            $fila = mysqli_fetch_array($result);
            $id = $fila['id'];
            $tipo_servicio = $fila['tipo_servicio'];
            $numero_constancia_inscripcion = $fila['numero_constancia_inscripcion'];
            $servicio = $fila['servicio'];
            $origen = $fila['origen'];
            $folio = $fila['folio'];
            $fecha_vencimiento = $fila['fecha_vencimiento'];
            $placa = $fila['placa'];
            $cve_vehicular = $fila['cve_vehicular'];
            $uso = $fila['uso'];
            $operacion = $fila['operacion'];
            $fecha_operacion = $fila['fecha_operacion'];
            $oficina_expendidora = $fila['oficina_expendidora'];
            $movimiento = $fila['movimiento'];
            $rfa = $fila['rfa'];
            $id_vehiculo = $fila['id_vehiculo'];
            $id_propietario = $fila['id_propietario'];
        }
    }

    if (isset($_POST['update'])) {
        $tipo_servicio = $_POST['tipo_servicio'];
        $numero_constancia_inscripcion = $_POST['numero_constancia_inscripcion'];
        $servicio = $_POST['servicio'];
        $origen = $_POST['origen'];
        $folio = $_POST['folio'];
        $fecha_vencimiento = $_POST['fecha_vencimiento'];
        $placa = $_POST['placa'];
        $cve_vehicular = $_POST['cve_vehicular'];
        $uso = $_POST['uso'];
        $operacion = $_POST['operacion'];
        $fecha_operacion = $_POST['fecha_operacion'];
        $oficina_expendidora = $_POST['oficina_expendidora'];
        $movimiento = $_POST['movimiento'];
        $rfa = $_POST['rfa'];

        $query = "UPDATE tarjetas_circulacion SET
        tipo_servicio = '$tipo_servicio',
        numero_constancia_inscripcion = '$numero_constancia_inscripcion',
        servicio = '$servicio',
        origen = '$origen',
        folio = '$folio',
        fecha_vencimiento = '$fecha_vencimiento',
        placa = '$placa',
        cve_vehicular = '$cve_vehicular',
        uso = '$uso',
        operacion = '$operacion',
        fecha_operacion = '$fecha_operacion',
        oficina_expendidora = '$oficina_expendidora',
        movimiento = '$movimiento',
        rfa = '$rfa'
        WHERE id = '$id';";
        $result = ejecutar($con, $query);
		if (mysqli_affected_rows($con) == 1) {
            echo "<script>alert('Tarjeta de Circulacion Actualizada');</script>";
			echo "<script>location.assign(\"../select/STarjetas_circulacion.php\")</script>";
        }
        cerrar($con);
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
    <title>Update Tarjetas_circulacion</title>
</head>
<body>
<header class="p-3" style="background: #1f1f1f;">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white" style="font-size: 30px;">Actualizar Tarjetas de
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
        <form class="row g-3" method="post" action="UTarjetas_circulacion.php?id=<?php echo $_GET['id'] ?>">
            <div class="col-md-2">
                <label class="form-label">id</label>
                <input class="form-control border border-2" type="text" id="id" name="id" value="<?php echo $id ?>" disabled>
            </div>
            <div class="col-md-2">
                <label class="form-label">tipo_servicio</label>
                <input class="form-control border border-2" type="text" id="tipo_servicio" name="tipo_servicio" minlength="1" maxlength="20" value="<?php echo $tipo_servicio ?>">
            </div>
            
            <div class="col-md-3">
                <label class="form-label">numero_constancia_inscripcion</label>
                <input class="form-control border border-2" type="number" id="numero_constancia_inscripcion" name="numero_constancia_inscripcion" value="<?php echo $numero_constancia_inscripcion ?>">
            </div>
            
            <div class="col-md-3">
                <label class="form-label">servicio</label>
                <input class="form-control border border-2" type="text" id="servicio" name="servicio" minlength="1" maxlength="50" value="<?php echo $servicio ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label">origen</label>
                <input class="form-control border border-2" type="text" id="origen" name="origen" minlength="1" maxlength="15" value="<?php echo $origen ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label">folio</label>
                <input class="form-control border border-2" type="number" id="folio" name="folio" value="<?php echo $folio ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label">fecha_vencimiento</label>
                <input class="form-control border border-2" type="date" id="fecha_vencimiento" name="fecha_vencimiento" value="<?php echo $fecha_vencimiento ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label">placa</label>
                <input class="form-control border border-2" type="text" id="placa" name="placa" minlength="1" maxlength="10" value="<?php echo $placa ?>">    
            </div>
            
            <div class="col-md-4">
                <label class="form-label">cve_vehicular</label>
                <input class="form-control border border-2" type="number" id="cve_vehicular" name="cve_vehicular" value="<?php echo $cve_vehicular ?>">
            </div>
            
            <div class="col-md-4">
                <label class="form-label">uso</label>
                <input class="form-control border border-2" type="text" id="uso" name="uso" minlength="1" maxlength="50" value="<?php echo $uso ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label">operacion</label>
                <input class="form-control border border-2" type="text" id="operacion" name="operacion" minlength="1" maxlength="15" value="<?php echo $operacion ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label">fecha_operacion</label>
                <input class="form-control border border-2" type="date" id="fecha_operacion" name="fecha_operacion" value="<?php echo $fecha_operacion ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label">oficina_expendidora</label>
                <input class="form-control border border-2" type="number" id="oficina_expendidora" name="oficina_expendidora" value="<?php echo $oficina_expendidora ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label">movimiento</label>
                <input class="form-control border border-2" type="text" id="movimiento" name="movimiento" minlength="1" maxlength="20" value="<?php echo $movimiento ?>">
            </div>
            
            
            <div class="col-md-2">
                <label class="form-label">rfa</label>
                <input class="form-control border border-2" type="number" id="rfa" name="rfa" value="<?php echo $rfa ?>">
            </div>
            
            
            <div class="col-md-2">
                <label class="form-label">id_vehiculo</label>
                <input class="form-control border border-2" type="number" id="id_vehiculo" name="id_vehiculo" value="<?php echo $id_vehiculo ?>" disabled>
            </div>
            
            
            <div class="col-md-2">
                <label class="form-label">id_propietario</label>
                <input class="form-control border border-2" type="number" id="id_propietario" name="id_propietario" value="<?php echo $id_propietario ?>" disabled>
            </div>
            
            <div class="col-12 p-4" style="text-align: center;">
                <input type="submit" name="update" class="form_input submit_radius btn btn-success center"
                    style="padding-left: 50px; padding-right: 50px;">
            </div>
        </form>
    </div>
    <script src="../Javascripts/backHome.js"></script>
</body>
</html>