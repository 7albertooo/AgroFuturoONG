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

        case 'crearSolicitud':
            if (!isset($_SESSION['usuario_id'])) {
                header("Location: ../../public/vistas/login.php");
                exit();
            }
            $tipo = "credito"; // Solo se permiten créditos ahora
            $mensaje = $_POST['textoSolicitud'];
            
            // Nuevos campos
            $experiencia = isset($_POST['experiencia']) ? 1 : 0;
            $tiene_tierra = isset($_POST['tiene_tierra']) ? 1 : 0;
            $cantidad = isset($_POST['cantidad']) ? (int)$_POST['cantidad'] : 0;
            $edad = isset($_POST['edad']) ? (int)$_POST['edad'] : 0;

            $usuario_id = $_SESSION['usuario_id'];
            $resultado = crearSolicitud($conexion, $tipo, $mensaje, $experiencia, $tiene_tierra, $cantidad, $edad, $usuario_id);
            
            if ($resultado) {
                $idSoli = $resultado;
                $_SESSION['mensaje'][] = "Solicitud enviada correctamente.";

                $url_webhook = "https://24d2-88-98-119-213.ngrok-free.app/webhook/solicitud";
                
                $data = [
                    "tipo" => $tipo,
                    "descripcion" => $mensaje,
                    "usuario_id" => (int)$usuario_id,
                    "experiencia" => (bool)$experiencia,
                    "tiene_tierra" => (bool)$tiene_tierra,
                    "cantidad" => (int)$cantidad,
                    "edad" => (int)$edad,
                    "id_solicitud" => (int)$idSoli
                ];

                $ch = curl_init($url_webhook);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
                curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($ch, CURLOPT_TIMEOUT, 10);
                $result = curl_exec($ch);
                
                if (curl_errno($ch)) {
                    error_log('Error cURL webhook solicitud: ' . curl_error($ch));
                } else {
                    $response_data = json_decode($result, true);
                    
                    // Soporte para ambos formatos: {"porcentaje": 85} o solo el valor 85
                    $porcentaje = null;
                    if (is_array($response_data) && isset($response_data['porcentaje'])) {
                        $porcentaje = $response_data['porcentaje'];
                    } elseif (is_numeric($result)) {
                        $porcentaje = $result;
                    }

                    if ($porcentaje !== null) {
                        actualizarPorcentajeSolicitud($conexion, $idSoli, $porcentaje);
                    } else {
                        error_log("Respuesta del webhook no válida o falta el porcentaje: " . $result);
                    }
                }
                curl_close($ch);
            } else {
                error_log("Error al crear solicitud en base de datos.");
                $_SESSION['mensaje'][] = "Error al enviar la solicitud.";
            }
            header("Location: ../../public/vistas/ayuda.php");
            exit();

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