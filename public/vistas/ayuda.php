<?php
include_once 'header.php';
?>

<section class="w-full  mx-auto p-10 flex flex-col items-center lg:min-h-150  justify-center">
    
<!--Logo-->
  <div class="w-16 h-16 rounded-full bg-white flex items-center justify-center shadow-md z-10">
    <img src="../assets/hoja.png" alt="Logo" class="w-10 h-10">
  </div>

    <div class="w-200 h-175 border border-gray-300 rounded-lg shadow-lg flex flex-col items-center justify-center gap-20"
        style="border: 2px solid; 
            border-image: linear-gradient(to left, #22c55e, #166534) 1;">

    <h3 class="text-4xl font-bold bg-gradient-to-l from-green-500 to-green-800 text-transparent bg-clip-text">Solicitar Ayuda</h3>

    <form action="#" method="post" class="w-120 flex flex-col items-center h-100 gap-20">
        
    <!--Título tipo de ayuda-->
        <h4 class="text-2xl font-bold ">Tipo de ayuda</h4>
        <!--Tipo de ayuda-->
        
        <select name="tipo" id="tipo" class="w-full h-100 text-center border border-gray-300 rounded-lg shadow-lg"
        style="border: 2px solid; 
            border-image: linear-gradient(to left, #22c55e, #166534) 1;">
            <option value="credito">Crédito</option>
            <option value="equipo">Equipo</option>
        </select>
        

        <!--Mnesaje-->
            <textarea name="textoSolicitud" id="textoSolicitud" placeholder="Escriba su mensaje aquí..." class="w-full h-50 rounded-lg p-2 resize-none"  style="
            border: 2px solid;
            border-image: linear-gradient(to left, #22c55e, #166534) 1;"></textarea>
            <button type="submit" class="w-full bg-gradient-to-l from-green-500 to-green-800 hover:bg-gradient-to-l hover:from-green-600 hover:to-green-900 text-white font-medium py-3 rounded-lg transition text-center">Enviar solicitud</button>
        
    </form>
    </div>
</section>