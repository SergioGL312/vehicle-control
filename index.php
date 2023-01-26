<?php
    session_start();
    error_reporting(0);
    include("./database/db.php");

    if (isset($_POST['entrar'])) {
        
        $username = $_POST['username'];
        $password = strtoupper($_POST['password']);
    
        $query = "SELECT * FROM cuentas WHERE 
                username = '$username';";
    
        $con = conectar();
        $result = ejecutar($con, $query);

        if ($result->num_rows == 1) {
            $fila = mysqli_fetch_array($result);

            if ($password == $fila['password']) {
                $query_reinicio = "UPDATE cuentas SET intentos = 0 WHERE USERNAME = '$username';";
                ejecutar($con, $query_reinicio);

                if ($fila['status'] == 1) {

                    if ($fila['bloqueo'] == 0) {

                        if ($fila['rol'] == 'A'){
                            $_SESSION['username'] = $username;
                            $_SESSION['rol'] = 'A';
                            header('Location: ./menu.php');

                        } else {
                            $_SESSION['username'] = $username;
                            $_SESSION['rol'] = 'U';
                            header('Location: ./menu.php');

                        }
                    } else {
                        $_SESSION['message'] = "Ususario bloqueado";
                        $_SESSION['message_type'] = 'warning';

                    }
                } else {
                    $_SESSION['message'] = "Usuario inactivo comuniquese con un administrador";
                    $_SESSION['message_type'] = 'danger';

                }
            } else {
                $_SESSION['message'] = "Contraseña incorrecta";
                $_SESSION['message_type'] = 'danger';

                $query_intentos = "UPDATE cuentas SET intentos = intentos + 1 WHERE USERNAME = '$username';";
                ejecutar($con, $query_intentos);
    
                if ($fila['intentos'] >= 3) {
                    $query_bloqueo = "UPDATE cuentas SET bloqueo = 1 WHERE username = '$username';";
                    ejecutar($con, $query_bloqueo);

                    $_SESSION['message'] = "Usuario bloqueado comuniquese con un administrador";
                    $_SESSION['message_type'] = 'danger';
                    
                }
            }
        } else{
            $_SESSION['message'] = "Ususario no existe";
            $_SESSION['message_type'] = 'danger';
        }
        cerrar($con);
    }

?>

<?php
    include("./includes/header.php");
    echo loginHeader();
?>

<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="bg-white p-5 rounded-5 text-secondary shadow-lg" style="width: 25rem">
        <div class="d-flex justify-content-center">
            <img src="./images/login-icon.svg" alt="login-icon" style="height: 7rem" />
        </div>
        <div class="text-center fs-1 fw-bold">Iniciar sesión</div>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">

            <div class="input-group mt-4">
                <div class="input-group-text bg-dark">
                    <img src="./images/username-icon.svg" alt="username-icon" style="height: 1rem" />
                </div>
                <input class="form-control bg-light" type="text" name="username" placeholder="Usuario"
                    style="text-transform: uppercase" />
            </div>
            <div class="input-group mt-1">
                <div class="input-group-text bg-dark">
                    <img src="./images/password-icon.svg" alt="password-icon" style="height: 1rem" />
                </div>
                <input class="form-control bg-light" type="password" name="password" placeholder="Contraseña" />
            </div>
            <input class="btn bg-dark text-white w-100 mt-4 fw-semibold shadow-sm" type="submit" name="entrar" value="Entrar">
        </form>
    </div>

    <?php if(isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?=$_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php session_unset(); } ?>

    </body>
</html>