<?php
session_start();
include_once "../config/conexion/conexion.php";
include_once "../funciones/validaciones.php";
include_once "../funciones/loginF.php";

// Inicializamos errores en sesión
if(!isset($_SESSION["errores"])){
    $_SESSION["errores"] = [];
}

$errores = [];

if(isset($_POST["login"])){

    $nombreIngresado = sanear($_POST["nombreIngresado"]);
    $passwordIngresado = sanear($_POST["passwordIngresado"]);

    // Validaciones básicas
    if(empty($nombreIngresado)){
        $errores[] = "El usuario es obligatorio";
    }

    if(empty($passwordIngresado)){
        $errores[] = "La contraseña es obligatoria";
    }

    if(!empty($errores)){
        $_SESSION["errores"] = $errores;
        header("Location: ../../public/vistas/login.php");
        exit();
    }

    // Llamamos a la función para comprobar que el usuario es el mismo que se registró
    if(SeleccionarDatos($nombreIngresado, $passwordIngresado,$conexion)){
        
        //Si el login es correcto guardamos el usuario
        $_SESSION["username"]=$nombreIngresado;

        header("Location:../../public/vistas/login.php");
        exit();

    }else{
        //En caso de que el login sea incorrecto lo volvemos a enviar a la vista
        $_SESSION["errores"][]="El usuario o la contraseña no son correctos";
        header("Location: ../../public/vistas/login.php");
        exit();
    }
    //Recogemos el rol en caso de existir el usuario
    $rol=conseguirRol($nombreIngresado,$conexion);
}
?>