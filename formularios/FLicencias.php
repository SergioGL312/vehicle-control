<?php 
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }
    if ($_SESSION['rol'] == 'U') {
        header('Location: ../menu.php');
    }

    include('../includes/header.php');
    echo insert("Licencias");
?>


<body>
    <header class="p-3" style="background: #1f1f1f;">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white" style="font-size: 30px;">Licencias</a>
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
        <form class="row g-3" method="post" action="../insert/ILicencias.php" enctype="multipart/form-data">
            <div class="col-md-3">
                <label class="form-label" for="">Id</label>
                <input class="form-control border border-2" type="text" id="id" name="id" maxlength="10" required>
            </div>

            <div class="col-md-2">
                <div class="controls">
                    <label class="form-label" for="">Tipo</label>
                </div>
                <select class="form-select border border-2" id="tipo" name="tipo" required>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                </select>
            </div>

            <div class="col-md-3">
                <label class="form-label" for="">Fecha de Expedicion</label>
                <input class="form-control border border-2" type="date" id="fecha_expedicion" name="fecha_expedicion" required>
            </div>

            <div class="col-md-3">
                <label class="form-label" for="">Fecha de Vencimiento</label>
                <input class="form-control border border-2" type="date" id="fecha_vencimiento" name="fecha_vencimiento" required>
            </div>

            <div class="col-md-6">
                <label class="form-label" for="">Atributo Desconocido</label>
                <input class="form-control border border-2" type="text" id="atributo_desconocido"
                    name="atributo_desconocido" maxlength="10" required>
            </div>

            <div class="col-md-5">
                <label class="form-label" for="">Observacion</label>
                <input class="form-control border border-2" type="text" id="observacion" name="observacion"
                    maxlength="100">
            </div>

            <div class="col-md-5">
                <label class="form-label">Foto</label>
                <input type="file" class="form-control border border-2" id="inputGroupFile02" name="foto" required>
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">Id del Conductor</label>
                <input class="form-control border border-2" type="number" id="id_conductor" name="id_conductor" required>
            </div>

            <div class="col-12 p-4" style="text-align: center;">
                <input type="submit" class="form_input submit_radius btn btn-success center"
                    style="padding-left: 50px; padding-right: 50px;">
            </div>
        </form>
    </div>
    <script src="./Javascripts/backHome.js"></script>
</body>

</html>