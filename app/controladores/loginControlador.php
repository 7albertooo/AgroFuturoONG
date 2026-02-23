<?php
session_start();
include_once "../funciones/validaciones.php";
//Inicializamos las sesiones
if(!isset($_SESSION["errores"])){
    $_SESSION["errores"]=[];
}

//Inicializamos los errores
$errores=[];

//Recogemos los datos enviados por el login
if(isset($_POST["login"])){
    
    //Recogemos el nombre enviado
    $nombreIngresado=sanear($_POST["username"]);

    //Recogemos la contraseña ingresada
    $passwordIngresado=sanear($_POST["password"]);

    //Validamos los datos del nombre
    $nombreIngresado=validarnombre($nombreIngresado);


    //Validamos los datos de la contraseña
    $passwordIngresado=validarpassword($passwordIngresado);


    //Si existen errores los recogemos en una sesión
    if(!empty($errores)){
    
        $_SESSION["errores"]=$errores;
        header("Location:../vistas/login.php");
        exit();

    }else{
        //Cogemos el array con los datos del registro
        $usuario=include("datos.php");

        $encontrado=false;

        //Comparamos los datos con los ingresados en el login
        foreach($usuario as $u){
            if($u['username'] === $nombreIngresado && $u['password'] === $passwordIngresado){
        
        $encontrado=true;
        //Guardamos este usuario en una sesión
        $_SESSION['usuario']=[
            "username"=>$u['username'],
            "password"=>$u['password']
        ];
        break;

            }
        }

    if($encontrado){
        echo "Nombre y contraseña son correctos.Bienvenido";
    }else{
        echo "Nombre o contraseña son incorrectos";
    } 
    }
}
?>