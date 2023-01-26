<?php
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }

    include("includes/headers.php");
    echo selectHeader("Multas");
?>
    <div class="conatainer p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form method="POST" action="CMultas.php">
                        <div class="mb-1">
                            <label class="form-label" for="">Criterio</label>
                            <input class="form-control border border-2" type="text" id="criterio" name="criterio"
                                class="form-check-input border border-2">
                        </div>
                        <div class="col-3" style="width: 180px;">
                            <label class="form-label" for="">Atributo</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="folio">
                            <label class="form-label">folio</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="dia">
                            <label class="form-label">dia</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="mes">
                            <label class="form-label">mes</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="anio">
                            <label class="form-label">anio</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="hora">
                            <label class="form-label">hora</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="reporte_seccion">
                            <label class="form-label">reporte_seccion</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="nombre_via">
                            <label class="form-label">nombre_via</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="kilometro">
                            <label class="form-label">kilometro</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="direccion_sentido">
                            <label class="form-label">direccion_sentido</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="municipio">
                            <label class="form-label">municipio</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="referencia_lugar">
                            <label class="form-label">referencia_lugar</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="articulo_fundamento">
                            <label class="form-label">articulo_fundamento</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="motivo">
                            <label class="form-label">motivo</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="garantia_retenida">
                            <label class="form-label">garantia_retenida</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="convenio">
                            <label class="form-label">convenio</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="puesto_a_disposicion">
                            <label class="form-label">puesto_a_disposicion</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="calificacion_boleta">
                            <label class="form-label">calificacion_boleta</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="deposito_oficial">
                            <label class="form-label">deposito_oficial</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="observaciones_personal_operativo">
                            <label class="form-label">observaciones_personal_operativo</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="observaciones_conductor">
                            <label class="form-label">observaciones_conductor</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="numero_parte_accidente">
                            <label class="form-label">numero_parte_accidente</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="id_personal_operativo">
                            <label class="form-label">id_personal_operativo</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="id_tarjeta_circulacion">
                            <label class="form-label">id_tarjeta_circulacion</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="id_licencia">
                            <label class="form-label">id_licencia</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2" value="id_vehiculo">
                            <label class="form-label">id_vehiculo</label>
                        </div>

                        <div class="col-12 p-4" style="text-align: center;">
                            <input type="submit" class="form_input submit_radius btn btn-success center"
                                style="padding-left: 50px; padding-right: 50px;">
                        </div>
                    </form>
        </div>
    </div>
    <script src="../Javascripts/backHome.js"></script>

</body>
</html>


