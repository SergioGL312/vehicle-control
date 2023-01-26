<?php
    function conectar() {
        return $con = mysqli_connect("127.0.0.1", "root", "", "controlvehicular31");
        // if (isset($con)) {
        //     echo "Conected";
        // } else {
        //     echo "Not connected";
        // }
    }

    function ejecutar($con, $sql) {
        return $result = mysqli_query($con, $sql);//or die(mysqli_error($con)
    }

    function cerrar($con) {
        return mysqli_close($con);
    }

?>