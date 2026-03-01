<?php
session_start();
// 1. Detectar el idioma de la cookie (por defecto 'es')
$idioma = $_COOKIE['idioma'] ?? 'es';

// 2. Incluir el archivo que define el array $textos basado en $idioma_actual
include_once '../../app/config/textos.php'; 

// 3. Determinar el idioma opuesto para el botón
$idioma_siguiente = ($idioma === 'es') ? 'en' : 'es';
?>
<!DOCTYPE html>
<html lang="<?php echo $idioma; ?>">

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
            from { opacity: 0; }
            to { opacity: 1; }
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
                    <button id="menu-button" class="p-2 text-gray-600 hover:text-gray-900 focus:outline-none" type="button" onclick="toggleMenu(event)">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

                <div class="hidden lg:flex justify-center">
                    <ul class="flex space-x-8">
                        <li><a class="text-gray-600 font-medium hover:text-green-700 transition-colors" href="index.php"><?php echo $textos['nav']['inicio']; ?></a></li>
                        <li><a class="text-gray-600 font-medium hover:text-green-700 transition-colors" href="ayuda.php"><?php echo $textos['nav']['ayuda']; ?></a></li>
                        <li><a class="text-gray-600 font-medium hover:text-green-700 transition-colors" href="#"><?php echo $textos['nav']['apoyar']; ?></a></li>
                        <li><a class="text-gray-600 font-medium hover:text-green-700 transition-colors" href="contacto.php"><?php echo $textos['nav']['contacto']; ?></a></li>
                        <?php if(isset($_SESSION['username'])) :?>
                        <?php if($_SESSION['rol'] == 'admin') : ?>
                        <li><a class="text-gray-600 font-medium hover:text-green-700 transition-colors" href="admin.php"><?php echo $textos['nav']['admin']; ?></a></li>
                        <?php endif; ?>
                        <?php if($_SESSION['rol'] == 'user') : ?>
                        <li><a class="text-gray-600 font-medium hover:text-green-700 transition-colors" href="perfil.php"><?php echo $textos['nav']['perfil']; ?></a></li>
                        <?php endif; ?>
                        <?php endif; ?>
                    </ul>
                </div>

                <div class="hidden lg:flex justify-end items-center gap-4">
                    <?php if(!isset($_SESSION['username'])) :?>
                    <a href="login.php" class="px-6 py-2 border-2 border-green-700 text-green-700 font-semibold rounded-full hover:bg-green-700 hover:text-white transition-all duration-300">
                        <?php echo $textos['nav']['login']; ?>
                    </a>
                    <?php endif; ?>

                    <?php if(isset($_SESSION['username'])) :?>
                    <a href="../../app/controladores/logout.php" class="px-6 py-2 border-2 border-green-700 text-green-700 font-semibold rounded-full hover:bg-green-700 hover:text-white transition-all duration-300">
                        <?php echo $textos['nav']['logout']; ?>
                    </a>
                    <?php endif; ?>

                    
                    <form action="../../app/controladores/cookieC.php" method="POST" class="inline">
                        <input type="hidden" name="idioma" value="<?php echo $idioma_siguiente; ?>">
                        <button type="submit" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-700 font-bold hover:bg-green-100 hover:text-green-700 transition-all uppercase text-sm border border-gray-200">
                            <?php echo $idioma_siguiente; ?>
                        </button>
                    </form>
                </div>
            </div>

            <div id="mobile-menu" class="hidden lg:hidden fixed inset-0 w-screen h-screen flex-col justify-center items-center text-center bg-white z-50">
                <ul class="flex flex-col space-y-4">
                    <li><a class="text-gray-800 font-medium hover:text-green-700 block px-4 py-2" href="index.php"><?php echo $textos['nav']['inicio']; ?></a></li>
                    <li><a class="text-gray-600 hover:text-green-700 block px-4 py-2" href="ayuda.php"><?php echo $textos['nav']['ayuda']; ?></a></li>
                    <li><a class="text-gray-600 hover:text-green-700 block px-4 py-2" href="#"><?php echo $textos['nav']['apoyar']; ?></a></li>
                    <li class="pt-2">
                        <a href="login.php" class="w-full px-6 py-2 bg-green-700 text-white font-semibold rounded-full hover:bg-green-800 transition-all duration-300"><?php echo $textos['nav']['login']; ?></a>
                    </li>
                    <li class="pt-4">
                        <form action="../../app/controladores/cookieC.php" method="POST">
                            <input type="hidden" name="idioma" value="<?php echo $idioma_siguiente; ?>">
                            <button type="submit" class="text-sm font-bold text-green-700 uppercase underline">
                                Cambiar a <?php echo $idioma_siguiente; ?>
                            </button>
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