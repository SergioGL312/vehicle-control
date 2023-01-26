<?php
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }
    if ($_SESSION['rol'] == 'U') {
        header('Location: ../menu.php');
    }
    $tipo_servicio = $_POST['tipo_servicio'];
    $numero_constancia_inscripcion = $_POST['numero_constancia_inscripcion'];
    $servicio = $_POST['servicio'];
    $origen = $_POST['origen'];
    $folio = $_POST['folio'];
    $fecha_vencimiento = $_POST['fecha_vencimiento'];
    $placa = $_POST['placa'];
    $cve_vehicular = $_POST['cve_vehicular'];
    $uso = $_POST['uso'];
    $operacion = $_POST['operacion'];
    $fecha_operacion = $_POST['fecha_operacion'];
    $oficina_expendidora = $_POST['oficina_expendidora'];
    $movimiento = $_POST['movimiento'];
    $rfa = $_POST['rfa'];
    $id_vehiculo = $_POST['id_vehiculo'];
    $id_propietario = $_POST['id_propietario'];

    // print("id = ".$id);
    // print("<br>");
    // print("tipo_servicio = ".$tipo_servicio);
    // print("<br>");
    // print("numero_constancia_inscripcion = ".$numero_constancia_inscripcion);
    // print("<br>");
    // print("servicio = ".$servicio);
    // print("<br>");
    // print("origen = ".$origen);
    // print("<br>");
    // print("folio = ".$folio);
    // print("<br>");
    // print("fecha_vencimiento = ".$fecha_vencimiento);
    // print("<br>");
    // print("placa = ".$placa);
    // print("<br>");
    // print("cve_vehicular = ".$cve_vehicular);
    // print("<br>");
    // print("uso = ".$uso);
    // print("<br>");
    // print("operacion = ".$operacion);
    // print("<br>");
    // print("fecha_operacion = ".$fecha_operacion);
    // print("<br>");
    // print("oficina_expendidora = ".$oficina_expendidora);
    // print("<br>");
    // print("movimiento = ".$movimiento);
    // print("<br>");
    // print("rfa = ".$rfa);
    // print("<br>");
    // print("id_vehiculo = ".$id_vehiculo);
    // print("<br>");
    // print("id_propietario = ".$id_propietario);

    $SQL = "INSERT INTO tarjetas_circulacion (
        tipo_servicio,
        numero_constancia_inscripcion,
        servicio,
        origen,
        folio,
        fecha_vencimiento,
        placa,
        cve_vehicular,
        uso,
        operacion,
        fecha_operacion,
        oficina_expendidora,
        movimiento,
        rfa,
        id_vehiculo,
        id_propietario
    ) VALUES(
        '$tipo_servicio',
        '$numero_constancia_inscripcion',
        '$servicio',
        '$origen',
        '$folio',
        '$fecha_vencimiento',
        '$placa',
        '$cve_vehicular',
        '$uso',
        '$operacion',
        '$fecha_operacion',
        '$oficina_expendidora',
        '$movimiento',
        '$rfa',
        '$id_vehiculo',
        '$id_propietario'
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
        print("<script>location.assign(\"../formularios/ITarjetas_circulacion.php\")</script>");
    }

    // $cerrar = mysqli_close($con);
    cerrar($con);
?>