<?php
require '../../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// datos del formulario
$nombre = $_POST['nombre'] ?? '';
$email = $_POST['email'] ?? '';
$mensaje = $_POST['mensaje'] ?? '';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp-relay.brevo.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'a1f27d001@smtp-brevo.com';
    $mail->Password = '';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // remitente (IMPORTANTE: usa un dominio tuyo o uno verificado en Brevo)
    $mail->setFrom('albertoluisrodriguez90@gmail.com', 'Formulario web');

    // a quién llega
    $mail->addAddress('albertoluisrodriguez90@gmail.com');

    $mail->Subject = 'Nuevo mensaje de contacto';

    $mail->Body = "
    Nombre: $nombre
    Email: $email

    Mensaje:
    $mensaje
    ";

    $mail->send();
    header("Location: ../../public/vistas/contacto.php?mensaje=Enviado Correctamente");
    exit();
} catch (Exception $e) {
    header("Location: ../../public/vistas/contacto.php?mensaje=Error:  . $mail->ErrorInfo");
    exit();
}