<?php

$env = parse_ini_file(__DIR__ . '/../../.env');

//Declaramos las variables de conexión
$host = $env['DB_HOST'];
$db_name = $env['DB_NAME'];
$user = $env['DB_USER'];
$password = $env['DB_PASS'];

        
    $conexion = mysqli_connect($host, $user, $password, $db_name);

    
    if(!$conexion) {
        echo "Error de conexión: " . mysqli_connect_error();
    }



?>