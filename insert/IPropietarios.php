<?php
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }
    if ($_SESSION['rol'] == 'U') {
        header('Location: ../menu.php');
    }
    // $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];
    $localidad = $_POST['localidad'];
    $municipio = $_POST['municipio'];
    $rfc = $_POST['rfc'];

    // print("id = ".$id);
    // print("<br>");
    // print("nombre = ".$nombre);
    // print("<br>");
    // print("apellido_paterno = ".$apellido_paterno);
    // print("<br>");
    // print("apellido_materno = ".$apellido_materno);
    // print("<br>");
    // print("localidad = ".$localidad);
    // print("<br>");
    // print("municipio = ".$municipio);
    // print("<br>");
    // print("rfc = ".$rfc);

    $SQL = "INSERT INTO propietarios (
        nombre,
        apellido_paterno,
        apellido_materno,
        localidad,
        municipio,
        rfc
    ) VALUES(
        '$nombre',
        '$apellido_paterno',
        '$apellido_materno',
        '$localidad',
        '$municipio',
        '$rfc'
    );";
    // print("<br><br>".$SQL);
    // print_r("<br><br>");

    include("../database/db.php");
    $con = conectar();
    $result = ejecutar($con, $SQL);
    

    if ($result == 1) {
        session_start();
        $rol = $_SESSION['rol'];
        print("<script>alert(\"Registro insertado correctamente\")</script>");
        print("<script>location.assign(\"../menu.php"\")</script>");
    } else {
        print("<script>alert(\"Registro NO correcto\")</script>");
        print("<script>location.assign(\"../formularios/IPropietarios.php\")</script>");
    }

    // $cerrar = mysqli_close($con);
    cerrar($con);
?>