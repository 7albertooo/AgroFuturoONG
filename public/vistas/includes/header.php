<?php
//Incluimos el archivo de constantes
include_once '../../app/config/constantes.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $APP_NAME; ?></title>
    <!-- Tailwind CSS (output file generated from style.css) -->
    <link rel="stylesheet" href="../../style/output.css">
    <link rel="stylesheet" href="../../style/style.css">
</head>

<body class="bg-gray-50">

    <header>
        <nav class="w-11/12 md:w-3/4 mx-auto bg-white rounded-full shadow-md mt-6 mb-6 p-4 flex items-center justify-between">
            <div class="container mx-auto flex flex-wrap items-center justify-between">

                <a class="text-xl font-bold text-gray-800" href="#"><?php echo $APP_NAME; ?></a>

                <!-- Mobile menu button -->
                <button class="md:hidden p-2 text-gray-600 hover:text-gray-900 focus:outline-none" type="button" aria-label="Toggle navigation" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <!-- Desktop Menu -->
                <div class="hidden md:flex flex-grow items-center justify-center">
                    <ul class="flex space-x-8">
                        <li>
                            <a class="text-gray-800 font-medium hover:text-green-600 transition-colors" href="#">Home</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-green-600 transition-colors" href="#">Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-green-600 transition-colors" href="#">Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-green-600 transition-colors" href="#">Link</a>
                        </li>
                    </ul>
                </div>

                <div class="hidden md:block">
                    <form action="../../../app/controladores/contLogin.php" method="post">
                        <button class="px-6 py-2 border-2 border-green-600 text-green-600 font-semibold rounded-full hover:bg-green-600 hover:text-white transition-all duration-300" type="submit">Iniciar Sesion</button>
                    </form>
                </div>
            </div>

            <!-- Mobile Menu (hidden by default) -->
            <div id="mobile-menu" class="hidden md:hidden w-full mt-4 bg-white rounded-xl shadow-lg p-4 absolute top-20 left-0 z-50">
                <ul class="flex flex-col space-y-4">
                    <li><a class="text-gray-800 font-medium hover:text-green-600 block px-4 py-2" href="#">Home</a></li>
                    <li><a class="text-gray-600 hover:text-green-600 block px-4 py-2" href="#">Link</a></li>
                    <li><a class="text-gray-600 hover:text-green-600 block px-4 py-2" href="#">Link</a></li>
                    <li><a class="text-gray-600 hover:text-green-600 block px-4 py-2" href="#">Link</a></li>
                    <li class="pt-2">
                        <form action="../../../app/controladores/contLogin.php" method="post" class="w-full">
                            <button class="w-full px-6 py-2 bg-green-600 text-white font-semibold rounded-full hover:bg-green-700 transition-all duration-300" type="submit">Iniciar Sesion</button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</body>

</html>