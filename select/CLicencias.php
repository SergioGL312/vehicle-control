<?php 
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }
    include("../includes/header.php");
    echo selectHeader("Licencias");
?>
    <div class="col-md-4 p-4">
        <?php
            if (isset($_POST['criterio']) && isset($_POST['atributo'])) {
                $rol = $_SESSION['rol'];
                $criterio = $_POST['criterio'];
                $atributo = $_POST['atributo'];
                include("../database/db.php");
                $sql = "SELECT * FROM licencias WHERE $atributo LIKE '%$criterio%';";
                $con = conectar();
                $result = ejecutar($con, $sql);
                if ($result->num_rows > 0) { ?>
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>tipo</th>
                            <th>fecha_expedicion</th>
                            <th>fecha_vencimiento</th>
                            <th>atributo_desconocido</th>
                            <th>observacion</th>
                            <th>id_conductor</th>
                            <th>foto</th>
                    <?php if ($rol == 'A') { ?>
                        <th>operaciones</th>
                            <th>PDF</th>
                            </tr>
                            </thead><tbody>
                    <?php } else if ($rol == 'U') { ?>
                        </tr>
                            </thead><tbody>
                    <?php } ?>

                    <?php while ($fila = mysqli_fetch_row($result)) { ?>
                        <tr>
                        <td><?php echo $fila[0] ?></td>
                        <td><?php echo $fila[1] ?></td>
                        <td><?php echo $fila[2] ?></td>
                        <td><?php echo $fila[3] ?></td>
                        <td><?php echo $fila[4] ?></td>
                        <td><?php echo $fila[5] ?></td>
                        <td><?php echo $fila[6] ?></td>
                        <td><img height="500px" width="400px" src="data:image/jpg;base64,<?php echo base64_encode($fila[7]); ?>"></td>
                        <?php if ($rol == 'A') { ?>
                            <td>
                            <a href="../update/ULicencias.php?id=<?php echo $fila[0] ?>" class="btn btn-secondary">
                                <i class="fas fa-marker"></i>
                            </a>
                            <a href="../delete/DLicencias.php?id=<?php echo $fila[0] ?>" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                            </td>
                            <td>
                            <a href="../fPDF/FPDFEjemplo.php?id=<?php echo $fila[6] ?>" class="btn btn-secondary">
                                <i class="fa-solid fa-file-pdf"></i>
                            </a>
                            </td>
                            </tr>
                        <?php }  else if ($rol == 'U') { ?>
                            </tr>
                        <?php } ?>
                        
                    <?php } ?>
                    </tbody></table>
                    <?php cerrar($con);
                    } else {
                    echo "<script>alert('No existe ningun registro con el criterio $criterio en atributo $atributo');</script>";
                }
            
            } else {
                echo "<script>alert('Intente de nuevo');</script>";
                print("<script>location.assign(\"./SLicencias.php\")</script>");
            }
            ?>
    </div>

<script src="../Javascripts/backHome.js"></script>

</body>

</html>