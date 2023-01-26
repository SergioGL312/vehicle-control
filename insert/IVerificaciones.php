<?php
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }
    if ($_SESSION['rol'] == 'U') {
        header('Location: ../menu.php');
    }
    $entidad_federativa = $_REQUEST['entidad_federativa'];
    $municipio = $_REQUEST['municipio'];
    $numero_centro_verificacion = $_REQUEST['numero_centro_verificacion'];
    $numero_linea_verificacion = $_REQUEST['numero_linea_verificacion'];
    $id_tecnico_verificador = $_REQUEST['id_tecnico_verificador'];
    $fecha_expedicion = $_REQUEST['fecha_expedicion'];
    $hora_entrada = $_REQUEST['hora_entrada'];
    $hora_salida = $_REQUEST['hora_salida'];
    $motivo_verificacion = $_REQUEST['motivo_verificacion'];
    $folio_certificacion = $_REQUEST['folio_certificacion'];
    $semestre = $_REQUEST['semestre'];
    $fecha_vencimiento = $_REQUEST['fecha_vencimiento'];
    $id_tarjeta_circulacion = $_REQUEST['id_tarjeta_circulacion'];

    // print("id = ".$id);
    // print("<br>");
    // print("entidad_federativa = ".$entidad_federativa);
    // print("<br>");
    // print("municipio = ".$municipio);
    // print("<br>");
    // print("numero_centro_verificacion = ".$numero_centro_verificacion);
    // print("<br>");
    // print("numero_linea_verificacion = ".$numero_linea_verificacion);
    // print("<br>");
    // print("id_tecnico_verificador = ".$id_tecnico_verificador);
    // print("<br>");
    // print("fecha_expedicion = ".$fecha_expedicion);
    // print("<br>");
    // print("hora_entrada = ".$hora_entrada);
    // print("<br>");
    // print("hora_salida = ".$hora_salida);
    // print("<br>");
    // print("motivo_verificacion = ".$motivo_verificacion);
    // print("<br>");
    // print("folio_certificacion = ".$folio_certificacion);
    // print("<br>");
    // print("semestre = ".$semestre);
    // print("<br>");
    // print("fecha_vencimiento = ".$fecha_vencimiento);
    // print("<br>");
    // print("id_tarjeta_circulacion = ".$id_tarjeta_circulacion);

    $SQL = "INSERT INTO verificaciones (
        entidad_federativa,
        municipio,
        numero_centro_verificacion,
        numero_linea_verificacion,
        id_tecnico_verificador,
        fecha_expedicion,
        hora_entrada,
        hora_salida,
        motivo_verificacion,
        folio_certificacion,
        semestre,
        fecha_vencimiento,
        id_tarjeta_circulacion
    ) VALUES(
        '$entidad_federativa',
        '$municipio',
        '$numero_centro_verificacion',
        '$numero_linea_verificacion',
        '$id_tecnico_verificador',
        '$fecha_expedicion',
        '$hora_entrada',
        '$hora_salida',
        '$motivo_verificacion',
        '$folio_certificacion',
        '$semestre',
        '$fecha_vencimiento',
        '$id_tarjeta_circulacion'
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
        print("<script>location.assign(\"../menu.php\")</script>");
    } else {
        print("<script>alert(\"Registro NO correcto\")</script>");
        print("<script>location.assign(\"../formularios/IVerificaciones.php\")</script>");
    }

    // $cerrar = mysqli_close($con);
    cerrar($con);
?>