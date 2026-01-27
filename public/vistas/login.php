<?php
//Incluimos el archivo de constantes
include_once '../../app/config/constantes.php';

//Incluimos el header
include_once 'header.php';
?>

<section class="max-w-screen mx-auto px-4 flex flex-col items-center min-h-180 md:min-h-240 lg:min-h-130 xl:min-h-200 lg:flex-row justify-center lg:items-center">


    <div class="text-center w-100 border-2 border-gray-100 p-10 rounded-lg shadow-lg">

        <form action="#" method="post">
            <img src="../assets/hoja.png" alt="hoja" class="mx-auto w-16 h-16 animate-bounce [animation-iteration-count:1] [animation-fill-mode:forwards] duration-700 ">
            <h2 class="text-3xl font-bold bg-gradient-to-r from-emerald-400 to-green-800 bg-clip-text text-transparent mb-6">Iniciar Sesión</h2>
            <div class="mb-6">
                <label for="username" class="block text-gray-700 mb-2 text-start">Usuario</label>
                <input type="text" id="username" name="username" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-700" required>
            </div>
            <div class="mb-8">
                <label for="password" class="block text-gray-700 mb-2 text-start">Contraseña</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-700" required>
            </div>
            <button type="submit" class="w-full px-6 py-3 bg-green-700 text-white font-semibold rounded-full hover:bg-green-800 transition-all duration-300">Iniciar Sesión</button>
        </form>

        <div class="mt-4 text-center max-w-80 mx-auto">
        <p>¿No tienes cuenta? <a href="#" class="text-green-700 hover:text-green-800">Regístrate aquí</a></p>
        </div>

    </div>
</section>