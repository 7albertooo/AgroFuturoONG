<?php

$env = parse_ini_file(__DIR__ . '/../../.env');

//Declaramos las variables de conexión
$host = $env['DB_HOST'];
$db_name = $env['DB_NAME'];
$user = $env['DB_USER'];
$password = $env['DB_PASS'];

    //Ejecutamos la estructura try para intentar ejecutar la conexión a la bd , sino nos muestra un error con el catch
    try {
        //Creamos la conexión segura con pdo a la bd, siendo mucho más seguro y evitando sqlInjection
        $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8mb4", $user, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

    } catch (PDOException $e) {

        echo "Error de conexion" . $e;

    };



?>