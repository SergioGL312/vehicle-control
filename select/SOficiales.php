<?php
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }
    include("includes/headers.php");
    echo selectHeader("Oficiales");
?>
    <div class="conatainer p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form method="POST" action="COficiales.php">
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
                            <label class="form-label">Id</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="nombre">
                            <label class="form-label">Nombre</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="apellido_paterno">
                            <label class="form-label">Apellido Paterno</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="apellido_materno">
                            <label class="form-label">Apellido Materno</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="grupo">
                            <label class="form-label">Grupo</label>
                        </div>

                        <div class="col-md-7">
                            <input class="form-check-input border border-2" type="radio" id="atributo" name="atributo" class="form_input" value="firma">
                            <label class="form-label">Firma</label>
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