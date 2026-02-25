<?php

function sanear($dato) {

    return htmlspecialchars(trim($dato));

}


function validarDatos($datos)
{

    $errores = [];

    if (strlen($datos['username']) < 3) {
        $errores[] = "EL usuario debe contener como minimo 3 caracteres";
    }

    if (!preg_match("/[a-zA-Z0-9]/", $datos['username'])) {
        $errores[] = "EL usuario debe contener como minimo una minuscula, una mayuscula y un numero";
    }

    if (strlen($datos['password']) < 8) {
        $errores[] = "La contraseña debe contener como minimo 8 caracteres";
    }

    if (!preg_match("/[a-zA-Z0-9!#@]/", $datos['password'])) {
        $errores[] = "La contraseña debe contener como minimo una minuscula, una mayuscula, un numero y un caracter especial como !#@";
    }

    if (!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El email no tiene el formato valido";
    }

    return $errores;
}

function validarnombre($nombreIngresado){

    $errores = [];

    if (strlen($nombreIngresado['username']) < 3) {
        $errores[] = "EL usuario debe contener como minimo 3 caracteres";
    }

    if (!preg_match("/[a-zA-Z0-9]/", $nombreIngresado['username'])) {
        $errores[] = "EL usuario debe contener como minimo una minuscula, una mayuscula y un numero";
    }

    return $errores;
}

    function validarpassword($passwordIngresado){
    if (strlen($passwordIngresado['password']) < 8) {
        $errores[] = "La contraseña debe contener como minimo 8 caracteres";
    }

    if (!preg_match("/[a-zA-Z0-9!#@]/", $passwordIngresado['password'])) {
        $errores[] = "La contraseña debe contener como minimo una minuscula, una mayuscula, un numero y un caracter especial como !#@";
    }

    return $errores;
}

?>