<?php

function actualizarUser($con, $datos, $IDuser)
{

    $username = $datos['username'];
    $email = $datos['email'];
    $rol = $datos['rol'];


    if (!empty($datos['password'])) {

        $passwordHash = password_hash($datos['password'], PASSWORD_DEFAULT);

        $sql = "UPDATE usuarios 
                SET username = ?, email = ?, password = ?, rol = ?
                WHERE id = ?";

        $stmt = $con->prepare($sql);

        if (!$stmt) {
            die("Error en prepare UPDATE: " . $con->error);
        }

        $stmt->bind_param("ssssi", $username, $email, $passwordHash, $rol, $IDuser);
    } else {

        $sql = "UPDATE usuarios 
                SET username = ?, email = ?, rol = ?
                WHERE id = ?";

        $stmt = $con->prepare($sql);

        if (!$stmt) {
            die("Error en prepare UPDATE: " . $con->error);
        }
        $stmt->bind_param("sssi", $username, $email, $rol, $IDuser);
    }

    $resultado = $stmt->execute();

    $stmt->close();

    return $resultado;
}


function deleteUser($con, $IDuser)
{

    $sql = "DELETE FROM usuarios WHERE id = ?";

    $stmt = $con->prepare($sql);

    if (!$stmt) {
        die("Error en prepare DELETE: " . $con->error);
    }

    $stmt->bind_param("i", $IDuser);

    $resultado = $stmt->execute();

    $stmt->close();

    return $resultado;
}




function aceptarSoli($con, $monto, $IDsoli)
{
    // Cambiar estado de la solicitud
    $sql = "UPDATE solicitud
            SET estado = 'aprobada', fecha_resolucion = NOW()
            WHERE id = ?";
    $stmt = $con->prepare($sql);

    if (!$stmt) {
        return false;
    }

    $stmt->bind_param("i", $IDsoli);

    if (!$stmt->execute()) {
        $stmt->close();
        return false;
    }

    $stmt->close();

    // Crear nuevo crédito
    $sql = "INSERT INTO credito (id_solicitud, cantidad) VALUES (?, ?)";
    $stmt = $con->prepare($sql);

    if (!$stmt) {
        return false;
    }

    $stmt->bind_param("id", $IDsoli, $monto);

    if (!$stmt->execute()) {
        $stmt->close();
        return false;
    }

    $stmt->close();

    return true;
}

function denegarSoli($con, $IDsoli)
{

    // Cambiar estado de la solicitud
    $sql = "UPDATE solicitud
            SET estado = 'rechazada', fecha_resolucion = NOW()
            WHERE id = ?";

    $stmt = $con->prepare($sql);

    if (!$stmt) {
        die("Error en prepare UPDATE: " . $con->error);
    }

    $stmt->bind_param("i", $IDsoli);

    $resultado = $stmt->execute();

    $stmt->close();

    return $resultado;
}


function realizadoCredi($con, $IDcredi) {

    $sql = "UPDATE credito
          SET estado = 'realizado', fecha_envio = NOW()
          WHERE id = ?
    ";

    $stmt = $con->prepare($sql);

     if (!$stmt) {
        die("Error en prepare UPDATE: " . $con->error);
    }

    $stmt->bind_param("i", $IDcredi);

    $resultado = $stmt->execute();

    $stmt->close();

    return $resultado;

}
