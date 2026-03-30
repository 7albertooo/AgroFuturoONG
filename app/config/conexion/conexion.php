<?php
require_once __DIR__ . '/../../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../../');
$dotenv->load();

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