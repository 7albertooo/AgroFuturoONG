<?php
//Iniciamos sesion
session_start();

$mensajeError = $_SESSION["errores"] ?? null;
unset($_SESSION["errores"]);

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
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false
            }, 'google_translate_element');

            setTimeout(function() {
                const combo = document.querySelector('.goog-te-combo');
                const wrapper = document.getElementById('translate_container');
                if (combo && wrapper) {
                    const updateLang = () => {
                        const selectedText = combo.options[combo.selectedIndex].text;
                        wrapper.setAttribute('data-lang', selectedText === 'Seleccionar idioma' ? 'ES' : selectedText);
                    };
                    combo.addEventListener('change', updateLang);
                    updateLang();
                }
            }, 1000);
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <style>
        .goog-te-banner-frame.skiptranslate,
        .goog-te-banner {
            display: none !important;
        }

        body {
            top: 0px !important;
        }

        .translate-wrapper {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 4px 12px;
            border-radius: 9999px;
            border: 2px solid #16a34a;
            background: white;
            transition: all 0.3s ease;
            position: relative;
            cursor: pointer;
            overflow: hidden;
        }

        .translate-wrapper:hover {
            background-color: #f0fdf4;
        }

        .goog-te-gadget {
            font-family: inherit !important;
            font-size: 0 !important;
            display: flex !important;
            align-items: center !important;
            margin: 0 !important;
        }

        .goog-te-gadget .goog-te-combo {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer !important;
            z-index: 20;
            margin: 0 !important;
            appearance: none;
            -webkit-appearance: none;
        }

        .goog-te-gadget .goog-te-combo {
            margin: 0 !important;
            padding: 0 !important;
            border: none !important;
            background: transparent !important;
            color: #374151 !important;
            font-size: 14px !important;
            outline: none !important;
            cursor: pointer !important;
            font-family: inherit !important;
            position: relative;
            z-index: 10;
        }

        .goog-logo-link,
        .goog-te-gadget span {
            display: none !important;
        }

        .goog-te-gadget img {
            display: inline-block !important;
            margin-right: 4px !important;
            vertical-align: middle !important;
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

    <div class="fixed top-6 left-6 flex items-center gap-4 z-50">
        <a href="index.php"
            class="flex items-center gap-2 text-gray-600 hover:text-green-700 transition font-medium">
            ← Volver atrás
        </a>
        <div class="translate-wrapper" id="translate_container">
            <div id="google_translate_element"></div>
        </div>
    </div>


    <section class="min-h-screen flex items-center justify-center p-4">

        <div class="flex flex-col md:flex-row w-full max-w-5xl max-h-100 bg-white rounded-[2.5rem] shadow-2xl overflow-hidden min-h-[600px]">


            <div class="md:w-1/2  flex items-center justify-center bg-gradient-to-r from-green-500 to-green-800">
                <img src="../assets/hoja.png" alt="Registro Ilustración" class="w-40 h-40">
            </div>


            <div class="md:w-1/2 flex flex-col items-center justify-center p-12 bg-white">
                <div class="w-full max-w-md text-center">
                    <h2 class="text-4xl font-bold bg-gradient-to-r from-green-500 to-green-800 bg-clip-text text-transparent mb-2">Inicio de sesión</h2>
                    <p class="text-gray-500 mb-10 text-lg">¡¡Bienvenido de nuevo!!</p>

                    <form action="../../app/controladores/loginControlador.php" method="POST" class="space-y-6 w-full">
                        <div class="relative">
                            <input
                                type="text"
                                name="nombreIngresado"
                                placeholder="Introduce tu usuario"
                                class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 text-gray-700 transition-all placeholder:text-gray-400 shadow-sm"
                                required>
                        </div>

                        <div class="relative">0
                            <input
                                type="password"
                                name="passwordIngresado"
                                placeholder="Introduce tu contraseña"
                                class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 text-gray-700 transition-all placeholder:text-gray-400 shadow-sm"
                                required>
                        </div>

                        <?php if (!empty($mensajeError)): ?>
                            <?php foreach ($mensajeError as $error): ?>
                                <p class="text-red-600 font-semibold"><?= $error; ?></p>
                            <?php endforeach ?>
                        <?php endif; ?>

                        <button
                            type="submit"
                            name="login"
                            class="w-full py-4 bg-gradient-to-r from-green-500 to-green-800 text-white font-bold rounded-2xl
                               hover:scale-[1.02] active:scale-95 transition-all duration-300 shadow-lg shadow-green-700/30 text-lg mt-4 cursor-pointer">
                            Iniciar Sesión
                        </button>

                        <div class="mt-4 text-center max-w-80 mx-auto">
                            <p>¿No tienes cuenta? <a href="registro.php" class="text-green-700 hover:text-green-800">Regístrate aquí</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</body>