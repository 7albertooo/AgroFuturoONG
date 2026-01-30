<?php
//Incluimos el archivo de constantes
include_once '../../app/config/constantes.php';

//Incluimos el header
include_once 'header.php';
?>


<section class="max-w-screen mx-auto px-4 flex flex-col items-center min-h-210 md:min-h-240 lg:min-h-180 xl:min-h-190 lg:flex-row justify-center lg:items-center lg:gap-50 gap-10 ">


    <div class="text-center lg:text-start max-w-120">
        <h2 class="text-4xl font-bold text-gray-800 mb-1">Sembramos <span class="bg-gradient-to-r from-green-500 to-green-800 bg-clip-text text-transparent italic">esperanza</span> ;</h2>
        <h2 class="text-4xl font-bold text-gray-800 mb-1">cosechamos <span class="bg-gradient-to-r from-green-500 to-green-800 bg-clip-text text-transparent italic">futuro</span></h2>
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

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#16A34A" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

<section class="w-full mx-auto p-10 flex flex-col items-center lg:min-h-150  justify-center lg:items-center  gap-10 bg-linear-to-b from-[#16A34A] to-[#166534]">

    

    <div class="text-center max-w-120">
        <h2 class="text-3xl font-bold text-white mb-4">¿Cómo te ayudamos?</h2>
        <p class="text-lg text-gray-100 mb-4">Ofrecemos un programa integral para impulsar tu proyecto agrícola y mejorar tu economía familiar.</p>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-4 gap-6 justify-items-center pb-4">

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

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#166534" fill-opacity="1" d="M0,256L48,256C96,256,192,256,288,218.7C384,181,480,107,576,117.3C672,128,768,224,864,266.7C960,309,1056,299,1152,250.7C1248,203,1344,117,1392,74.7L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>

<section class="w-full mx-auto p-10 flex flex-col items-center lg:min-h-150  justify-center lg:items-center  gap-10 bg-linear-to-b from-gray-50 to-gray-100">

    <div class="text-center max-w-120">
        <h2 class="text-3xl font-bold bg-gradient-to-r from-green-500 to-green-800 bg-clip-text text-transparent mb-4">Proceso Simple</h2>
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


<section class="w-full mx-auto flex flex-col items-center gap-20 p-20 bg-white ">

        <h3 class="font-bold text-4xl text- text-center"> Galeria de <span class="bg-gradient-to-r from-green-500 to-green-800 bg-clip-text text-transparent mb-20 italic">Imagenes</span></h3>

    <div class="flex flex-col md:flex-row gap-10">
        <div class="h-120 w-80 ">
            <img src="../assets/pexels-anntarazevich-7299993.jpg" alt="" class="w-full h-full object-cover rounded-lg -rotate-5  hover:-rotate-0 hover:scale-105 transition-all duration-300">
        </div>

        <div class="h-120 w-80 ">
            <img src="../assets/pexels-c-t-phat-546614745-17915456.jpg" alt="" class="w-full h-full object-cover mr-2 rounded-lg -rotate-5  hover:-rotate-0 hover:scale-105 transition-all duration-300">
        </div>

        <div class="h-120 w-80 ">
            <img src="../assets/pexels-simon-kan-56314180-11534647.jpg" alt="" class="w-full h-full object-cover ml-2 rounded-lg rotate-5  hover:rotate-0 hover:scale-105 transition-all duration-300">
        </div>

        <div class="h-120 w-80 ">
            <img src="../assets/pexels-yankrukov-5478858.jpg" alt="" class="w-full h-full object-cover rounded-lg rotate-5  hover:rotate-0 hover:scale-105 transition-all duration-300">
        </div>
    </div>


</section>



<section class="w-full mx-auto p-10 flex flex-col items-center lg:min-h-130  justify-center lg:items-center bg-gray-100 gap-10 ">



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


<script>
    const carousel = document.getElementById("carousel");
    const total = carousel.children.length;
    let index = 0;

    document.getElementById("next").onclick = () => {
        index = (index + 1) % total;
        carousel.style.transform = `translateX(-${index * 100}%)`;
    };

    document.getElementById("prev").onclick = () => {
        index = (index - 1 + total) % total;
        carousel.style.transform = `translateX(-${index * 100}%)`;
    };
</script>