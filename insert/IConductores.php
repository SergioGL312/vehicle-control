<?php
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }
    if ($_SESSION['rol'] == 'U') {
        header('Location: ../menu.php');
    }

    $nombre = $_POST['nombre'];
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];
    $domicilio = $_POST['domicilio'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $sexo = $_POST['sexo'];
    $firma = addslashes(file_get_contents($_FILES['firma']['tmp_name']));
    $num_emergencia = $_POST['num_emergencia'];
    $donador = $_POST['donador'];
    $antiguedad = $_POST['antiguedad'];
    $grupo_sanguineo = $_POST['grupo_sanguineo'];
    $restricciones = $_POST['restricciones'];
    $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

    $SQL = "INSERT INTO conductores (
        nombre,
        apellido_paterno,
        apellido_materno,
        domicilio,
        fecha_nacimiento,
        sexo,
        firma,
        num_emergencia,
        donador,
        antiguedad,
        grupo_sanguineo,
        restricciones,
        foto
    ) VALUES(
        '$nombre',
        '$apellido_paterno',
        '$apellido_materno',
        '$domicilio',
        '$fecha_nacimiento',
        '$sexo',
        '$firma',
        '$num_emergencia',
        '$donador',
        '$antiguedad',
        '$grupo_sanguineo',
        '$restricciones',
        '$foto'
    );";

    include("../database/db.php");
    $con = conectar();
    $result = ejecutar($con, $SQL);

    if ($result == 1) {
        print("<script>alert(\"Registro insertado correctamente\")</script>");
        print("<script>location.assign(\"../menu.php\")</script>");
    } else {
        print("<script>alert(\"Registro NO correcto\")</script>");
        print("<script>location.assign(\"../formularios/FConductores.php\")</script>");
    }

    cerrar($con);
?>