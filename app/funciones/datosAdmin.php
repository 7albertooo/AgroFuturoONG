<?php

require_once "../../app/config/conexion/conexion.php";

/* ==========================
   PAGINACIÓN USUARIOS
========================== */

$usuariosPorPagina = 5;

/* Página actual */
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;


/* Offset */
$inicio = ($pagina - 1) * $usuariosPorPagina;

/* Total usuarios (para paginación y cards) */
$sqlCountUsers = "SELECT COUNT(*) AS totalUsers FROM usuarios";
$resulCountUsers = mysqli_query($conexion, $sqlCountUsers);
$datosCountUsers = mysqli_fetch_assoc($resulCountUsers)['totalUsers'];

/* Total páginas */
$totalPaginas = ceil($datosCountUsers / $usuariosPorPagina);

/* Usuarios PAGINADOS */
$sqlUsers = "
    SELECT *
    FROM usuarios
    ORDER BY id DESC
    LIMIT $inicio, $usuariosPorPagina
";

$resulUsers = mysqli_query($conexion, $sqlUsers);
$datosUsers = [];

while ($fila = mysqli_fetch_assoc($resulUsers)) {
    $datosUsers[] = $fila;
}



/* ==========================
   PAGINACIÓN SOLICITUDES
========================== */

$soliPorPagina = 5;

/* Página actual */
$paginaSoli = isset($_GET['paginaSoli']) ? (int)$_GET['paginaSoli'] : 1;


/* Offset */
$inicioSoli = ($paginaSoli - 1) * $soliPorPagina;

/* Total solicitudes */
$sqlCountSoli = "SELECT COUNT(*) AS totalSoli FROM solicitud";
$resulCountSoli = mysqli_query($conexion, $sqlCountSoli);
$datosCountSoli = mysqli_fetch_assoc($resulCountSoli)['totalSoli'];

/* Total páginas */
$totalPaginasSoli = ceil($datosCountSoli / $soliPorPagina);

/* Solicitudes PAGINADAS */
$sqlSoli = "
    SELECT *
    FROM solicitud
    ORDER BY id DESC
    LIMIT $inicioSoli, $soliPorPagina
";

$resulSoli = mysqli_query($conexion, $sqlSoli);
$datoSoli = [];

while ($fila = mysqli_fetch_assoc($resulSoli)) {
    $datoSoli[] = $fila;
}

$sqlSoliPendinte = "SELECT COUNT(*) AS totalSoliPendiente FROM solicitud WHERE estado LIKE 'pendiente'";
$resulSoliPendiente = mysqli_query($conexion, $sqlSoliPendinte);
$datoSoliPendiente = mysqli_fetch_assoc($resulSoliPendiente)['totalSoliPendiente'];


/* ==========================
       OTROS DATOS
========================== */


$sqlCountSubven = "SELECT COUNT(*) AS totalSubven FROM solicitud";
$resulCountSubven = mysqli_query($conexion, $sqlCountSubven);
$datosCountSubven = mysqli_fetch_assoc($resulCountSubven)['totalSubven'] ;

?>