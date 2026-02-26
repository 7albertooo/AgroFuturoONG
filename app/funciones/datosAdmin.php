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
    SELECT s.*, u.username as nombreUser
    FROM solicitud s
    INNER JOIN usuarios u ON u.id = s.id_usuario
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
       Paginación Créditos
========================== */

$crediPorPagina = 5;

/* Página actual */
$paginaCredi = isset($_GET['paginasCredi']) ? (int)$_GET['paginasCredi'] : 1;

/* Offset */
$inicioCredi = ($paginaCredi - 1) * $crediPorPagina;

/* Total créditos */
$sqlCountCredi = "SELECT COUNT(*) AS totalcredi FROM credito";
$resulCountCredi = mysqli_query($conexion, $sqlCountCredi);
$datosCountCredi = mysqli_fetch_assoc($resulCountCredi)['totalcredi'] ;

/* Total páginas */
$totalPaginasCredi = ceil($datosCountCredi / $crediPorPagina);

/* Créditos PAGINADOS */
$sqlCredi = "
    SELECT c.*, s.id_usuario, u.username as nombreUser
    FROM credito c
    INNER JOIN solicitud s ON s.id = c.id_solicitud
    INNER JOIN usuarios u ON u.id = s.id_usuario
    ORDER BY c.id DESC
    LIMIT $inicioCredi, $crediPorPagina
";
$resulCredi = mysqli_query($conexion, $sqlCredi);
$datosCredi = [];

while ($fila = mysqli_fetch_assoc($resulCredi)) {
    $datosCredi[] = $fila;
}

?>