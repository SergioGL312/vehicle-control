<?php 
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    } 
    if ($_SESSION['rol'] == 'U') {
        header('Location: ../menu.php');
    }

    include("../includes/header.php");
    echo insert("Conductores");
?>

<body>
    <header class="p-3" style="background: #1f1f1f;">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white" style="font-size: 30px;">Conductores</a>
                    </li>
                </ul>
                <div class="text-end">
                    <button type="button" class="btn btn-danger" id="back-home"
                        style="width: 80px; padding-left: 10px;">Regresar</button>
                </div>
            </div>
        </div>
    </header>

    <div class="p-5 m-0 border-0">
        <form class="row g-3" method="post" action="../insert/IConductores.php" autocomplete="on" enctype="multipart/form-data">
            <div class="col-md-2">
                <label class="form-label">Nombre</label>
                <input type="text" id="nombre" name="nombre" minlength="1" maxlength="50"
                    class="form-control border border-2" required>
            </div>

            <div class="col-md-5">

                <label class="form-label">Apellido Paterno</label>

                <input type="text" id="apellido_paterno" name="apellido_paterno" minlength="1" maxlength="20"
                    class="form-control border border-2" required>
            </div>

            <div class="col-md-5">

                <label class="form-label">Apellido Materno</label>

                <input type="text" id="apellido_materno" name="apellido_materno" minlength="1" maxlength="20"
                    class="form-control border border-2" required>
            </div>


            <div class="col-md-2">
                <label class="form-label">Fecha de Nacimiento</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control border border-2" required>
            </div>

            <div class="col-md-5">
                <label class="form-label">Firma</label>
                <input type="file" class="form-control border border-2" id="inputGroupFile02" name="firma" required>
            </div>

            <div class="col-md-5">
                <label class="form-label">Foto</label>
                <input type="file" class="form-control border border-2" id="inputGroupFile02" name="foto" required>
            </div>

            <div class="col-md-3">
                <label class="form-label">Numero de Emergencia</label>
                <input type="text" id="num_emergencia" name="num_emergencia" class="form-control border border-2"
                    maxlength="10" required>
            </div>

            <div class="col-2" style="width: 180px; padding-left: 50px;">
                <label class="form-label">Sexo</label>
                <div class="controls">
                    <input type="radio" id="sexo" name="sexo" value="M" class="form-check-input border border-2">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Masculino
                    </label>
                </div>
                <div class="controls">
                    <input type="radio" id="sexo" name="sexo" value="F" class="form-check-input border border-2">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Femenino
                    </label>
                </div>
            </div>

            <div class="col-2" style="width: 180px; padding-left: 50px;">
                <label class="form-label">Donador</label>
                <div class="controls">
                    <input type="radio" id="donador" name="donador" value="Si" class="form-check-input border border-2" required>
                    <label for="" class="form-check-label">Si</label>
                </div>
                <div class="controls">
                    <input type="radio" id="donador" name="donador" value="No" class="form-check-input border border-2" required>
                    <label for="" class="form-check-label">No</label>
                </div>
            </div>

            <div class="col-md-2">
                <div class="controls">
                    <label class="form-label">Grupo Sanguineo</label>
                </div>
                <select class="form-select border border-2" id="grupo_sanguineo" name="grupo_sanguineo">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div>

            <div class="col-md-2">
                <label class="form-label">Antiguedad</label>
                <input type="date" id="antiguedad" name="antiguedad" class="form-control border border-2">
            </div>

            <div class="col-md-4">
                <label class="form-label">Domicilio</label>
                <textarea type="text" id="domicilio" name="domicilio" minlength="1" maxlength="50" class="form-control 
                    border border-2" style="resize: none;" ></textarea>
            </div>

            <div class="col-md-4">
                <label class="form-label">Restricciones</label>
                <textarea type="text" id="restricciones" name="restricciones" class="form-control border border-2"
                    minlength="1" maxlength="100" style="resize: none;"></textarea>
            </div>

            <div class="col-12 p-4" style="text-align: center;">
                <input type="submit" class="form_input submit_radius btn btn-success center"
                    style="padding-left: 50px; padding-right: 50px;">
            </div>
        </form>
    </div>



    <script src="../javascripts/backHome.js"></script>
</body>

</html>