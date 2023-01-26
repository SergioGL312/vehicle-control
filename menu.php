<?php 
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ./index.php');
    }
    if (!isset($_SESSION['rol'])) {
        header('Location: ./index.php');
    }
?>
<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/nav-menu.css">
    <title>Menu</title>
</head>
<body>
    <div class="menu-bar">
        <ul>
            <li><a href="">Conductores<i class="fas fa-caret-down"></i></a>
                <div class="dropdown-menu">
                    <ul>
                        <?php 
                            if ($_SESSION['rol'] == 'A') { ?>
                                <li class="insertar"><a href="./formularios/FConductores.php">Insertar</a></li>
                                <li class="consultar"><a href="./select/SConductores.php">Consultar</a></li>
                                <li class="editar"><a href="./select/SConductores.php">Editar</a></li>
                                <li class="borrar"><a href="./select/SConductores.php">Borrar</a></li>
                        <?php } else { ?>
                                <li class="consultar"><a href="./select/SConductores.php">Consultar</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </li>
            <li><a href="">Licencias<i class="fas fa-caret-down"></i></a>
                <div class="dropdown-menu">
                    <ul>
                        <?php
                            if ($_SESSION['rol'] == 'A') { ?>
                                <li class="insertar"><a href="./formularios/FLicencias.php">Insertar</a></li>
                                <li class="consultar"><a href="./select/SLicencias.php">Consultar</a></li>
                                <li class="editar"><a href="./select/SLicencias.php">Editar</a></li>
                                <li class="borrar"><a href="./select/SLicencias.php">Borrar</a></li>
                        <?php } else { ?>
                                <li class="consultar"><a href="./select/SLicencias.php">Consultar</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </li>
            <li><a href="">Multas<i class="fas fa-caret-down"></i></a>
                <div class="dropdown-menu">
                    <ul>
                        <?php
                            if ($_SESSION['rol'] == 'A') { ?>
                                <li class="insertar"><a href="./formularios/FMultas.php">Insertar</a></li>
                                <li class="consultar"><a href="./select/SMultas.php">Consultar</a></li>
                                <li class="editar"><a href="./select/SMultas.php">Editar</a></li>
                                <li class="borrar"><a href="./select/SMultas.php">Borrar</a></li>
                        <?php } else { ?>
                                <li class="consultar"><a href="./select/SMultas.php">Consultar</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </li>
            <li><a href="">Oficiales<i class="fas fa-caret-down"></i></a>
                <div class="dropdown-menu">
                    <ul>
                        <?php
                            if ($_SESSION['rol'] == 'A') { ?>
                                <li class="insertar"><a href="./formularios/FOficiales.php">Insertar</a></li>
                                <li class="consultar"><a href="./select/SOficiales.php">Consultar</a></li>
                                <li class="editar"><a href="./select/SOficiales.php">Editar</a></li>
                                <li class="borrar"><a href="./select/SOficiales.php">Borrar</a></li>
                        <?php } else { ?>
                                <li class="consultar"><a href="./select/SOficiales.php">Consultar</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </li>
            <li><a href="">Propietarios<i class="fas fa-caret-down"></i></a>
                <div class="dropdown-menu">
                    <ul>
                        <?php
                            if ($_SESSION['rol'] == 'A') { ?>
                                <li class="insertar"><a href="./formularios/FPropietarios.php">Insertar</a></li>
                                <li class="consultar"><a href="./select/SPropietarios.php">Consultar</a></li>
                                <li class="editar"><a href="./select/SPropietarios.php">Editar</a></li>
                                <li class="borrar"><a href="./select/SPropietarios.php">Borrar</a></li>
                        <?php } else { ?>
                                <li class="consultar"><a href="./select/SPropietarios.php">Consultar</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </li>
            <li><a href="">Tarjetas de circulación<i class="fas fa-caret-down"></i></a>
                <div class="dropdown-menu">
                    <ul>
                        <?php
                            if ($_SESSION['rol'] == 'A') { ?>
                                <li class="insertar"><a href="./formularios/FTarjetas_circulacion.php">Insertar</a></li>
                                <li class="consultar"><a href="./select/STarjetas_circulacion.php">Consultar</a></li>
                                <li class="editar"><a href="./select/STarjetas_circulacion.php">Editar</a></li>
                                <li class="borrar"><a href="./select/STarjetas_circulacion.php">Borrar</a></li>
                        <?php } else { ?>
                                <li class="consultar"><a href="./select/STarjetas_circulacion.php">Consultar</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </li>
            <li><a href="">Vehiculos<i class="fas fa-caret-down"></i></a>
                <div class="dropdown-menu">
                    <ul>
                        <?php
                            if ($_SESSION['rol'] == 'A') { ?>
                                <li class="insertar"><a href="./formularios/FVehiculos.php">Insertar</a></li>
                                <li class="consultar"><a href="./select/SVehiculos.php">Consultar</a></li>
                                <li class="editar"><a href="./select/SVehiculos.php">Editar</a></li>
                                <li class="borrar"><a href="./select/SVehiculos.php">Borrar</a></li>
                        <?php } else { ?>
                                <li class="consultar"><a href="./select/SVehiculos.php">Consultar</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </li>
            <li><a href="">Verificaciones<i class="fas fa-caret-down"></i></a>
                <div class="dropdown-menu">
                    <ul>
                        <?php
                            if ($_SESSION['rol'] == 'A') { ?>
                                <li class="insertar"><a href="./formularios/FVerificaciones.php">Insertar</a></li>
                                <li class="consultar"><a href="./select/SVerificaciones.php">Consultar</a></li>
                                <li class="editar"><a href="./select/SVerificaciones.php">Editar</a></li>
                                <li class="borrar"><a href="./select/SVerificaciones.php">Borrar</a></li>
                        <?php } else { ?>
                                <li class="consultar"><a href="./select/SVerificaciones.php">Consultar</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <a href="./destroy.php">Cerrar sesión</a>
</body>
</php>