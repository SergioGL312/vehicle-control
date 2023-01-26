<?php 
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }

    include("includes/headers.php");
    echo selectHeader("Tarjetas de circulación");
?>
    <div class="col-md-4 p-4">
    <?php
        if (isset($_POST['criterio'])) {
            $rol = $_SESSION['rol'];
            $criterio = $_POST['criterio'];
            $atributo = $_POST['atributo'];
            include("../database/db.php");
            $sql = "SELECT * FROM tarjetas_circulacion WHERE $atributo LIKE '%$criterio%';";
            $con = conectar();
            $result = ejecutar($con, $sql);
            if ($result->num_rows > 0) {
                include('./includes/xml.php');
                print("<table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>tipo_servicio</th>
                        <th>numero_constancia_inscripcion</th>
                        <th>servicio</th>
                        <th>origen</th>
                        <th>folio</th>
                        <th>fecha_vencimiento</th>
                        <th>placa</th>
                        <th>cve_vehicular</th>
                        <th>uso</th>
                        <th>operacion</th>
                        <th>fecha_operacion</th>
                        <th>oficina_expendidora</th>
                        <th>movimiento</th>
                        <th>rfa</th>
                        <th>id_vehiculo</th>
                        <th>id_propietario</th>");
                        if ($rol == 'A') {
                            print("<th>operaciones</th>
                            <th>PDF</th>
                            </tr>
                            </thead><tbody>");
                        } else if ($rol == 'U') {
                            print("</tr>
                            </thead><tbody>");
                        }
                while ($fila = mysqli_fetch_row($result)) {
                    print("<tr>
                    <td>$fila[0]</td>
                    <td>$fila[1]</td>
                    <td>$fila[2]</td>
                    <td>$fila[3]</td>
                    <td>$fila[4]</td>
                    <td>$fila[5]</td>
                    <td>$fila[6]</td>
                    <td>$fila[7]</td>
                    <td>$fila[8]</td>
                    <td>$fila[9]</td>
                    <td>$fila[10]</td>
                    <td>$fila[11]</td>
                    <td>$fila[12]</td>
                    <td>$fila[13]</td>
                    <td>$fila[14]</td>
                    <td>$fila[15]</td>
                    <td>$fila[16]</td>");
                    if ($rol == 'A') {
                        print("<td>
                        <a href=\"../update/UTarjetas_circulacion.php?id=$fila[0]\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-marker\"></i>
                        </a>
                        <a href=\"../delete/DTarjetas_circulacion.php?id=$fila[0]\" class=\"btn btn-danger\">
                            <i class=\"fas fa-trash-alt\"></i>
                        </a>
                        </td>
                        <td>
                        <a href=\"../fPDF/FPDFTarjetas.php?id=$fila[0]\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-marker\"></i>
                        </a>
                        </td>
                        </tr>");
                    } else if ($rol == 'U') {
                        print("</tr>");
                    }
                    generarXMLTarjetas(
                        $fila[0],
                        $fila[1],
                        $fila[2],
                        $fila[3],
                        $fila[4],
                        $fila[5],
                        $fila[6],
                        $fila[7],
                        $fila[8],
                        $fila[9],
                        $fila[10],
                        $fila[11],
                        $fila[12],
                        $fila[13],
                        $fila[14],
                        $fila[15],
                        $fila[16],
                    );
                }
                print("</tbody></table>");
                cerrar($con);    
            } else { echo "<script>alert('No existe ningun registro con el criterio $criterio en atributo $atributo');</script>";  }
        }
    ?>
    <script src="../Javascripts/backHome.js"></script>

</body>
</html>