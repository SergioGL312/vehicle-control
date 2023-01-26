<?php
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }
    if ($_SESSION['rol'] == 'U') {
        header('Location: ../menu.php');
    }
    $nombre = $_REQUEST['nombre'];
    $apellido_paterno = $_REQUEST['apellido_paterno'];
    $apellido_materno = $_REQUEST['apellido_materno'];
    $grupo = $_REQUEST['grupo'];
    $firma = $_REQUEST['firma'];

    // print("id = ".$id);
    // print("<br>");
    // print("nombre = ".$nombre);
    // print("<br>");
    // print("apellido_paterno = ".$apellido_paterno);
    // print("<br>");
    // print("apellido_materno = ".$apellido_materno);
    // print("<br>");
    // print("grupo = ".$grupo);
    // print("<br>");
    // print("firma = ".$firma);

    $SQL = "INSERT INTO oficiales(
        nombre,
        apellido_paterno,
        apellido_materno,
        grupo,
        firma
    ) VALUES(
        '$nombre',
        '$apellido_paterno',
        '$apellido_materno',
        '$grupo',
        '$firma'
    );";
    // print("<br><br>".$SQL);
    // print_r("<br><br>");

    include("../database/db.php");
    $con = conectar();
    $result = ejecutar($con, $SQL);
    

    if ($result == 1) {
        print("<script>alert(\"Registro insertado correctamente\")</script>");
        print("<script>location.assign(\"../menu.php\")</script>");
        // header("Location: ../menu.php");
    } else {
        print("<script>alert(\"Registro NO correcto\")</script>");
        print("<script>location.assign(\"../formularios/FOficiales.php\")</script>");
        // header("Location: ./IOficiales.php");
    }

    // $cerrar = mysqli_close($con);
    cerrar($con);
?>