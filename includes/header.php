<?php
    function selectHeader($title) {
        return "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <script src='https://kit.fontawesome.com/5ba0cb994d.js' crossorigin='anonymous'></script>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'
                integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
            <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js'
                integrity='sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN'
                crossorigin='anonymous'></script>
            <title>Consulta $title</title>
        </head>
        <body>
            <header class='p-3' style='background: #1f1f1f;'>
                <div class='container'>
                    <div class='d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start'>
                        <ul class='nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0'>
                            <li><a href='#' class='nav-link px-2 text-white' style='font-size: 30px;'>Consulta $title</a>
                            </li>
                        </ul>
                        <div class='text-end'>
                            <button type='button' class='btn btn-danger' id='back-home'
                                style='width: 80px; padding-left: 10px;'>Regresar</button>
                        </div>
                    </div>
                </div>
            </header>";
    }

    function loginHeader() {
        return '<!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8" />
            <link rel="icon" type="image/x-icon" href="/assets/logo-vt.svg" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Login</title>

            <!-- <link rel="stylesheet" href="styles/styles-DriverLicense.css"> -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
                crossorigin="anonymous"></script>
        </head>';
    }

    function insert($title) {
        return "<!DOCTYPE html>
        <html lang='en'>
        
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <!-- <link rel='stylesheet' href='styles/styles-DriverLicense.css'> -->
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'
                integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
            <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js'
                integrity='sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN'
                crossorigin='anonymous'></script>
            <title>$title</title>
        </head>";
    }

    function update($title) {
        return "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'
                integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
            <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js'
                integrity='sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN'
                crossorigin='anonymous'></script>
            <title>Actualizar $title</title>
        </head>";
    }
?>