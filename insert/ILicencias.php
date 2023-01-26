<?php
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }
    if ($_SESSION['rol'] == 'U') {
        header('Location: ../index.php');
    }

    $id = $_POST['id'];
    $tipo = $_POST['tipo'];
    $fecha_expedicion = $_POST['fecha_expedicion'];
    $fecha_vencimiento = $_POST['fecha_vencimiento'];
    $atributo_desconocido = $_POST['atributo_desconocido'];
    $observacion = $_POST['observacion'];
    $id_conductor = $_POST['id_conductor'];
    $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    
    $SQL = "INSERT INTO licencias(
        id,
        tipo,
        fecha_expedicion,
        fecha_vencimiento,
        atributo_desconocido,
        observacion,
        id_conductor,
        foto
    ) VALUES (
        '$id',
        '$tipo',
        '$fecha_expedicion',
        '$fecha_vencimiento',
        '$atributo_desconocido',
        '$observacion',
        '$id_conductor',
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
        print("<script>location.assign(\"../formularios/FLicencias.php\")</script>");
    }

    cerrar($con);
?>