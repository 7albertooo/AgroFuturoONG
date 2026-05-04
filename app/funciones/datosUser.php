<?php

require_once "../../app/config/conexion/conexion.php";

// Get current user ID from session
$user_id = $_SESSION['usuario_id'];

// User's profile data
$sqlUser = "SELECT * FROM usuarios WHERE id = ?";
$stmtUser = mysqli_prepare($conexion, $sqlUser);
mysqli_stmt_bind_param($stmtUser, "i", $user_id);
mysqli_stmt_execute($stmtUser);
$resultUser = mysqli_stmt_get_result($stmtUser);
$datosUser = mysqli_fetch_assoc($resultUser);

// User's requests count
$sqlCountUserSoli = "SELECT COUNT(*) AS totalUserSoli FROM solicitud WHERE id_usuario = ?";
$stmtCountSoli = mysqli_prepare($conexion, $sqlCountUserSoli);
mysqli_stmt_bind_param($stmtCountSoli, "i", $user_id);
mysqli_stmt_execute($stmtCountSoli);
$resultCountSoli = mysqli_stmt_get_result($stmtCountSoli);
$datosCountUserSoli = mysqli_fetch_assoc($resultCountSoli)['totalUserSoli'];

// User's pending requests
$sqlUserSoliPendiente = "SELECT COUNT(*) AS totalUserSoliPendiente FROM solicitud WHERE id_usuario = ? AND estado LIKE 'pendiente'";
$stmtSoliPend = mysqli_prepare($conexion, $sqlUserSoliPendiente);
mysqli_stmt_bind_param($stmtSoliPend, "i", $user_id);
mysqli_stmt_execute($stmtSoliPend);
$resultSoliPend = mysqli_stmt_get_result($stmtSoliPend);
$datoUserSoliPendiente = mysqli_fetch_assoc($resultSoliPend)['totalUserSoliPendiente'];

// User's credits count
$sqlCountUserCredi = "SELECT COUNT(*) AS totalUserCredi FROM credito c INNER JOIN solicitud s ON s.id = c.id_solicitud WHERE s.id_usuario = ?";
$stmtCountCredi = mysqli_prepare($conexion, $sqlCountUserCredi);
mysqli_stmt_bind_param($stmtCountCredi, "i", $user_id);
mysqli_stmt_execute($stmtCountCredi);
$resultCountCredi = mysqli_stmt_get_result($stmtCountCredi);
$datosCountUserCredi = mysqli_fetch_assoc($resultCountCredi)['totalUserCredi'];

// User's donations count
$sqlCountUserDona = "SELECT COUNT(*) AS totalUserDona FROM donaciones WHERE email = ?";
$stmtCountDona = mysqli_prepare($conexion, $sqlCountUserDona);
mysqli_stmt_bind_param($stmtCountDona, "s", $datosUser['email']);
mysqli_stmt_execute($stmtCountDona);
$resultCountDona = mysqli_stmt_get_result($stmtCountDona);
$datosCountUserDona = mysqli_fetch_assoc($resultCountDona)['totalUserDona'];

// User's requests list
$sqlUserSoli = "SELECT * FROM solicitud WHERE id_usuario = ? ORDER BY id DESC";
$stmtUserSoli = mysqli_prepare($conexion, $sqlUserSoli);
mysqli_stmt_bind_param($stmtUserSoli, "i", $user_id);
mysqli_stmt_execute($stmtUserSoli);
$resultUserSoli = mysqli_stmt_get_result($stmtUserSoli);
$datoUserSoli = [];
while ($fila = mysqli_fetch_assoc($resultUserSoli)) {
    $datoUserSoli[] = $fila;
}

// User's credits list
$sqlUserCredi = "SELECT c.* FROM credito c INNER JOIN solicitud s ON s.id = c.id_solicitud WHERE s.id_usuario = ? ORDER BY c.id DESC";
$stmtUserCredi = mysqli_prepare($conexion, $sqlUserCredi);
mysqli_stmt_bind_param($stmtUserCredi, "i", $user_id);
mysqli_stmt_execute($stmtUserCredi);
$resultUserCredi = mysqli_stmt_get_result($stmtUserCredi);
$datoUserCredi = [];
while ($fila = mysqli_fetch_assoc($resultUserCredi)) {
    $datoUserCredi[] = $fila;
}

// User's donations list
$sqlUserDona = "SELECT * FROM donaciones WHERE email = ? ORDER BY id DESC";
$stmtUserDona = mysqli_prepare($conexion, $sqlUserDona);
mysqli_stmt_bind_param($stmtUserDona, "s", $datosUser['email']);
mysqli_stmt_execute($stmtUserDona);
$resultUserDona = mysqli_stmt_get_result($stmtUserDona);
$datoUserDona = [];
while ($fila = mysqli_fetch_assoc($resultUserDona)) {
    $datoUserDona[] = $fila;
}

?>