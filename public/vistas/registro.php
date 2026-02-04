<?php
$idioma = $_COOKIE['idioma'] ?? 'es';
include_once '../../app/config/textos.php';
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

    <a href="login.php"
        class="fixed top-6 left-6 flex items-center gap-2 text-gray-600 hover:text-green-700 transition font-medium z-50">
        ← <?php echo $textos['auth']['volver']; ?>
    </a>


    <section class="min-h-screen flex items-center justify-center p-4">

        <div class="flex flex-col md:flex-row w-full max-w-5xl bg-white rounded-[2.5rem] shadow-2xl overflow-hidden min-h-[600px]">


            <div class="md:w-1/2 flex flex-col items-center justify-center p-12 bg-white">
                <div class="w-full max-w-md text-center">
                    <h2 class="text-4xl font-bold bg-gradient-to-l from-green-500 to-green-800 bg-clip-text text-transparent mb-2"><?php echo $textos['auth']['reg_t']; ?></h2>
                    <p class="text-gray-500 mb-10 text-lg"><?php echo $textos['auth']['reg_sub']; ?></p>

                    <form action="#" method="post" class="space-y-6 w-full">
                        <div class="relative">
                            <input
                                type="text"
                                placeholder="<?php echo $textos['auth']['inputs']['user']; ?>"
                                class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 text-gray-700 transition-all placeholder:text-gray-400 shadow-sm"
                                required>
                        </div>

                        <div class="relative">
                            <input
                                type="email"
                                placeholder="<?php echo $textos['auth']['inputs']['email']; ?>"
                                class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 text-gray-700 transition-all placeholder:text-gray-400 shadow-sm"
                                required>
                        </div>

                        <div class="relative">
                            <input
                                type="password"
                                placeholder="<?php echo $textos['auth']['inputs']['pass']; ?>"
                                class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 text-gray-700 transition-all placeholder:text-gray-400 shadow-sm"
                                required>
                        </div>

                        <button
                            type="submit"
                            class="w-full py-4 bg-gradient-to-l from-green-500 to-green-800 text-white font-bold rounded-2xl
                               hover:scale-[1.02] active:scale-95 transition-all duration-300 shadow-lg shadow-green-700/30 text-lg mt-4 cursor-pointer">
                            <?php echo $textos['auth']['btns']['registrar']; ?>
                        </button>

                        <div class="mt-4 text-center max-w-80 mx-auto">
                            <p><?php echo $textos['auth']['preguntas']['si_cuenta']; ?> <a href="login.php" class="text-green-700 hover:text-green-800"><?php echo $textos['auth']['enlaces']['log']; ?></a></p>
                        </div>

                    </form>
                </div>
            </div>

            <div class="md:w-1/2  flex items-center justify-center bg-gradient-to-l from-green-500 to-green-800">
                <img src="../assets/hoja.png" alt="Registro Ilustración" class="w-40 h-40">
            </div>

        </div>
    </section>

</body>