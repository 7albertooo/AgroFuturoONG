<?php


    function guardarPago($con, $nombre, $email, $monto, $tipo){

    try{
        $sql = "INSERT INTO donaciones (nombre, email, monto_euros, estado, tipo) VALUES (?,?,?, 'pendiente', ?)";

        $stmt = $con->prepare($sql);

        $stmt->bind_param("ssds", $nombre, $email, $monto, $tipo);

        $stmt->execute();

    } catch(mysqli_sql_exception $e) {

        echo "ERROR " . $e->getMessage();

    }

    }




    function actualizarPago($con, $token, $estado, $fecha, $email){

    try{
        $sql = "UPDATE donaciones SET token = ?, estado = ?, fecha = ? WHERE email = ? AND estado = 'pendiente' AND token IS NULL";

        $stmt = $con->prepare($sql);

        $stmt->bind_param("ssss", $token, $estado, $fecha, $email);

        $stmt->execute();

    } catch(mysqli_sql_exception $e) {

        echo "ERROR " . $e->getMessage();

    }

    }


?>