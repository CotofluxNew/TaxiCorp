<?php

    //Recollim les dades per crear la connexió
    $hostname = 'localhost';
    $user = 'taxiCorp';
    $password = 'Taxi1234'; //local
    $database = 'taxiCorp';

    //Crear la connexió
    $conexion = mysqli_connect($hostname, $user, $password, $database) or trigger_error(mysqli_error($conexion), E_USER_ERROR);
    mysqli_set_charset($conexion, 'utf8');

?>