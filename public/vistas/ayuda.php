<?php
include_once 'header.php';
?>

<section class="w-full  mx-auto p-10 flex flex-col items-center lg:min-h-150  justify-center gap-10 ">
    
    <!--Logo-->
    <div class="w-16 h-16 rounded-full bg-gray-100 flex items-center justify-center">
        <img src="../assets/hoja.png" alt="hoja" class="inline w-6 h-6 md:w-8 md:h-8">
    </div>

    <div class="w-200 h-175 border border-gray-300 rounded-lg shadow-lg flex flex-col items-center justify-center gap-20"
        style="border: 2px solid; 
            border-image: linear-gradient(to left, #22c55e, #166534) 1;">

    <h3 class="text-4xl font-bold bg-gradient-to-l from-green-500 to-green-800 text-transparent bg-clip-text">Solicitar Ayuda</h3>

    <form action="#" method="post" class="w-120 flex flex-col items-center h-100 gap-20">
    
        <h4 class="text-4xl font-bold bg-black bg-clip-text">Cuentenos,lo que usted necesita es...</h4>
        <!--Mensaje-->
            <textarea name="textoSolicitud" id="textoSolicitud" placeholder="Escriba su mensaje aquí..." class="w-full h-50 rounded-lg p-2 resize-none"  style="
            border: 2px solid;
            border-image: linear-gradient(to left, #22c55e, #166534) 1;"></textarea>
            <button type="submit" class="w-full bg-gradient-to-l from-green-500 to-green-800 hover:bg-gradient-to-l hover:from-green-600 hover:to-green-900 text-white font-medium py-3 rounded-lg transition text-center " name="solicitar">Enviar solicitud</button>

    </form>
    </div>



</section>