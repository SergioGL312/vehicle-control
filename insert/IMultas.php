<?php
    session_start();
    error_reporting(0);
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }
    if ($_SESSION['rol'] == 'U') {
        header('Location: ../menu.php');
    }
    $folio = $_REQUEST['folio'];
    $dia = $_REQUEST['dia'];
    $mes = $_REQUEST['mes'];
    $anio = $_REQUEST['anio'];
    $hora = $_REQUEST['hora'];
    $reporte_seccion = $_REQUEST['reporte_seccion'];
    $nombre_via = $_REQUEST['nombre_via'];
    $kilometro = $_REQUEST['kilometro'];
    $direccion_sentido = $_REQUEST['direccion_sentido'];
    $municipio = $_REQUEST['municipio'];
    $referencia_lugar = $_REQUEST['referencia_lugar'];
    $articulo_fundamento = $_REQUEST['articulo_fundamento'];
    $motivo = $_REQUEST['motivo'];
    $garantia_retenida = $_REQUEST['garantia_retenida'];
    $convenio = $_REQUEST['convenio'];
    $puesto_a_disposicion = $_REQUEST['puesto_a_disposicion'];
    $calificacion_boleta = $_REQUEST['calificacion_boleta'];
    $deposito_oficial = $_REQUEST['deposito_oficial'];
    $observaciones_personal_operativo = $_REQUEST['observaciones_personal_operativo'];
    $observaciones_conductor = $_REQUEST['observaciones_conductor'];
    $numero_parte_accidente = $_REQUEST['numero_parte_accidente'];
    $id_personal_operativo = $_REQUEST['id_personal_operativo'];
    $id_tarjeta_circulacion = $_REQUEST['id_tarjeta_circulacion'];
    $id_licencia = $_REQUEST['id_licencia'];
    $id_vehiculo = $_REQUEST['id_vehiculo'];

    $SQL = "INSERT INTO multas VALUES(
        '$folio',
        '$dia',
        '$mes',
        '$anio',
        '$hora',
        '$reporte_seccion',
        '$nombre_via',
        '$kilometro',
        '$direccion_sentido',
        '$municipio',
        '$referencia_lugar',
        '$articulo_fundamento',
        '$motivo',
        '$garantia_retenida',
        '$convenio',
        '$puesto_a_disposicion',
        '$calificacion_boleta',
        '$deposito_oficial',
        '$observaciones_personal_operativo',
        '$observaciones_conductor',
        '$numero_parte_accidente',
        '$id_personal_operativo',
        '$id_tarjeta_circulacion',
        '$id_licencia',
        '$id_vehiculo'
    );";

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
        print("<script>location.assign(\"../formularios/FMultas.php\")</script>");
    }

    // $cerrar = mysqli_close($con);
    cerrar($con);
?>