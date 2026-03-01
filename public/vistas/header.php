<?php
session_start();
$APP_NAME = "AgroFuturoONG";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $APP_NAME; ?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Farsan&display=swap" rel="stylesheet">
    <!-- Google Translate Widget Script -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'es',
                includedLanguages: 'en,fr,pt',
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <style>
        /* Ocultar el banner superior de Google */
        .goog-te-banner-frame.skiptranslate,
        .goog-te-banner {
            display: none !important;
        }

        body {
            top: 0px !important;
        }


        .goog-te-gadget {
            font-family: inherit !important;
            font-size: 0 !important;
            display: flex !important;
            align-items: center !important;
            margin: 0 !important;
        }

        .goog-te-gadget .goog-te-combo {
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
            width: 100% !important;
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            border: none !important;
            background: transparent !important;
            opacity: 0 !important;
            /* Totalmente invisible pero clicable */
            cursor: pointer !important;
            z-index: 20;
        }

        /* Contenedor personalizado para el widget */
        .translate-container {
            position: relative;
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 6px 12px;
            background: white;
            border-radius: 9999px;
            border: 1px solid #e5e7eb;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .translate-container:hover {
            border-color: #2facffff;
            background: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        /* Ocultar elementos de Google que no queremos */
        .goog-logo-link,
        .goog-te-gadget>span,
        .goog-te-gadget br {
            display: none !important;
        }

        /* Contenedor para el logo de Google manual o el que inyecte */
        .google-logo-custom {
            width: 20px;
            height: 20px;
            background: url('https://www.gstatic.com/images/branding/product/1x/translate_24dp.png') no-repeat center;
            background-size: contain;
        }

        #google_translate_element {
            height: 24px;
            display: flex;
            align-items: center;
        }

        /* Asegurar que el desplegable de Google esté por encima de todo */
        .goog-te-menu-frame {
            z-index: 99999999 !important;
        }

        .skiptranslate.goog-te-gadget {
            width: 100% !important;
            height: 100% !important;
        }
    </style>
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
                        <li><a class="text-gray-600 font-medium hover:text-green-700 transition-colors" href="index.php">Inicio</a></li>
                        <li><a class="text-gray-600 font-medium hover:text-green-700 transition-colors" href="ayuda.php">Solicitar Ayuda</a></li>
                        <li><a class="text-gray-600 font-medium hover:text-green-700 transition-colors" href="#">Apoyar</a></li>
                        <li><a class="text-gray-600 font-medium hover:text-green-700 transition-colors" href="contacto.php">Contacto</a></li>
                        <?php if (isset($_SESSION['username'])) : ?>
                            <?php if ($_SESSION['rol'] == 'admin') : ?>
                                <li><a class="text-gray-600 font-medium hover:text-green-700 transition-colors" href="admin.php">Admin</a></li>
                            <?php endif; ?>
                            <?php if ($_SESSION['rol'] == 'user') : ?>
                                <li><a class="text-gray-600 font-medium hover:text-green-700 transition-colors" href="perfil.php">Perfil</a></li>
                            <?php endif; ?>
                        <?php endif; ?>
                    </ul>
                </div>

                <div class="hidden lg:flex justify-end items-center gap-4">
                    <?php if (!isset($_SESSION['username'])) : ?>
                        <a href="login.php" class="px-6 py-2 border-2 border-green-700 text-green-700 font-semibold rounded-full hover:bg-green-700 hover:text-white transition-all duration-300">
                            Iniciar Sesión
                        </a>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['username'])) : ?>
                        <a href="../../app/controladores/logout.php" class="px-6 py-2 border-2 border-green-700 text-green-700 font-semibold rounded-full hover:bg-green-700 hover:text-white transition-all duration-300">
                            Cerrar Sesión
                        </a>
                    <?php endif; ?>

                    <!-- Google Translate Desktop Target -->
                    <div class="translate-wrapper ml-4" id="desktop-translate-target">
                        <div class="translate-container">
                            <div class="google-logo-custom"></div>
                            <div id="google_translate_element"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="mobile-menu" class="hidden lg:hidden fixed inset-0 w-screen h-screen flex-col justify-center items-center text-center bg-white z-50">
                <ul class="flex flex-col space-y-4">
                    <li><a class="text-gray-800 font-medium hover:text-green-700 block px-4 py-2" href="index.php">Inicio</a></li>
                    <li><a class="text-gray-600 hover:text-green-700 block px-4 py-2" href="ayuda.php">Solicitar Ayuda</a></li>
                    <li><a class="text-gray-600 hover:text-green-700 block px-4 py-2" href="#">Apoyar</a></li>
                    <li class="pt-2">
                        <a href="login.php" class="w-full px-6 py-2 bg-green-700 text-white font-semibold rounded-full hover:bg-green-800 transition-all duration-300 inline-block">Iniciar Sesión</a>
                    </li>

                  
                    <li class="pt-4 flex justify-center" id="mobile-translate-target">
                        
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <script>
        const menu = document.getElementById('mobile-menu');
        const button = document.getElementById('menu-button');
        const translateWidget = document.querySelector('.translate-container');
        const desktopTarget = document.getElementById('desktop-translate-target');
        const mobileTarget = document.getElementById('mobile-translate-target');

        function toggleMenu(e) {
            e.stopPropagation();
            const isHidden = menu.classList.contains('hidden');

            if (isHidden) {
                // Abrir: Mover widget al móvil
                mobileTarget.appendChild(translateWidget);
                menu.classList.remove('hidden');
                menu.classList.add('flex');
            } else {
                // Cerrar: Devolver widget al escritorio
                desktopTarget.appendChild(translateWidget);
                menu.classList.add('hidden');
                menu.classList.remove('flex');
            }
        }

        document.addEventListener('click', (e) => {
            if ((e.target === menu || !menu.contains(e.target)) && !button.contains(e.target)) {
                if (!menu.classList.contains('hidden')) {
                    desktopTarget.appendChild(translateWidget);
                    menu.classList.add('hidden');
                    menu.classList.remove('flex');
                }
            }
        });
    </script>


</body>

</html>