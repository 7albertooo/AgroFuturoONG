<?php

require_once "../../app/config/conexion/conexion.php";

$sqlUsers = "SELECT * FROM usuarios";
$resulUsers = mysqli_query($conexion, $sqlUsers);
$datosUsers = [];

while($fila = mysqli_fetch_assoc($resulUsers)) {
    $datosUsers[] = $fila;
}


$sqlSoli = "SELECT * FROM solicitud";
$resulSoli = mysqli_query($conexion, $sqlSoli);
$datoSoli = [];
while($fila = mysqli_fetch_assoc($resulSoli)) {
    $datoSoli[] = $fila;
}

$sqlCountUsers = "SELECT COUNT(*) AS totalUsers FROM usuarios";
$resulCountUsers = mysqli_query($conexion, $sqlCountUsers);
$datosCountUsers = mysqli_fetch_assoc($resulCountUsers)['totalUsers'];

$sqlCountSoli = "SELECT COUNT(*) AS totalSoli FROM solicitud";
$resulCountSoli = mysqli_query($conexion, $sqlCountSoli);
$datosCountSoli = mysqli_fetch_assoc($resulCountSoli)['totalSoli'] ;

$sqlSoliPendinte = "SELECT COUNT(*) AS totalSoliPendiente FROM solicitud WHERE estado LIKE 'pendiente'";
$resulSoliPendiente = mysqli_query($conexion, $sqlSoliPendinte);
$datoSoliPendiente = mysqli_fetch_assoc($resulSoliPendiente)['totalSoliPendiente'];

$sqlCountSubven = "SELECT COUNT(*) AS totalSubven FROM solicitud";
$resulCountSubven = mysqli_query($conexion, $sqlCountSubven);
$datosCountSubven = mysqli_fetch_assoc($resulCountSubven)['totalSubven'] ;

?>