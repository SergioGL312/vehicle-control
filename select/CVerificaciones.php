<?php 
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }

    include("includes/headers.php");
    echo selectHeader("Verificaciones");
?>
    <div class="col-md-4 p-4">
        <?php
            if (isset($_POST['criterio'])) {
                $rol = $_SESSION['rol'];
                $criterio = $_POST['criterio'];
                $atributo = $_POST['atributo'];
                include("../database/db.php");
                $sql = "SELECT * FROM verificaciones WHERE $atributo LIKE '%$criterio%';";
                $con = conectar();
                $result = ejecutar($con, $sql);
                if ($result->num_rows > 0) {
                    print("<table class=\"table table-bordered\">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>entidad_federativa</th>
                            <th>municipio</th>
                            <th>numero_centro_verificacion</th>
                            <th>numero_linea_verificacion</th>
                            <th>id_tecnico_verificador</th>
                            <th>fecha_expedicion</th>
                            <th>hora_entrada</th>
                            <th>hora_salida</th>
                            <th>motivo_verificacion</th>
                            <th>folio_certificacion</th>
                            <th>semestre</th>
                            <th>fecha_vencimiento</th>
                            <th>id_tarjeta_circulacion</th>");
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
                        <td>$fila[13]</td>");
                        if ($rol == 'A') {
                            print("<td>
                            <a href=\"../update/UVerificaciones.php?id=$fila[0]\" class=\"btn btn-secondary\">
                                <i class=\"fas fa-marker\"></i>
                            </a>
                            <a href=\"../delete/DVerificaciones.php?id=$fila[0]\" class=\"btn btn-danger\">
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
    </div>

<script src="../Javascripts/backHome.js"></script>

</body>

</html>