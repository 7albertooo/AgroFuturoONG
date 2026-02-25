<?php

session_start();

require_once "../config/conexion/conexion.php";
require_once "../funciones/registroF.php";
require_once "../funciones/validaciones.php";


if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $datos = [
        'username' => sanear($_POST['username'] ?? ''),
        'email' => sanear($_POST['email'] ?? ''),
        'password' => $_POST['password'] ?? ''
    ];

    $errores = validarDatos($datos);

    if(!empty($errores)) {

        $_SESSION['errores'] = $errores;
        header("Location: ../../public/vistas/registro.php");
        exit();

    } else {

        $existeUser = existeUser($conexion, $datos);


        if($existeUser) {
            
            $_SESSION['errores'][] = "Ese nombre de usuario o correo ya está registrado";
            header("Location: ../../public/vistas/registro.php");
            exit();

        }else {

            if(insertarDatosBD($conexion, $datos)){
                $_SESSION['mensaje'] = "Registro exitoso!!";
                header("Location: ../../public/vistas/login.php");
                exit();
            } else {
                $_SESSION['errores'][] = "No se puedo registrar";
                header("Location: ../../public/vistas/registro.php");
                exit();
            }


        }

    }



}

header("Location: ../../public/vistas/registro.php");
exit();


?>