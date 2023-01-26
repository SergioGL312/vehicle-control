<?php
    $manejador = fopen("file.txt", "r");

    while ($line = fgets($manejador)) {
    fclose($manejador);

?>
