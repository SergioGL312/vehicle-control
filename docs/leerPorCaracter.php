<?php
    $open = fopen('file.txt','r');
    while (!feof($open)) {
        $getTextLine = fgets($open);
        echo $getTextLine;
    }

    fclose($open);
?>