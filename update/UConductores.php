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
        $query = "SELECT * FROM conductores WHERE id = '$id';";

        $con = conectar();
        $result = ejecutar($con, $query);
        if (mysqli_num_rows($result) == 1) {
            $fila = mysqli_fetch_array($result);
            $id = $fila['id'];
            $nombre = $fila['nombre'];
            $apellido_paterno = $fila['apellido_paterno'];
            $apellido_materno = $fila['apellido_materno'];
            $domicilio = $fila['domicilio'];
            $fecha_nacimiento = $fila['fecha_nacimiento'];
            $sexo = $fila['sexo'];
            $firma = $fila['firma'];
            $num_emergencia = $fila['num_emergencia'];
            $donador = $fila['donador'];
            $antiguedad = $fila['antiguedad'];
            $grupo_sanguineo = $fila['grupo_sanguineo'];
            $restricciones = $fila['restricciones'];
            $foto = $fila['foto'];
        }
    }

    if (isset($_POST['update'])) {
        $sizeFirma = $_FILES['firma'];
        $sizeFoto = $_FILES['foto'];

        $nombre = $_POST['nombre'];
        $apellido_paterno = $_POST['apellido_paterno'];
        $apellido_materno = $_POST['apellido_materno'];
        $domicilio = $_POST['domicilio'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $sexo = $_POST['sexo'];
        $num_emergencia = $_POST['num_emergencia'];
        $donador = $_POST['donador'];
        $antiguedad = $_POST['antiguedad'];
        $grupo_sanguineo = $_POST['grupo_sanguineo'];
        $restricciones = $_POST['restricciones'];

        if ($sizeFirma['size'] == 0 && $sizeFoto['size'] == 0) {
            $query = "UPDATE conductores SET
            nombre = '$nombre',
            apellido_paterno = '$apellido_paterno',
            apellido_materno = '$apellido_materno',
            domicilio = '$domicilio',
            fecha_nacimiento = '$fecha_nacimiento',
            sexo = '$sexo',
            num_emergencia = '$num_emergencia',
            donador = '$donador',
            antiguedad = '$antiguedad',
            grupo_sanguineo = '$grupo_sanguineo',
            restricciones = '$restricciones'
            WHERE id = '$id';";
        } else if ($sizeFirma['size'] != 0 && $sizeFoto['size'] == 0) {
            $firma = addslashes(file_get_contents($_FILES['firma']['tmp_name']));
            $query = "UPDATE conductores SET
            nombre = '$nombre',
            apellido_paterno = '$apellido_paterno',
            apellido_materno = '$apellido_materno',
            domicilio = '$domicilio',
            fecha_nacimiento = '$fecha_nacimiento',
            sexo = '$sexo',
            firma = '$firma',
            num_emergencia = '$num_emergencia',
            donador = '$donador',
            antiguedad = '$antiguedad',
            grupo_sanguineo = '$grupo_sanguineo',
            restricciones = '$restricciones'
            WHERE id = '$id';";
        } else if ($sizeFirma['size'] == 0 && $sizeFoto['size'] != 0) {
            $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
            $query = "UPDATE conductores SET
            nombre = '$nombre',
            apellido_paterno = '$apellido_paterno',
            apellido_materno = '$apellido_materno',
            domicilio = '$domicilio',
            fecha_nacimiento = '$fecha_nacimiento',
            sexo = '$sexo',
            num_emergencia = '$num_emergencia',
            donador = '$donador',
            antiguedad = '$antiguedad',
            grupo_sanguineo = '$grupo_sanguineo',
            restricciones = '$restricciones',
            foto = '$foto'
            WHERE id = '$id';";
        } else if ($sizeFirma['size'] != 0 && $sizeFoto['size'] != 0) {
            $firma = addslashes(file_get_contents($_FILES['firma']['tmp_name']));
            $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
            $query = "UPDATE conductores SET
            nombre = '$nombre',
            apellido_paterno = '$apellido_paterno',
            apellido_materno = '$apellido_materno',
            domicilio = '$domicilio',
            fecha_nacimiento = '$fecha_nacimiento',
            sexo = '$sexo',
            firma = '$firma',
            num_emergencia = '$num_emergencia',
            donador = '$donador',
            antiguedad = '$antiguedad',
            grupo_sanguineo = '$grupo_sanguineo',
            restricciones = '$restricciones',
            foto = '$foto'
            WHERE id = '$id';";
        }

        $result = ejecutar($con, $query);
		if (mysqli_affected_rows($con) == 1) {
            echo "<script>alert('Conductor Actualizado');</script>";
            echo "<script>location.assign(\"../select/SConductores.php\")</script>";
        }
        cerrar($con);
    }

?>

<?php
    include('../includes/header.php');
    echo update("Conductores");
?>

<body>
<header class="p-3" style="background: #1f1f1f;">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white" style="font-size: 30px;">Actualizar Conductores</a>
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
        <form class="row g-3" method="post" action="UConductores.php?id=<?php echo $_GET['id'] ?>" autocomplete="off" enctype="multipart/form-data">
            <div class="col-md-2">
                <label class="form-label">Id</label>
                <input type="number" id="id" name="id" class="form-control border border-2" value="<?php echo $id ?>" disabled>
            </div>
            
            <div class="col-md-2">
                <label class="form-label">Nombre</label>
                <input type="text" id="nombre" name="nombre" minlength="1" maxlength="50" class="form-control border border-2" value="<?php echo $nombre ?>">
            </div>
            
            <div class="col-md-3">
                <label class="form-label">apellido_paterno</label>
                <input type="text" id="apellido_paterno" name="apellido_paterno" minlength="1" maxlength="20" class="form-control border border-2" value="<?php echo $apellido_paterno ?>">
            </div>
            
            <div class="col-md-3">
                <label class="form-label">Apellido Materno</label>
                <input type="text" id="apellido_materno" name="apellido_materno" minlength="1" maxlength="20" class="form-control border border-2" value="<?php echo $apellido_materno ?>">
            </div>

            <div class="col-md-2">
                <label class="form-label">fecha_nacimiento</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control border border-2" value="<?php echo $fecha_nacimiento ?>">
            </div>

            <div class="col-md-6">
                <label class="form-label">Firma</label>
                <input type="file" class="form-control border border-2" id="inputGroupFile02" name="firma">
            </div>

            <div class="col-md-6">
                <label class="form-label">Foto</label>
                <input type="file" class="form-control border border-2" id="inputGroupFile02" name="foto">
            </div>
            
            <div class="col-md-3">
                <label class="form-label">num_emergencia</label>
                <input type="text" id="num_emergencia" name="num_emergencia" class="form-control border border-2" maxlength="10" value="<?php echo $num_emergencia ?>">
            </div>
            
            <div class="col-2" style="width: 180px; padding-left: 50px;">
                <label class="form-label">sexo</label>
                <div class="controls">
                    <input type="radio" id="sexo" name="sexo" value="M" class="form-check-input border border-2" <?php if ($sexo == "M")  echo "checked"; ?>>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Masculino
                    </label>
                </div>
                <div class="controls">
                    <input type="radio" id="sexo" name="sexo" value="F" class="form-check-input border border-2" <?php if ($sexo == "F")  echo "checked"; ?>>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Femenino
                    </label>
                </div>
            </div>

            <div class="col-2" style="width: 180px; padding-left: 50px;">
                <label class="form-label">Donador</label>
                <div class="controls">
                    <input type="radio" id="donador" name="donador" value="Si" class="form-check-input border border-2" <?php if ($donador == "Si") echo "checked"; ?>>
                    <label for="" class="form-check-label">Si</label>
                </div>
                <div class="controls">
                    <input type="radio" id="donador" name="donador" value="No" class="form-check-input border border-2" <?php if ($donador == "No") echo "checked"; ?>>
                    <label for="" class="form-check-label">No</label>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="controls">
                    <label class="form-label">Grupo Sanguineo</label>
                </div>
                <select class="form-select border border-2" id="grupo_sanguineo" name="grupo_sanguineo">
                    <option value="A+"<?php if ($grupo_sanguineo == "A+") echo "selected"; ?>>A+</option>
                    <option value="A-"<?php if ($grupo_sanguineo == "A-") echo "selected"; ?>>A-</option>
                    <option value="B+"<?php if ($grupo_sanguineo == "B+") echo "selected"; ?>>B+</option>
                    <option value="B-"<?php if ($grupo_sanguineo == "B-") echo "selected"; ?>>B-</option>
                    <option value="AB+"<?php if ($grupo_sanguineo == "AB+") echo "selected"; ?>>AB+</option>
                    <option value="AB-"<?php if ($grupo_sanguineo == "AB-") echo "selected"; ?>>AB-</option>
                    <option value="O+"<?php if ($grupo_sanguineo == "O+") echo "selected"; ?>>O+</option>
                    <option value="O-"<?php if ($grupo_sanguineo == "O-") echo "selected"; ?>>O-</option>
                </select>
            </div>

            <div class="col-md-2">
                <label class="form-label">antiguedad</label>
                <input type="date" id="antiguedad" name="antiguedad" class="form-control border border-2" value="<?php echo $antiguedad ?>">
            </div>

            <div class="col-md-4">
                <label class="form-label">domicilio</label>
                <input type="text" id="domicilio" name="domicilio" minlength="1" maxlength="50" class="form-control 
                border border-2" style="resize: none;" value="<?php echo $domicilio ?>">
            </div>
            
            <div class="col-md-4">
                <label class="form-label">Restricciones</label>
                <input type="text" id="restricciones" name="restricciones" class="form-control border border-2" minlength="1" maxlength="100" value="<?php echo $restricciones ?>" style="resize: none;">
            </div>

            <div class="row mt-5">
                <div class="w-50">
                    <label class="form-label">Firma antigua</label>
                    <iframe class="w-100 mt-3 border border-2" height="300" src="data:image/jpg;base64,<?php echo base64_encode($firma); ?>"></iframe>
                </div>
                <div class="w-50">
                <label class="form-label">Foto antigua</label>
                    <iframe class="w-100 mt-3 border border-2" height="300" src="data:image/jpg;base64,<?php echo base64_encode($foto); ?>"></iframe>
                </div>
            </div>
            
            <div class="col-12 p-4" style="text-align: center;">
                <input type="submit" class="form_input submit_radius btn btn-success center" name="update" style="padding-left: 50px; padding-right: 50px;">
            </div>
        </form>
    </div>
    <script src="../Javascripts/backHome.js"></script>
</body>
</html>