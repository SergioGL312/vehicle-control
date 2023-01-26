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
        $query = "SELECT * FROM vehiculos WHERE id = '$id';";

        $con = conectar();
        $result = ejecutar($con, $query);
        if (mysqli_num_rows($result) == 1) {
            $fila = mysqli_fetch_array($result);
            $id = $fila['id'];
            $niv = $fila['niv'];
            $tipo = $fila['tipo'];
            $marca = $fila['marca'];
            $modelo = $fila['modelo'];
            $numero_serie = $fila['numero_serie'];
            $clase = $fila['clase'];
            $tipo_combustible = $fila['tipo_combustible'];
            $numero_cilindros = $fila['numero_cilindros'];
            $caballos_fuerza = $fila['caballos_fuerza'];
            $tipo_carroceria = $fila['tipo_carroceria'];
            $color = $fila['color'];
            $transmision = $fila['transmision'];
            $serie_motor = $fila['serie_motor'];
            $capacidad = $fila['capacidad'];
        }
    }

    if (isset($_POST['update'])) {
        $niv = $_POST['niv'];
        $tipo = $_POST['tipo'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $numero_serie = $_POST['numero_serie'];
        $clase = $_POST['clase'];
        $tipo_combustible = $_POST['tipo_combustible'];
        $numero_cilindros = $_POST['numero_cilindros'];
        $caballos_fuerza = $_POST['caballos_fuerza'];
        $tipo_carroceria = $_POST['tipo_carroceria'];
        $color = $_POST['color'];
        $transmision = $_POST['transmision'];
        $serie_motor = $_POST['serie_motor'];
        $capacidad = $_POST['capacidad'];

        $query = "UPDATE vehiculos SET
        niv = '$niv',
        tipo = '$tipo',
        marca = '$marca',
        modelo = '$modelo',
        numero_serie = '$numero_serie',
        clase = '$clase',
        tipo_combustible = '$tipo_combustible',
        numero_cilindros = '$numero_cilindros',
        caballos_fuerza = '$caballos_fuerza',
        tipo_carroceria = '$tipo_carroceria',
        color = '$color',
        transmision = '$transmision',
        serie_motor = '$serie_motor',
        capacidad = '$capacidad'
        WHERE id = '$id';";
        $result = ejecutar($con, $query);
		if (mysqli_affected_rows($con) == 1) {
            echo "<script>alert('Vehiculo Actualizado');</script>";
			echo "<script>location.assign(\"../select/SVehiculos.php\")</script>";
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
    <title>Update Vehiculos</title>
</head>
<body>
    <header class="p-3" style="background: #1f1f1f;">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white" style="font-size: 30px;">Actualizar Vehiculos</a>
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
        <form class="row g-3" method="post" action="UVehiculos.php?id=<?php echo $_GET['id'] ?>">
            <div class="col-md-2">
                <label class="form-label" for="">id</label>
                <input class="form-control border border-2" type="text" id="id" name="id" value="<?php echo $id ?>" disabled>
            </div>
            <div class="col-md-2">
                <label class="form-label" for="">niv</label>
                <input class="form-control border border-2" type="number" id="niv" name="niv" value="<?php echo $niv ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label" for="">tipo</label>
                <input class="form-control border border-2" type="text" id="tipo" name="tipo" minlength="1" maxlength="30" value="<?php echo $tipo ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label" for="">marca</label>
                <input class="form-control border border-2" type="text" id="marca" name="marca" minlength="1" maxlength="30" value="<?php echo $marca ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label" for="">modelo</label>
                <input class="form-control border border-2" type="text" id="modelo" name="modelo" minlength="1" maxlength="30" value="<?php echo $modelo ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label" for="">numero_serie</label>
                <input class="form-control border border-2" type="text" id="numero_serie" name="numero_serie" minlength="1" maxlength="30" value="<?php echo $numero_serie ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label" for="">clase</label>
                <input class="form-control border border-2" type="text" id="clase" name="clase" minlength="1" maxlength="30" value="<?php echo $clase ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label" for="">tipo_combustible</label>
                <input class="form-control border border-2" type="text" id="tipo_combustible" name="tipo_combustible" minlength="1" maxlength="30" value="<?php echo $tipo_combustible ?>">    
            </div>
            
            <div class="col-md-2">
                <label class="form-label" for="">numero_cilindros</label>
                <input class="form-control border border-2" type="text" id="numero_cilindros" name="numero_cilindros" minlength="1" maxlength="30" value="<?php echo $numero_cilindros ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label" for="">caballos_fuerza</label>
                <input class="form-control border border-2" type="number" id="caballos_fuerza" name="caballos_fuerza" value="<?php echo $caballos_fuerza ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label" for="">tipo_carroceria</label>
                <input class="form-control border border-2" type="text" id="tipo_carroceria" name="tipo_carroceria" minlength="1" maxlength="30" value="<?php echo $tipo_carroceria ?>">
            </div>
                
            <div class="col-md-2">
                <label class="form-label" for="">color</label>
                <input class="form-control border border-2" type="text" id="color" name="color" minlength="1" maxlength="30" value="<?php echo $color ?>">
            </div>
            
            
            <div class="col-md-2">
                <label class="form-label" for="">transmision</label>
                <input class="form-control border border-2" type="text" id="transmision" name="transmision" minlength="1" maxlength="30" value="<?php echo $transmision ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label" for="">serie_motor</label>
                <input class="form-control border border-2" type="number" id="serie_motor" name="serie_motor" value="<?php echo $serie_motor ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label" for="">capacidad</label>
                <input class="form-control border border-2" type="text" id="capacidad" name="capacidad" minlength="1" maxlength="30" value="<?php echo $capacidad ?>">
            </div>
            
            <div class="col-12 p-4" style="text-align: center;">
                <input type="submit" name="update" class="form_input submit_radius btn btn-success center"
                    style="padding-left: 50px; padding-right: 50px;">
            </div>                
        </form>
    </div>
    <script src="./Javascripts/backHome.js"></script>
</body>
</html>