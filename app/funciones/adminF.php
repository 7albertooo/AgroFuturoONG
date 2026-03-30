

<?php

function crearSolicitud($con, $tipo, $mensaje, $experiencia, $tiene_tierra, $cantidad, $edad, $id_usuario = null) {
    $sql = "INSERT INTO solicitud (tipo, texto, id_usuario, experiencia, tiene_tierra, cantidad, edad, estado, fecha_envio) 
            VALUES (?, ?, ?, ?, ?, ?, ?, 'pendiente', NOW())";
    $stmt = $con->prepare($sql);
    if (!$stmt) {
        die("Error en prepare INSERT: " . $con->error);
    }
    // Bind parameters: s=string, i=int, d=double
    // tipo(s), texto(s), id_usuario(i), experiencia(i), tiene_tierra(i), cantidad(i), edad(i)
    $stmt->bind_param("ssiiiii", $tipo, $mensaje, $id_usuario, $experiencia, $tiene_tierra, $cantidad, $edad);
    $resultado = $stmt->execute();
    
    $insert_id = $con->insert_id;
    $stmt->close();
    
    return $resultado ? $insert_id : false;
}

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

function actualizarPorcentajeSolicitud($con, $idSoli, $porcentaje) {
    $sql = "UPDATE solicitud SET porcentaje = ? WHERE id = ?";
    $stmt = $con->prepare($sql);
    if (!$stmt) {
        return false;
    }
    $stmt->bind_param("di", $porcentaje, $idSoli);
    $resultado = $stmt->execute();
    $stmt->close();
    return $resultado;
}
