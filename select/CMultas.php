<?php
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }
    include("includes/headers.php");
    echo selectHeader("Multas");
?>
    <div class="col-md-4 p-4">
        <?php
            if (isset($_POST['criterio'])) {
                $rol = $_SESSION['rol'];
                $criterio = $_POST['criterio'];
                $atributo = $_POST['atributo'];
                include("../database/db.php");
                $sql = "SELECT * FROM multas WHERE $atributo LIKE '%$criterio%';";
                $con = conectar();
                $result = ejecutar($con, $sql);
                if ($result->num_rows > 0) {
                    print("<table class=\"table table-bordered\">
                    <thead>
                        <tr>
                            <th>folio</th>
                            <th>dia</th>
                            <th>mes</th>
                            <th>anio</th>
                            <th>hora</th>
                            <th>reporte_seccion</th>
                            <th>nombre_via</th>
                            <th>kilometro</th>
                            <th>direccion_sentido</th>
                            <th>municipio</th>
                            <th>referencia_lugar</th>
                            <th>articulo_fundamento</th>
                            <th>motivo</th>
                            <th>garantia_retenida</th>
                            <th>convenio</th>
                            <th>puesto_a_disposicion</th>
                            <th>calificacion_boleta</th>
                            <th>deposito_oficial</th>
                            <th>observaciones_personal_operativo</th>
                            <th>observaciones_conductor</th>
                            <th>numero_parte_accidente</th>
                            <th>id_personal_operativo</th>
                            <th>id_tarjeta_circulacion</th>
                            <th>id_licencia</th>
                            <th>id_vehiculo</th>");
                    if ($rol == 'A') {
                        print("<th>operaciones</th>
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
                        <td>$fila[16]</td>
                        <td>$fila[17]</td>
                        <td>$fila[18]</td>
                        <td>$fila[19]</td>
                        <td>$fila[20]</td>
                        <td>$fila[21]</td>
                        <td>$fila[22]</td>
                        <td>$fila[23]</td>
                        <td>$fila[24]</td>");
                        if ($rol == 'A') {
                            print("<td>
                            <a href=\"../update/UMultas.php?folio=$fila[0]\" class=\"btn btn-secondary\">
                                <i class=\"fas fa-marker\"></i>
                            </a>
                            <a href=\"../delete/DMultas.php?folio=$fila[0]\" class=\"btn btn-danger\">
                                <i class=\"fas fa-trash-alt\"></i>
                            </a>
                            </td>
                            </tr>");
                        } else if ($rol == 'U') {
                            print("</tr>");
                        }

                    }
                    print("</tbody></table>");
                    cerrar($con);
                } else { echo "<script>alert('No existe ningun registro con el criterio $criterio en atributo $atributo');</script>";  }
            }
        ?>
<script src="../Javascripts/backHome.js"></script>

</body>

</html>