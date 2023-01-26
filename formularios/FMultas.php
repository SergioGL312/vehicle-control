<?php 
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }
    if ($_SESSION['rol'] == 'U') {
        header('Location: ../menu.php');
    }
?>
<?php 
    include('../includes/header.php');
    echo insert("Multas");
?>

<body>
    <header class="p-3" style="background: #1f1f1f;">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white" style="font-size: 30px;">Multas</a>
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
        <form class="row g-3" method="get" action="../insert/IMultas.php">
            <div class="col-md-3">
                <label class="form-label" for="">Folio</label>
                <input class="form-control border border-2" type="text" id="folio" name="folio" maxlength="20" required>
            </div>

            <div class="col-md-2">
                <div class="controls">
                    <label class="form-label" for="">Dia</label>
                </div>
                <select class="form-select border border-2" name="dia" id="dia"></select>
            </div>

            <div class="col-md-2">
                <div class="controls">
                    <label class="form-label" for="">Mes</label>
                </div>
                <select class="form-select border border-2" name="mes" id="mes"></select>
            </div>

            <div class="col-md-2">
                <div class="controls">
                    <label class="form-label" for="">Año</label>
                </div>
                <select class="form-select border border-2" name="anio" id="anio"></select>
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">Hora</label>
                <input class="form-control border border-2" type="time" id="hora" name="hora">
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">Reporte Seccion</label>
                <input class="form-control border border-2" type="text" id="reporte_seccion" name="reporte_seccion"
                    minlength="5" maxlength="30">
            </div>

            <div class="col-md-3">
                <label class="form-label" for="">Nombre Via</label>
                <input class="form-control border border-2" type="text" id="nombre_via" name="nombre_via" minlength="5"
                    maxlength="50">
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">Kilometro</label>
                <input class="form-control border border-2" type="number" id="kilometro" name="kilometro">
            </div>
            <div class="col-md-2">
                <label class="form-label" for="">Direccion Sentido</label>
                <input class="form-control border border-2" type="text" id="direccion_sentido" name="direccion_sentido"
                    minlength="1" maxlength="10">
            </div>

            <div class="col-md-2">
                <div class="controls">
                    <label class="form-label" for="">Municipio</label>
                </div>
                <select class="form-select border border-2" id="municipio" name="municipio"></select>
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">Referencia del Lugar</label>
                <input class="form-control border border-2" type="text" id="referencia_lugar" name="referencia_lugar"
                    minlength="1" maxlength="50">
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">Articulo Fundamento</label>
                <input class="form-control border border-2" type="text" id="articulo_fundamento"
                    name="articulo_fundamento" minlength="1" maxlength="10">
            </div>

            <div class="col-md-5">
                <label class="form-label" for="">Motivo</label>
                <input class="form-control border border-2" type="text" id="motivo" name="motivo" minlength="1"
                    maxlength="100">
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">Garantia Retenida</label>
                <input class="form-control border border-2" type="text" id="garantia_retenida" name="garantia_retenida"
                    minlength="1" maxlength="30">
            </div>

            <div class="col-md-4">
                <label class="form-label" for="">Convenio</label>
                <input class="form-control border border-2" type="text" id="convenio" name="convenio" minlength="1"
                    maxlength="2">
            </div>

            <div class="col-md-3">
                <label class="form-label" for="">Puesto a Disposicion</label>
                <input class="form-control border border-2" type="text" id="puesto_a_disposicion"
                    name="puesto_a_disposicion" minlength="1" maxlength="2">
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">Calificacion Boleta</label>
                <input class="form-control border border-2" type="text" id="calificacion_boleta"
                    name="calificacion_boleta" minlength="1" maxlength="100">
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">Deposito Oficial</label>
                <input class="form-control border border-2" type="text" id="deposito_oficial" name="deposito_oficial"
                    minlength="1" maxlength="50">
            </div>

            <div class="col-md-6">
                <label class="form-label" for="">Observaciones Personal Operativo</label>
                <input class="form-control border border-2" type="text" id="observaciones_personal_operativo"
                    name="observaciones_personal_operativo" minlength="1" maxlength="100">
            </div>

            <div class="col-md-6">
                <label class="form-label" for="">Observaciones Conductor</label>
                <input class="form-control border border-2" type="text" id="observaciones_conductor"
                    name="observaciones_conductor" minlength="1" maxlength="100" style="width: 500px;">
            </div>

            <div class="col-md-3">
                <label class="form-label" for="">Numero Parte Accidente</label>
                <input class="form-control border border-2" type="number" id="numero_parte_accidente"
                    name="numero_parte_accidente">
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">Id Personal Operativo</label>
                <input class="form-control border border-2" type="number" id="id_personal_operativo"
                    name="id_personal_operativo">
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">IdTarjeta Circulacion</label>
                <input class="form-control border border-2" type="number" id="id_tarjeta_circulacion"
                    name="id_tarjeta_circulacion">
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">Id Licencia</label>
                <input class="form-control border border-2" type="text" id="id_licencia" name="id_licencia"
                    minlength="1" maxlength="100">
            </div>

            <div class="col-md-2">
                <label class="form-label" for="">Id Vehiculo</label>
                <input class="form-control border border-2" type="number" id="id_vehiculo" name="id_vehiculo">
            </div>

            <div class="col-12 p-4" style="text-align: center;">
                <input type="submit" class="form_input submit_radius btn btn-success center"
                    style="padding-left: 50px; padding-right: 50px;">
            </div>
        </form>
    </div>

    <script src="./Javascripts/backHome.js"></script>
    <script src="./Javascripts/dropdownTimer.js"></script>
    <script src="./Javascripts/municipalities.js"></script>
</body>

</html>