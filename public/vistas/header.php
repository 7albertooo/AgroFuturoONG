<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $APP_NAME; ?></title>
    <link href="../assets/style/styles.css" rel="stylesheet">
</head>

<body class="bg-gray-50 relative min-h-screen overflow-x-hidden">

    <header>
        <nav class="w-11/12 md:w-3/4 mx-auto bg-white rounded-full shadow-md mt-6 mb-6 px-6 py-4 flex items-center justify-between">
            <div class="w-full grid grid-cols-2 lg:grid-cols-3 items-center">

                <!-- Logo: Column 1 -->
                <div class="flex justify-start">
                    <a class="text-xl font-bold text-green-600" href="index.php">
                        <?php echo $APP_NAME; ?>
                    </a>
                </div>

                <!-- Mobile menu button (Only visible on mobile, takes col 2 in 2-col layout) -->
                <div class="flex justify-end lg:hidden">
                    <button id="menu-button" class="p-2 text-gray-600 hover:text-gray-900 focus:outline-none" type="button" aria-label="Toggle navigation" onclick="toggleMenu(event)">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

                <!-- Desktop Menu: Column 2 -->
                <div class="hidden lg:flex justify-center">
                    <ul class="flex space-x-8">
                        <li>
                            <a class="text-gray-600 font-medium hover:text-green-600 active:text-green-600 transition-colors" href="index.php">Inicio</a>
                        </li>
                        <li>
                            <a class="text-gray-600 font-medium hover:text-green-600 active:text-green-600 transition-colors" href="#">Solicitar Ayuda</a>
                        </li>
                        <li>
                            <a class="text-gray-600 font-medium hover:text-green-600 active:text-green-600 transition-colors" href="#">Apoyar</a>
                        </li>
                    </ul>
                </div>

                <!-- Action Button: Column 3 -->
                <div class="hidden lg:flex justify-end">
                    <form action="../../../app/controladores/contLogin.php" method="post">
                        <button class="px-6 py-2 border-2 border-green-600 text-green-600 font-semibold rounded-full hover:bg-green-600 hover:text-white transition-all duration-300" type="submit">Iniciar Sesion</button>
                    </form>
                </div>
            </div>

            <!-- Mobile Menu (hidden by default) -->
            <div id="mobile-menu" class="hidden lg:hidden fixed inset-0 w-screen h-screen flex-col justify-center items-center text-center bg-white z-50">
                <ul class="flex flex-col space-y-4">
                    <li><a class="text-gray-800 font-medium hover:text-green-600 block px-4 py-2" href="#">Inicio</a></li>
                    <li><a class="text-gray-600 hover:text-green-600 block px-4 py-2" href="#">Solicitar Ayuda</a></li>
                    <li><a class="text-gray-600 hover:text-green-600 block px-4 py-2" href="#">Apoyar</a></li>
                    <li class="pt-2">
                        <form action="../../../app/controladores/contLogin.php" method="post" class="w-full">
                            <button class="w-full px-6 py-2 bg-green-600 text-white font-semibold rounded-full hover:bg-green-700 transition-all duration-300" type="submit">Iniciar Sesion</button>
                        </form>
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