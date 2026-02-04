<?php

function crearCookie($valor)
{

    return setcookie(
        'idioma',
        $valor,
        time() + (60 * 60 * 24 * 365),
        '/'
    );
}
