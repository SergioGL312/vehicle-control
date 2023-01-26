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
        $query = "SELECT * FROM verificaciones WHERE id = '$id';";

        $con = conectar();
        $result = ejecutar($con, $query);
        if (mysqli_num_rows($result) == 1) {
            $fila = mysqli_fetch_array($result);
            $id = $fila['id'];
            $entidad_federativa = $fila['entidad_federativa'];
            $municipio = $fila['municipio'];
            $numero_centro_verificacion = $fila['numero_centro_verificacion'];
            $numero_linea_verificacion = $fila['numero_linea_verificacion'];
            $id_tecnico_verificador = $fila['id_tecnico_verificador'];
            $fecha_expedicion = $fila['fecha_expedicion'];
            $hora_entrada = $fila['hora_entrada'];
            $hora_salida = $fila['hora_salida'];
            $motivo_verificacion = $fila['motivo_verificacion'];
            $folio_certificacion = $fila['folio_certificacion'];
            $semestre = $fila['semestre'];
            $fecha_vencimiento = $fila['fecha_vencimiento'];
            $id_tarjeta_circulacion = $fila['id_tarjeta_circulacion'];
        }
    }

    if (isset($_POST['update'])) {
        $entidad_federativa = $_POST['entidad_federativa'];
        $municipio = $_POST['municipio'];
        $numero_centro_verificacion = $_POST['numero_centro_verificacion'];
        $numero_linea_verificacion = $_POST['numero_linea_verificacion'];
        $id_tecnico_verificador = $_POST['id_tecnico_verificador'];
        $fecha_expedicion = $_POST['fecha_expedicion'];
        $hora_entrada = $_POST['hora_entrada'];
        $hora_salida = $_POST['hora_salida'];
        $motivo_verificacion = $_POST['motivo_verificacion'];
        $folio_certificacion = $_POST['folio_certificacion'];
        $semestre = $_POST['semestre'];
        $fecha_vencimiento = $_POST['fecha_vencimiento'];
        $id_tarjeta_circulacion = $_POST['id_tarjeta_circulacion'];

        $query = "UPDATE verificaciones SET
        entidad_federativa = '$entidad_federativa',
        municipio = '$municipio',
        numero_centro_verificacion = '$numero_centro_verificacion',
        numero_linea_verificacion = '$numero_linea_verificacion',
        id_tecnico_verificador = '$id_tecnico_verificador',
        fecha_expedicion = '$fecha_expedicion',
        hora_entrada = '$hora_entrada',
        hora_salida = '$hora_salida',
        motivo_verificacion = '$motivo_verificacion',
        folio_certificacion = '$folio_certificacion',
        semestre = '$semestre',
        fecha_vencimiento = '$fecha_vencimiento',
        id_tarjeta_circulacion = '$id_tarjeta_circulacion'
        WHERE id = '$id';";
        $result = ejecutar($con, $query);
		if (mysqli_affected_rows($con) == 1) {
            echo "<script>alert('Verificacion Actualizada');</script>";
			echo "<script>location.assign(\"../select/SVerificaciones.php\")</script>";
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
    <title>Update Verificaciones</title>
</head>
<body>
    <header class="p-3" style="background: #1f1f1f;">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white" style="font-size: 30px;">Actualizar Verificaciones</a>
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
        <form method="post" class="row g-3" action="UVerificaciones.php?id=<?php echo $_GET['id'] ?>">
            <div class="col-md-2">
                <label class="form-label" for="">id</label>
                <input class="form-control border border-2" type="text" id="id" name="id" value="<?php echo $id ?>" disabled>
            </div>
            <div class="col-md-4">
                <label class="form-label" for="">entidad_federativa</label>
                <input class="form-control border border-2" type="text" id="entidad_federativa" name="entidad_federativa" minlength="1" maxlength="50" value="<?php echo $entidad_federativa ?>">
            </div>
            
            <div class="col-md-4">
                <label class="form-label" for="">municipio</label>
                <input class="form-control border border-2" type="text" id="municipio" name="municipio" minlength="1" maxlength="50" value="<?php echo $municipio ?>">
            </div>
            
            <div class="col-md-3">
                <label class="form-label" for="">numero_centro_verificacion</label>
                <input class="form-control border border-2" type="number" id="numero_centro_verificacion" name="numero_centro_verificacion" value="<?php echo $numero_centro_verificacion ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label" for="">numero_linea_verificacion</label>
                <input class="form-control border border-2" type="number" id="numero_linea_verificacion" name="numero_linea_verificacion" value="<?php echo $numero_linea_verificacion ?>">
            </div>
            
            <div class="col-md-3">
                <label class="form-label" for="">id_tecnico_verificador</label>
                <input class="form-control border border-2" type="number" id="id_tecnico_verificador" name="id_tecnico_verificador" value="<?php echo $id_tecnico_verificador ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label" for="">fecha_expedicion</label>
                <input class="form-control border border-2" type="date" id="fecha_expedicion" name="fecha_expedicion" value="<?php echo $fecha_expedicion ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label" for="">hora_entrada</label>
                <input class="form-control border border-2" type="time" id="hora_entrada" name="hora_entrada" value="<?php echo $hora_entrada ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label" for="">hora_salida</label>
                <input class="form-control border border-2" type="time" id="hora_salida" name="hora_salida" value="<?php echo $hora_salida ?>">
            </div>
            
            <div class="col-md-7">
                <label class="form-label" for="">motivo_verificacion</label>
                <input class="form-control border border-2" type="text" id="motivo_verificacion" name="motivo_verificacion" minlength="1" maxlength="100" value="<?php echo $motivo_verificacion ?>">
            </div>
            
            <div class="col-md-4">
                <label class="form-label" for="">folio_certificacion</label>
                <input class="form-control border border-2" type="text" id="folio_certificacion" name="folio_certificacion" minlength="1" maxlength="10" value="<?php echo $folio_certificacion ?>">
            </div>
            
            <div class="col-md-3">
                <label class="form-label" for="">semestre</label>
                <input class="form-control border border-2" type="number" id="semestre" name="semestre" value="<?php echo $semestre ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label" for="">fecha_vencimiento</label>
                <input class="form-control border border-2" type="date" id="fecha_vencimiento" name="fecha_vencimiento" value="<?php echo $fecha_vencimiento ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label" for="">id_tarjeta_circulacion</label>
                <input class="form-control border border-2" type="number" id="id_tarjeta_circulacion" name="id_tarjeta_circulacion" value="<?php echo $id_tarjeta_circulacion ?>">
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