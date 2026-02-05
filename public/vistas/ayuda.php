<?php
include_once 'header.php';
?>

<section class="w-full mx-auto p-10 flex flex-col items-center lg:min-h-150  justify-center">
    <div class="w-200 h-175 border border-gray-300 rounded-lg shadow-lg flex flex-col items-center justify-center gap-20">

    <h3 class="text-4xl font-bold bg-gradient-to-l from-green-500 to-green-800 text-transparent bg-clip-text">Solicitar Ayuda</h3>

    <form action="#" method="post" class="w-120 flex flex-col items-center h-100 gap-20">
        
    <!--Título tipo de ayuda-->
        <h4 class="text-2xl font-bold ">Tipo de ayuda</h4>
        <!--Tipo de ayuda-->
        <select name="tipo" id="tipo" class="w-full h-20 text-center border border-gray-300 rounded-lg shadow-lg">
            <option value="credito">Crédito</option>
            <option value="equipo">Equipo</option>
        </select>
        <textarea name="textoSolicitud" id="textoSolicitud" placeholder="Escriba su mensaje aquí..." class="w-full border border-gray-300 rounded-lg shadow-lg"></textarea>
        <button type="submit" class="w-full bg-gradient-to-l from-green-500 to-green-800 hover:bg-gradient-to-l hover:from-green-600 hover:to-green-900 text-white font-medium py-3 rounded-lg transition text-center">Enviar solicitud</button>
    </form>
    </div>
</section>