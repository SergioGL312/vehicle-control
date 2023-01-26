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
        $query = "DELETE FROM conductores WHERE id = $id;";
        $con = conectar();
        $result = ejecutar($con, $query);
        
        if (!$result) { die("No se pudo borrar"); } 
        else { 
            echo "<script>alert('Borrado exitosamente');</script>";
            echo "<script>location.assign(\"../select/SConductores.php\")</script>";
        }
        
        cerrar($con);
    }
?>