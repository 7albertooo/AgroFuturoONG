<?php
session_start();
include_once "../funciones/adminF.php";
include_once "../funciones/validaciones.php";
include_once "../config/conexion/conexion.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $accion = trim($_POST['accion']);

    switch ($accion) {

        case 'editarUser':

            $IDuser = (int)$_POST['idUser'];
            $datos = [
                'username' => sanear($_POST['username']),
                'email' => sanear($_POST['email']),
                'password' => $_POST['password'],
                'rol' => sanear($_POST['rol'])
            ];
        
                $resultado = actualizarUser($conexion, $datos, $IDuser);

                if ($resultado) {
                    $_SESSION['mensaje'][] = "Usuario actualizado correctamente.";
                    header("Location: ../../public/vistas/admin.php");
                    exit();
                } else {
                    $_SESSION['mensaje'][] = "Error al actualizar el usuario.";
                    header("Location: ../../public/vistas/admin.php");
                    exit();
                }
        


            break;

        case 'eliminarUser':
            $IDuser = (int)$_POST['idUser'];
            $resultado = deleteUser($conexion, $IDuser);
            if ($resultado) {
                $_SESSION['mensaje'][] = "Usuario eliminado correctamente.";
                header("Location: ../../public/vistas/admin.php");
                exit();
            } else {
                $_SESSION['mensaje'][] = "Error al eliminar el usuario.";
                header("Location: ../../public/vistas/admin.php");
                exit();
            }
            break;

        case 'aceptarSoli':
            $IDsoli = (int)$_POST['idSoli'];
            $monto = (float)$_POST['cantidad'];
            $resultado = aceptarSoli($conexion, $monto, $IDsoli);
            if ($resultado) {
                $_SESSION['mensaje'][] = "Solicitud aceptada correctamente.";
                header("Location: ../../public/vistas/admin.php");
                exit();
            } else {
                $_SESSION['mensaje'][] = "Error al aceptar la solicitud.";
                header("Location: ../../public/vistas/admin.php");
                exit();
            }
            break;

        case 'denegarSoli':
            $IDsoli = (int)$_POST['idSoli'];
            $resultado = denegarSoli($conexion, $IDsoli);
            if ($resultado) {
                $_SESSION['mensaje'][] = "Solicitud denegada correctamente.";
                header("Location: ../../public/vistas/admin.php");
                exit();
            } else {
                $_SESSION['mensaje'][] = "Error al denegar la solicitud.";
                header("Location: ../../public/vistas/admin.php");
                exit();
            }
            break;

        case 'realizadoCredi':
            $IDcredi = (int)$_POST['idCredi'];
            $resultado = realizadoCredi($conexion, $IDcredi);
            if ($resultado) {
                $_SESSION['mensaje'][] = "Crédito marcado como realizado.";
                header("Location: ../../public/vistas/admin.php");
                exit();
            } else {
                $_SESSION['mensaje'][] = "Error al marcar el crédito como realizado.";
                header("Location: ../../public/vistas/admin.php");
                exit();
            }
            break;
    }
}


header("Location: ../../public/vistas/admin.php");
exit();


?>