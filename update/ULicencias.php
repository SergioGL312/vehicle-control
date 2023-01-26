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
		$query = "SELECT * FROM licencias WHERE id = '$id';";
		
		$con = conectar();
		$result = ejecutar($con, $query);
		if (mysqli_num_rows($result) == 1) {
			$fila = mysqli_fetch_array($result);
			$id = $fila['id'];
			$tipo = $fila['tipo'];
			$fecha_expedicion = $fila['fecha_expedicion'];
			$fecha_vencimiento = $fila['fecha_vencimiento'];
			$atributo_desconocido = $fila['atributo_desconocido'];
			$observacion = $fila['observacion'];
			$id_conductor = $fila['id_conductor'];
			$foto = $fila['foto'];
		}
	}

	if (isset($_POST['update'])) {
        $sizeFoto = $_FILES['foto'];

		$tipo = $_POST['tipo'];
		$fecha_expedicion = $_POST['fecha_expedicion'];
		$fecha_vencimiento = $_POST['fecha_vencimiento'];
		$atributo_desconocido = $_POST['atributo_desconocido'];
		$observacion = $_POST['observacion'];
		$id_conductor = $_POST['id_conductor'];

		if ($sizeFoto['size'] == 0) {
			$query = "UPDATE licencias SET
			tipo = '$tipo',
			fecha_expedicion = '$fecha_expedicion',
			fecha_vencimiento = '$fecha_vencimiento',
			atributo_desconocido = '$atributo_desconocido',
			observacion = '$observacion',
			id_conductor = '$id_conductor'
			WHERE id = '$id';";
		} else if ($sizeFoto['size'] != 0) {
			$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
			$query = "UPDATE licencias SET
			tipo = '$tipo',
			fecha_expedicion = '$fecha_expedicion',
			fecha_vencimiento = '$fecha_vencimiento',
			atributo_desconocido = '$atributo_desconocido',
			observacion = '$observacion',
			id_conductor = '$id_conductor',
			foto = '$foto'
			WHERE id = '$id';";
		}

		$result = ejecutar($con, $query);
		if (mysqli_affected_rows($con) == 1) {
			echo "<script>alert('Licencia Actualizada');</script>";
			echo "<script>location.assign(\"../select/SLicencias.php\")</script>";
		}
        cerrar($con);
	}

?>

<?php
	include('../includes/header.php');
	echo update("Licencias");
?>

<body>
    <header class="p-3" style="background: #1f1f1f;">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white" style="font-size: 30px;">Actualizar Licencias</a>
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
		<form class="row g-3" method="post" action="ULicencias.php?id=<?php echo $_GET['id']; ?>" enctype="multipart/form-data">
			<div class="col-md-3">
				<label class="form-label" for="">id</label>
				<input class="form-control border border-2" type="text" id="id" name="id" maxlength="10" value="<?php echo $id ?>" disabled>
			</div>

			<div class="col-md-2">
            	<div class="controls">
					<label class="form-label" for="">tipo</label>
				</div>
				<select class="form-select border border-2" id = "tipo" name = "tipo">
					<option value="A"<?php if ($tipo == "A") echo "selected"; ?> >A</option>
					<option value="B"<?php if ($tipo == "B") echo "selected"; ?> >B</option>
					<option value="C"<?php if ($tipo == "C") echo "selected"; ?> >C</option>
					<option value="D"<?php if ($tipo == "D") echo "selected"; ?> >D</option>
					<option value="E"<?php if ($tipo == "E") echo "selected"; ?> >E</option>
					<option value="F"<?php if ($tipo == "F") echo "selected"; ?> >F</option>
				</select>
			</div>

			<div class="col-md-3">
				<label for="">fecha_expedicion</label>
				<input class="form-control border border-2" type="date" id="fecha_expedicion" name="fecha_expedicion" value="<?php echo $fecha_expedicion ?>">
			</div>

			<div class="col-md-3">
				<label for="">fecha_vencimiento</label>
				<input class="form-control border border-2" type="date" id="fecha_vencimiento" name="fecha_vencimiento" value="<?php echo $fecha_vencimiento ?>">
			</div>

			<div class="col-md-6">
				<label for="">atributo_desconocido</label>
				<input class="form-control border border-2" type="text" id="atributo_desconocido" name="atributo_desconocido" maxlength="10" value="<?php echo $atributo_desconocido ?>">
			</div>

			<div class="col-md-3">
				<label for="">observacion</label>
				<input class="form-control border border-2" type="text" id="observacion" name="observacion" maxlength="100" value="<?php echo $observacion ?>">
			</div>

			<div class="col-md-3">
				<label for="">id_conductor</label>
				<input class="form-control border border-2" type="number" id="id_conductor" name="id_conductor" value="<?php echo $id_conductor ?>">
			</div>

			<div class="col-md-6">
                <label class="form-label">Foto</label>
                <input type="file" class="form-control border border-2" id="inputGroupFile02" name="foto">
            </div>

			<div class="col-12 p-4" style="text-align: center;">
				<input type="submit" class="form_input submit_radius btn btn-success center" name="update" style="padding-left: 50px; padding-right: 50px;">
			</div>

			<div class="mt-5">
                <div class="w-50">
					<label class="form-label">Foto antigua</label>
					<iframe class="w-100 mt-3 border border-2" height="300" src="data:image/jpg;base64,<?php echo base64_encode($foto); ?>"></iframe>
				</div>
			</div>

		</form>
	</div>
    <script src="../Javascripts/backHome.js"></script>

</body>
</html>