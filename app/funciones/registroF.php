<?php

function insertarDatosBD($con, $datos){

    $username = $datos['username'];
    $email = $datos['email'];
    $passwordHash = password_hash($datos['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (username, email, password) VALUES (?, ?, ?)";

    $stmt = $con->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $passwordHash);

    $resultado = $stmt->execute();

    $stmt->close(); 

    return $resultado;

}


function existeUser($con, $datos) {

    $username = $datos['username'];
    $email = $datos['email'];

    $sql = "SELECT id FROM usuarios WHERE username = ? OR email = ? LIMIT 1";

    $stmt = $con->prepare($sql);

    $stmt -> bind_param("ss", $username, $email);

    $stmt->execute();

    $stmt->store_result();

    $existe = $stmt->num_rows > 0;

    $stmt ->close();

    return $existe;

}

