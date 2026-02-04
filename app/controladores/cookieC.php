<?php

include_once '../funciones/cookieF.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $idioma = trim(htmlspecialchars($_POST['idioma']));

    if(crearCookie($idioma)) {
        header('Location: ' . $_SERVER['HTTP_REFERER'] ?? '../../public/vistas/index.php');
        exit();
    }else {
        error_log("No se puedo guardar las preferencias de idioma");
        header('Location: ' . $_SERVER['HTTP_REFERER'] ?? '../../public/vistas/index.php');
        exit();
    }



}


?>