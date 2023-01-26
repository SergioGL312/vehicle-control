<?php
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }
    include("../includes/header.php");
    echo selectHeader("Conductores");
?>
    <div class="conatainer p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form method="POST" action="CConductores.php">
                        <div class="mb-1">
                            <label class="form-label" for="">Criterio</label>
                            <input class="form-control border border-2" type="text" id="criterio" name="criterio"
                                class="form-check-input border border-2">
                        </div>
                        <div class="col-3" style="width: 180px;">
                            <label class="form-label" for="">Atributo</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2"
                                value="id">
                            <label class="form-label">Id</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2"
                                value="nombre">
                            <label class="form-label">Nombre</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2"
                                value="apellido_paterno">
                            <label class="form-label">Apellido Paterno</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2"
                                value="apellido_materno">
                            <label class="form-label">apellido_materno</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2"
                                value="domicilio">
                            <label class="form-label">domicilio</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2"
                                value="fecha_nacimiento">
                            <label class="form-label">fecha_nacimiento</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2"
                                value="sexo">
                            <label class="form-label">sexo</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2"
                                value="firma">
                            <label class="form-label">firma</label>
                        </div>
                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2"
                                value="num_emergencia">
                            <label class="form-label">num_emergencia</label>
                        </div>
                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2"
                                value="donador">
                            <label class="form-label">donador</label>
                        </div>
                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2"
                                value="antiguedad">
                            <label class="form-label">antiguedad</label>
                        </div>
                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2"
                                value="grupo_sanguineo">
                            <label class="form-label">grupo_sanguineo</label>
                        </div>

                        <div class="col-md-7">
                            <input type="radio" id="atributo" name="atributo" class="form-check-input border border-2"
                                value="restricciones">
                            <label class="form-label">restricciones</label>
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
    <script src="../javascripts/backHome.js"></script>

</body>

</html>