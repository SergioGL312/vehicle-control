<?php
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }

    include("../includes/header.php");
    echo selectHeader("Licencias");
?>
    <div class="conatainer p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                <form method="POST" action="CLicencias.php">
                    <div class="mb-1">
                        <label class="form-label" for="">Criterio</label>
                            <input class="form-control border border-2" type="text" id="criterio" name="criterio"
                                class="form-check-input border border-2">
                    </div>
                    <div class="col-3" style="width: 180px;">
                        <label class="form-label" for="">Atributo</label>
                    </div>

                    <div class="col-md-7">
                        <input type="radio" id="atributo" name="atributo" value="id" class="form-check-input border border-2">
                        <label class="form-label">Id</label>
                    </div>

                    <div class="col-md-7">
                        <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="tipo">
                        <label class="form-label">Tipo</label>
                    </div>

                    <div class="col-md-7">
                        <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="fecha_expedicion">
                        <label class="form-label">Fecha Expedicion</label>
                    </div>

                    <div class="col-md-7">
                        <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="fecha_vencimiento">
                        <label class="form-label">Fecha Vencimiento</label>
                    </div>

                    <div class="col-md-7">
                        <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="atributo_desconocido">
                        <label class="form-label">Atributo Desconocido</label>
                    </div>

                    <div class="col-md-7">
                        <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="observacion">
                        <label class="form-label">Observacion</label>
                    </div>

                    <div class="col-md-7">
                        <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="id_conductor">
                        <label class="form-label">Id Conductor</label>
                    </div>

                    <div class="col-md-7">
                        <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="foto">
                        <label class="form-label">foto</label>
                    </div>

                    <div class="col-12 p-4" style="text-align: center;">
                        <input class="form_input submit_radius btn btn-success center" type="submit" style="padding-left: 50px; padding-right: 50px;">
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>  
    <script src="../Javascripts/backHome.js"></script>

</body>

</html>