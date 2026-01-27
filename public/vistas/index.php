<?php
//Incluimos el archivo de constantes
include_once '../../app/config/constantes.php';

//Incluimos el header
include_once 'header.php';
?>


<section class="max-w-screen mx-auto px-4 flex flex-col items-center min-h-210 md:min-h-240 lg:min-h-180 xl:min-h-215 lg:flex-row justify-center lg:items-center lg:gap-50 gap-10 ">


    <div class="text-center lg:text-start max-w-120">
        <h2 class="text-4xl font-bold text-gray-800 mb-1">Sembramos <span class="text-green-700">esperanza</span> ;</h2>
        <h2 class="text-4xl font-bold text-gray-800 mb-1">cosechamos <span class="text-green-700">futuro</span></h2>
        <p class="text-lg text-gray-600 mb-8">Apoyamos a comunidades rurales con agricultura sostenible y microcréditos para construir un desarrollo económico duradero.</p>
        <a href="#" class="px-6 py-3 bg-green-700 text-white font-semibold rounded-full hover:bg-green-800 transition-all duration-300">Solicitar Ayuda</a>
        <a href="#" class="px-6 py-2 border-2 border-green-700 text-green-700 font-semibold rounded-full hover:bg-green-700 hover:text-white transition-all duration-300">Apoyar</a>
    </div>

    </div>



    <div class="flex flex-col gap-4">

        <div class="flex flex-col md:flex-row justify-center items-start gap-4 ">
            <div class="w-60 p-4 text-center text-green-700 border-2 border-green-700 rounded hover:scale-105 transition-all duration-300">
                <h2 class="text-xl font-bold">2,500+</h2>
                <p class="text-gray-600">Beneficiarios</p>
            </div>
            <div class="w-60 p-4 text-center text-green-700 border-2 border-green-700 rounded hover:scale-105 transition-all duration-300">
                <h2 class="text-xl font-bold">€850K</h2>
                <p class="text-gray-600">En Microcréditos</p>
            </div>
        </div>

        <div class="flex flex-col md:flex-row justify-center items-start gap-4">
            <div class="w-60 p-4 text-center text-green-700 border-2 border-green-700 rounded hover:scale-105 transition-all duration-300">
                <h2 class="text-xl font-bold">45</h2>
                <p class="text-gray-600">Ciudades</p>
            </div>
            <div class="w-60 p-4 text-center text-green-700 border-2 border-green-700 rounded hover:scale-105 transition-all duration-300">
                <h2 class="text-xl font-bold">92%</h2>
                <p class="text-gray-600">Tasa de Éxito</p>
            </div>
        </div>

    </div>



</section>

<section class="w-full mx-auto p-10 flex flex-col items-center lg:min-h-150  justify-center lg:items-center  gap-10 bg-linear-to-b from-green-600 to-green-800">

    <div class="text-center max-w-120">
        <h2 class="text-3xl font-bold text-white mb-4">¿Cómo te ayudamos?</h2>
        <p class="text-lg text-gray-100 mb-4">Ofrecemos un programa integral para impulsar tu proyecto agrícola y mejorar tu economía familiar.</p>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-4 gap-6 justify-items-center">

        <div class="w-80 h-50 p-4 text-center text-gray-600 border-2 border-gray-300 shadow-sm shadow-black/5 hover:shadow-lg rounded hover:scale-105 transition-all duration-300">
            <div class="w-15 h-15 mx-auto mb-2">
                <img src="../assets/agSos.png" alt="" class="w-full h-full object-cover">
            </div>
            <h2 class="text-xl font-bold text-white">Agricultura Sostenible</h2>
            <p class="text-gray-100">Tecnicas de cultivo ecológicas adaptadas al clima local para maximizar tu producción.</p>
        </div>


        <div class="w-80 h-50 p-4 text-center text-gray-600 border-2 border-gray-300 shadow-sm shadow-black/5 hover:shadow-lg rounded hover:scale-105 transition-all duration-300">
            <div class="w-15 h-15 mx-auto mb-2">
                <img src="../assets/credito.png" alt="" class="w-full h-full object-cover">
            </div>
            <h2 class="text-xl font-bold text-white">Microcréditos</h2>
            <p class="text-gray-100">Acceso a financiamiento flexible para impulsar tu proyecto agrícola o emprendimiento.</p>
        </div>


        <div class="w-80 h-50 p-4 text-center text-gray-600 border-2 border-gray-300 shadow-sm shadow-black/5 hover:shadow-lg rounded hover:scale-105 transition-all duration-300">
            <div class="w-15 h-15 mx-auto mb-2">
                <img src="../assets/formacion.png" alt="" class="w-full h-full object-cover">
            </div>
            <h2 class="text-xl font-bold text-white">Formación Gratuita</h2>
            <p class="text-gray-100">Capacitación técnica y gestión agrícola para mejorar tus habilidades.</p>
        </div>


        <div class="w-80 h-50 p-4 text-center text-gray-600 border-2 border-gray-300 shadow-sm shadow-black/5 hover:shadow-lg rounded hover:scale-105 transition-all duration-300">
            <div class="w-15 h-15 mx-auto mb-2">
                <img src="../assets/comunidad.png" alt="" class="w-full h-full object-cover">
            </div>
            <h2 class="text-xl font-bold text-white">Comunidad</h2>
            <p class="text-gray-100">Únete a una red de agricultores que comparten conocimientos y experiencias.</p>
        </div>
    </div>


</section>

<section class="w-full mx-auto p-10 flex flex-col items-center lg:min-h-150  justify-center lg:items-center  gap-10 bg-gray-100  mb-10">

    <div class="text-center max-w-120">
        <h2 class="text-3xl font-bold text-green-700 mb-4">Proceso Simple</h2>
        <p class="text-lg text-gray-600 mb-8">En 4 sencillos pasos puedes acceder a nuestro programa de apoyo.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-6 justify-items-center">

        <div class="w-80 h-50 p-4 text-center text-gray-600 hover:scale-105 transition-all duration-300 ">
            <div class="w-15 h-15 mx-auto mb-2 border-2 border-green-700 rounded-full flex items-center justify-center">
                <h2 class="text-xl font-bold text-green-700">1</h2>
            </div>
            <h2 class="text-xl font-bold text-gray-800 mb-2">Solicita Ayuda</h2>
            <p class="text-gray-600">Envía tu solicitud con los datos de tu proyecto.</p>
        </div>


        <div class="w-80 h-50 p-4 text-center text-gray-600 hover:scale-105 transition-all duration-300">
            <div class="w-15 h-15 mx-auto mb-2 border-2 border-green-700 rounded-full flex items-center justify-center">
                <h2 class="text-xl font-bold text-green-700">2</h2>
            </div>
            <h2 class="text-xl font-bold text-gray-800 mb-2">Aprobación</h2>
            <p class="text-gray-600">Nuestra equipo evalúa tu solicitud y te notifica la aprobación.</p>
        </div>


        <div class="w-80 h-50 p-4 text-center text-gray-600 hover:scale-105 transition-all duration-300">
            <div class="w-15 h-15 mx-auto mb-2 border-2 border-green-700 rounded-full flex items-center justify-center">
                <h2 class="text-xl font-bold text-green-700">3</h2>
            </div>
            <h2 class="text-xl font-bold text-gray-800 mb-2">Formación</h2>
            <p class="text-gray-600">Completa los módulos de capacitación en línea.</p>
        </div>


        <div class="w-80 h-50 p-4 text-center text-gray-600 hover:scale-105 transition-all duration-300">
            <div class="w-15 h-15 mx-auto mb-2 border-2 border-green-700 rounded-full flex items-center justify-center">
                <h2 class="text-xl font-bold text-green-700">4</h2>
            </div>
            <h2 class="text-xl font-bold text-gray-800 mb-2">Recibe Apoyo</h2>
            <p class="text-gray-600">Obtén tu subvención o microcrédito.</p>
        </div>
    </div>

    <div class="text-center max-w-120">
        <a href="#" class="bg-green-700 text-white px-6 py-3 rounded-lg hover:bg-green-800 transition-colors duration-300">Comenzar Ahora</a>
    </div>

</section>

<section class="w-full mx-auto p-10 flex flex-col items-center lg:min-h-130  justify-center lg:items-center ">



    <div class="max-w-2xl flex flex-col items-center justify-center">

        <div class="w-15 h-15 mx-auto mb-4 hover:scale-105 transition-all duration-300">
            <img src="../assets/transformar.png" alt="" class="w-full h-full object-cover">
        </div>


        <h2 class="text-3xl font-bold text-green-700 mb-4 text-center">¿Listo para transformar tu futuro?</h2>
        <p class="text-lg text-gray-600 mb-6 text-center">Únete a nuestra comunidad de agricultores y emprendedores que están construyendo un mañana más prospero.</p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#" class="bg-green-700 text-white px-6 py-3 rounded-lg hover:bg-green-800 transition-colors duration-300">Enviar Solicitud</a>
            <a href="#" class="text-green-700 border border-green-700 px-6 py-3 rounded-lg hover:bg-green-700 hover:text-white transitions-colors duration-300">Ya tengo cuenta</a>
        </div>
    </div>


</section>

<?php include 'footer.php'; ?>