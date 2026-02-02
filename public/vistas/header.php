<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $APP_NAME; ?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Farsan&display=swap" rel="stylesheet">
    <style type="text/tailwindcss">

        .suse-mono-regular {
            font-family: "SUSE Mono", sans-serif;
            font-optical-sizing: auto;
            font-weight: 300;
            font-style: normal;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                }
             to {
                 opacity: 1;
                }
        }

        .animate-fadeIn {
            animation: fadeIn 0.8s ease forwards;
        }
      
    </style>

</head>

<body class="bg-gray-50 relative overflow-x-hidden suse-mono-regular justify-center items-center animate-fadeIn">

    <header>
        <nav class="w-11/12 md:w-3/4 mx-auto bg-white rounded-full shadow-md mt-6 px-6 py-4 flex items-center justify-between">
            <div class="w-full grid grid-cols-2 lg:grid-cols-3 items-center">


                <div class="flex justify-start">
                    <a class="text-xl font-bold bg-gradient-to-r from-emerald-400 to-green-800 bg-clip-text text-transparent" href="index.php">
                        <img src="../assets/hoja.png" alt="hoja" class="inline w-6 h-6 md:w-8 md:h-8">
                        <?php echo $APP_NAME; ?>
                    </a>
                </div>


                <div class="flex justify-end lg:hidden">
                    <button id="menu-button" class="p-2 text-gray-600 hover:text-gray-900 focus:outline-none" type="button" aria-label="Toggle navigation" onclick="toggleMenu(event)">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>


                <div class="hidden lg:flex justify-center">
                    <ul class="flex space-x-8">
                        <li>
                            <a class="text-gray-600 font-medium hover:text-green-700 active:text-green-700 transition-colors" href="index.php">Inicio</a>
                        </li>
                        <li>
                            <a class="text-gray-600 font-medium hover:text-green-700 active:text-green-700 transition-colors" href="#">Solicitar Ayuda</a>
                        </li>
                        <li>
                            <a class="text-gray-600 font-medium hover:text-green-700 active:text-green-700 transition-colors" href="#">Apoyar</a>
                        </li>
                        <li>
                            <a class="text-gray-600 font-medium hover:text-green-700 active:text-green-700 transition-colors" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                </div>


                <div class="hidden lg:flex justify-end gap-2">
                    <a href="login.php" class="px-6 py-2 border-2 border-green-700 text-green-700 font-semibold rounded-full hover:bg-green-700 hover:text-white transition-all duration-300">Iniciar Sesión</a>
                    <a href="registro.php" class="px-6 py-2 border-2 border-green-700 text-green-700 font-semibold rounded-full hover:bg-green-700 hover:text-white transition-all duration-300">Registrarse</a>
                    
                </div>
            </div>


            <div id="mobile-menu" class="hidden lg:hidden fixed inset-0 w-screen h-screen flex-col justify-center items-center text-center bg-white z-50">
                <ul class="flex flex-col space-y-4">
                    <li><a class="text-gray-800 font-medium hover:text-green-700 block px-4 py-2" href="index.php">Inicio</a></li>
                    <li><a class="text-gray-600 hover:text-green-700 block px-4 py-2" href="#">Solicitar Ayuda</a></li>
                    <li><a class="text-gray-600 hover:text-green-700 block px-4 py-2" href="#">Apoyar</a></li>
                    <li class="pt-2">
                        <a href="login.php" class="w-full px-6 py-2 bg-green-700 text-white font-semibold rounded-full hover:bg-green-800 transition-all duration-300">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <script>
        const menu = document.getElementById('mobile-menu');
        const button = document.getElementById('menu-button');

        function toggleMenu(e) {
            e.stopPropagation();
            menu.classList.toggle('hidden');
            menu.classList.toggle('flex');
        }

        document.addEventListener('click', (e) => {
            // Cerramos si:
            // 1. El clic es directamente en el fondo del menú (e.target === menu)
            // 2. O el clic es totalmente fuera del menú y del botón
            if ((e.target === menu || !menu.contains(e.target)) && !button.contains(e.target)) {
                menu.classList.add('hidden');
                menu.classList.remove('flex');
            }
        });
    </script>


</body>

</html>