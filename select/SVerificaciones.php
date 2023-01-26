<?php 
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }
    include("includes/headers.php");
    echo selectHeader("Verificaciones");
?>
    <div class="conatainer p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form method="POST" action="CVerificaciones.php">
                    <div class="mb-1">
                            <label class="form-label" for="">Criterio</label>
                            <input class="form-control border border-2" type="text" id="criterio" name="criterio"
                                class="form-check-input border border-2">
                        </div>
                        <div class="col-3" style="width: 180px;">
                            <label class="form-label" for="">Atributo</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="id">
                            <label class="form-label">id</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="entidad_federativa">
                            <label class="form-label">entidad_federativa</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="municipio">
                            <label class="form-label">municipio</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="numero_centro_verificacion">
                            <label class="form-label">numero_centro_verificacion</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="numero_linea_verificacion">
                            <label class="form-label">numero_linea_verificacion</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="id_tecnico_verificador">
                            <label class="form-label">id_tecnico_verificador</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="fecha_expedicion">
                            <label class="form-label">fecha_expedicion</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="hora_entrada">
                            <label class="form-label">hora_entrada</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="hora_salida">
                            <label class="form-label">hora_salida</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="motivo_verificacion">
                            <label class="form-label">motivo_verificacion</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="folio_certificacion">
                            <label class="form-label">folio_certificacion</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="semestre">
                            <label class="form-label">semestre</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="fecha_vencimiento">
                            <label class="form-label">fecha_vencimiento</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="id_tarjeta_circulacion">
                            <label class="form-label">id_tarjeta_circulacion</label>
                        </div>

                        <div class="col-12 p-4" style="text-align: center;">
                            <input type="submit" class="form_input submit_radius btn btn-success center"
                                style="padding-left: 50px; padding-right: 50px;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  
    <script src="../Javascripts/backHome.js"></script>

</body>

</html>
