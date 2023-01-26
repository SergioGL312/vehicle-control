<?php 
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }
    include("includes/headers.php");
    echo selectHeader("Tarjetas de circulación");
?>
    <div class="conatainer p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form method="POST" action="CTarjetas_circulacion.php">
                    <div class="mb-1">
                            <label class="form-label" for="">Criterio</label>
                            <input class="form-control border border-2" type="text" id="criterio" name="criterio"
                                class="form-check-input border border-2">
                        </div>
                        <div class="col-3" style="width: 180px;">
                            <label class="form-label" for="">Atributo</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo"  value="id">
                            <label class="form-label">id</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo"  value="tipo_servicio">
                            <label class="form-label">tipo_servicio</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo"  value="numero_constancia_inscripcion">
                            <label class="form-label">numero_constancia_inscripcion</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo"  value="servicio">
                            <label class="form-label">servicio</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo"  value="origen">
                            <label class="form-label">origen</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo"  value="folio">
                            <label class="form-label">folio</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo"  value="fecha_vencimiento">
                            <label class="form-label">fecha_vencimiento</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo"  value="placa">
                            <label class="form-label">placa</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo"  value="cve_vehicular">
                            <label class="form-label">cve_vehicular</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo"  value="uso">
                            <label class="form-label">uso</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo"  value="operacion">
                            <label class="form-label">operacion</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo"  value="fecha_operacion">
                            <label class="form-label">fecha_operacion</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo"  value="oficina_expendidora">
                            <label class="form-label">oficina_expendidora</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo"  value="movimiento">
                            <label class="form-label">movimiento</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo"  value="rfa">
                            <label class="form-label">rfa</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo"  value="id_vehiculo">
                            <label class="form-label">id_vehiculo</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo"  value="id_propietario">
                            <label class="form-label">id_propietario</label>
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
