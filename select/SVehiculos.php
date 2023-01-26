<?php
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }
    include("includes/headers.php");
    echo selectHeader("Vehiculos");
?>
    <div class="conatainer p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form method="POST" action="CVehiculos.php">
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
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="niv">
                            <label class="form-label">niv</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="tipo">
                            <label class="form-label">tipo</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="marca">
                            <label class="form-label">marca</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="modelo">
                            <label class="form-label">modelo</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="numero_serie">
                            <label class="form-label">numero_serie</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="clase">
                            <label class="form-label">clase</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="tipo_combustible">
                            <label class="form-label">tipo_combustible</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="numero_cilindros">
                            <label class="form-label">numero_cilindros</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="caballos_fuerza">
                            <label class="form-label">caballos_fuerza</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="tipo_carroceria">
                            <label class="form-label">tipo_carroceria</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="color">
                            <label class="form-label">color</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="transmision">
                            <label class="form-label">transmision</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="serie_motor">
                            <label class="form-label">serie_motor</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="capacidad">
                            <label class="form-label">capacidad</label>
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
