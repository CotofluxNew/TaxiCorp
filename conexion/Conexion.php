<?php

    //Recollim les dades per crear la connexió
    $hostname = 'localhost';
    $user = 'taxiCorp';
    $password = 'Taxicorp1234'; //local
    $database = 'taxicorp';

    //Crear la connexió
    $conexion = mysqli_connect($hostname, $user, $password, $database) or trigger_error(mysqli_error($conexion), E_USER_ERROR);
    mysqli_set_charset($conexion, 'utf8');

?>