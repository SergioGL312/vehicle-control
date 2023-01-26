<?php 
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }
    include("../includes/header.php");
    echo selectHeader("Conductores");
?>
    <div class="col-md-4 p-4">
        <?php
            if (isset($_POST['criterio']) && isset($_POST['atributo'])) {
                $rol = $_SESSION['rol'];
                $criterio = $_POST['criterio'];
                $atributo = $_POST['atributo'];
                include("../database/db.php");
                $sql = "SELECT * FROM conductores WHERE $atributo LIKE '%$criterio%';";
                $con = conectar();
                $result = ejecutar($con, $sql);
                if ($result->num_rows > 0) { ?>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>nombre</th>
                            <th>apellido_paterno</th>
                            <th>apellido_materno</th>
                            <th>domicilio</th>
                            <th>fecha_nacimiento</th>
                            <th>sexo</th>
                            <th>firma</th>
                            <th>num_emergencia</th>
                            <th>donador</th>
                            <th>antiguedad</th>
                            <th>grupo_sanguineo</th>
                            <th>restricciones</th>
                            <th>foto</th>
                        <?php if ($rol == 'A') { ?>
                            <th>operaciones</th>
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
                            <td><?php echo $fila[8] ?></td>
                            <td><?php echo $fila[9] ?></td>
                            <td><?php echo $fila[10] ?></td>
                            <td><?php echo $fila[11] ?></td>
                            <td><?php echo $fila[12] ?></td>
                            <td><img height="500px" width="400px" src="data:image/jpg;base64,<?php echo base64_encode($fila[13]); ?>"></td>
                            <?php if ($rol == 'A') { ?>
                                <td class="rol">
                                <a href="../update/UConductores.php?id=<?php echo $fila[0] ?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="../delete/DConductores.php?id=<?php echo $fila[0] ?>" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                                </td>
                                </tr>
                            <?php } else if ($rol == 'U') { ?>
                                </tr>
                            <?php } ?>
                    <?php } ?>
                    </tbody></table>
                    <?php cerrar($con) ?>
                <?php } else { 
                    echo "<script>alert('No existe ningun registro con el criterio $criterio en atributo $atributo');</script>";
                }
                
            } else {
                echo "<script>alert('Intente de nuevo');</script>";
                print("<script>location.assign(\"./SConductores.php\")</script>");
            } ?>
    </div>

<script src="../Javascripts/backHome.js"></script>

</body>

</html>