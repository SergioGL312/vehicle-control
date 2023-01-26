<?php
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }
    if ($_SESSION['rol'] == 'U') {
        header('Location: ../menu.php');
    }
    include("../database/db.php");

    if (isset($_GET['folio'])) {
        $folio = $_GET['folio'];
        $query = "DELETE FROM multas WHERE folio = $folio;";
        $con = conectar();
        $result = ejecutar($con, $query);
        
        if (!$result) { die("No se pudo borrar"); } 
        else { 
            echo "<script>alert('Borrado exitosamente');</script>";
            echo "<script>location.assign(\"../select/SMultas.php\")</script>";
        }
        
        cerrar($con);
    }
?>