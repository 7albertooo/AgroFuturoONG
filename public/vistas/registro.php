<?php
session_start();

$mensaje = $_SESSION['mensaje'] ?? '';
unset($_SESSION['mensaje']);

$errores = $_SESSION['errores'] ?? '';
unset($_SESSION['errores']);

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
        <a href="login.php"
            class="flex items-center gap-2 text-gray-600 hover:text-green-700 transition font-medium">
            ← Volver atrás
        </a>
        <div class="translate-wrapper" id="translate_container">
            <div id="google_translate_element"></div>
        </div>
    </div>


    <section class="min-h-screen flex items-center justify-center p-4">

        <div class="flex flex-col md:flex-row w-full max-w-5xl bg-white rounded-[2.5rem] shadow-2xl overflow-hidden min-h-[600px]">


            <div class="md:w-1/2 flex flex-col items-center justify-center p-12 bg-white">
                <div class="w-full max-w-md text-center">
                    <h2 class="text-4xl font-bold bg-gradient-to-l from-green-500 to-green-800 bg-clip-text text-transparent mb-2">Registro</h2>
                    <p class="text-gray-500 mb-10 text-lg">¡¡Unete a nosotros!!</p>

                    <form action="../../app/controladores/registroControlador.php" method="post" class="space-y-6 w-full">
                        <div class="relative">
                            <input
                                type="text"
                                name="username"
                                placeholder="Introduce tu usuario"
                                class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 text-gray-700 transition-all placeholder:text-gray-400 shadow-sm"
                                required>
                        </div>

                        <div class="relative">
                            <input
                                type="email"
                                name="email"
                                placeholder="Introduce tu email"
                                class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 text-gray-700 transition-all placeholder:text-gray-400 shadow-sm"
                                required>
                        </div>

                        <div class="relative">
                            <input
                                type="password"
                                name="password"
                                placeholder="Introduce tu contraseña"
                                class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 text-gray-700 transition-all placeholder:text-gray-400 shadow-sm"
                                required>
                        </div>

                        <button
                            type="submit"
                            class="w-full py-4 bg-gradient-to-l from-green-500 to-green-800 text-white font-bold rounded-2xl
                               hover:scale-[1.02] active:scale-95 transition-all duration-300 shadow-lg shadow-green-700/30 text-lg mt-4 cursor-pointer">
                            Registrarse
                        </button>

                        <div class="mt-4 text-center max-w-80 mx-auto">
                            <p>¿Ya tienes cuenta? <a href="login.php" class="text-green-700 hover:text-green-800">Inicia Sesión</a></p>
                        </div>

                        <?php if (!empty($errores)) : ?>

                            <?php foreach ($errores as $error) : ?>
                                <p style="color:red"><?= $error ?> </p>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        <?php if (!empty($mensaje)) : ?>

                            <p style="color:green"><?= $mensaje ?> </p>

                        <?php endif; ?>

                    </form>
                </div>
            </div>

            <div class="md:w-1/2  flex items-center justify-center bg-gradient-to-l from-green-500 to-green-800">
                <img src="../assets/hoja.png" alt="Registro Ilustración" class="w-40 h-40">
            </div>

        </div>
    </section>

</body>