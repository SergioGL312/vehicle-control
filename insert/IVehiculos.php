<?php
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }
    if ($_SESSION['rol'] == 'U') {
        header('Location: ../menu.php');
    }
    $niv = $_GET['niv'];
    $tipo = $_GET['tipo'];
    $marca = $_GET['marca'];
    $modelo = $_GET['modelo'];
    $numero_serie = $_GET['numero_serie'];
    $clase = $_GET['clase'];
    $tipo_combustible = $_GET['tipo_combustible'];
    $numero_cilindros = $_GET['numero_cilindros'];
    $caballos_fuerza = $_GET['caballos_fuerza'];
    $tipo_carroceria = $_GET['tipo_carroceria'];
    $color = $_GET['color'];
    $transmision = $_GET['transmision'];
    $serie_motor = $_GET['serie_motor'];
    $capacidad = $_GET['capacidad'];

    // print("id = ".$id);
    // print("<br>");
    // print("niv = ".$niv);
    // print("<br>");
    // print("tipo = ".$tipo);
    // print("<br>");
    // print("marca = ".$marca);
    // print("<br>");
    // print("modelo = ".$modelo);
    // print("<br>");
    // print("numero_serie = ".$numero_serie);
    // print("<br>");
    // print("clase = ".$clase);
    // print("<br>");
    // print("tipo_combuistible = ".$tipo_combuistible);
    // print("<br>");
    // print("numero_cilindros = ".$numero_cilindros);
    // print("<br>");
    // print("caballos_fuerza = ".$caballos_fuerza);
    // print("<br>");
    // print("tipo_carroceria = ".$tipo_carroceria);
    // print("<br>");
    // print("color = ".$color);
    // print("<br>");
    // print("transmision = ".$transmision);
    // print("<br>");
    // print("serie_motor = ".$serie_motor);
    // print("<br>");
    // print("capacidad = ".$capacidad);

    $SQL = "INSERT INTO vehiculos(
        niv,
        tipo,
        marca,
        modelo,
        numero_serie,
        clase,
        tipo_combustible,
        numero_cilindros,
        caballos_fuerza,
        tipo_carroceria,
        color,
        transmision,
        serie_motor,
        capacidaD
    ) VALUES(
        '$niv',
        '$tipo',
        '$marca',
        '$modelo',
        '$numero_serie',
        '$clase',
        '$tipo_combustible',
        '$numero_cilindros',
        '$caballos_fuerza',
        '$tipo_carroceria',
        '$color',
        '$transmision',
        '$serie_motor',
        '$capacidad'
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
        print("<script>location.assign(\"../formularios/IVehiculos.php\")</script>");
    }

    // $cerrar = mysqli_close($con);
    cerrar($con);
?>