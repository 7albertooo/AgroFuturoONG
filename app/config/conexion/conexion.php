<?php

$env = parse_ini_file(__DIR__ . '/../../.env');

//Declaramos las variables de conexión
$host = 'localhost';
$db_name = 'agrofuturo';
$user = 'root';
$password = '';

        
    $conexion = mysqli_connect($host, $user, $password, $db_name);

    
    if(!$conexion) {
        echo "Error de conexión: " . mysqli_connect_error();
    }



?>