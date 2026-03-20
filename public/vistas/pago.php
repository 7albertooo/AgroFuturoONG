<?php include_once 'header.php';
require_once '../../vendor/stripe/stripe-php/init.php';
require_once '../../app/config/conexion/conexion.php';
require_once '../../app/funciones/guardarPago.php';

$stripeSecret = $_ENV['STRIPE_SECRET_KEY'];

\Stripe\Stripe::setApiKey($stripeSecret);


$session_id = isset($_GET['session_id']) ? $_GET['session_id'] : '';

$nombre = '';
$email = '';
$cantidad = '';
$fecha = '';

if (!empty($session_id)) {
    try {
        $sesion = \Stripe\Checkout\Session::retrieve($session_id);
        $nombre = $sesion->customer_details->name;
        $email = $sesion->customer_details->email;
        $cantidad = $sesion->amount_total / 100;
        $estado = $sesion->payment_status;
        $fecha = date("Y-m-d H:i:s");
        
    } catch (Exception $e) {
        
        $error_message = "Error al procesar la sesión de pago: " . $e->getMessage();
    }
}

if(!empty($estado)){

    if ($estado === 'paid') {
            $estado = 'pagado';
    }else {
        $estado = 'cancelado';
    }
        

        actualizarPago($conexion, $session_id, $estado, $fecha, $email );
    
}

?>


<section class="w-full mx-auto p-6 md:p-10 flex flex-col items-center lg:min-h-140 justify-center">

    <?php
    if (!empty($estado)) {
        if ($estado === 'pagado') {
            
            echo "<div class='bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4' role='alert'>
                    <span class='block sm:inline'>Gracias por su donación</span>
                </div>";
        }
        if ($estado === 'cancelado') {
            echo "<div class='bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4' role='alert'>
                    <span class='block sm:inline'>El pago fue cancelado</span>
                </div>";
        }
    }
    if (isset($error_message)) {
        echo "<p class='text-red-600 font-bold mb-4 text-center'>$error_message</p>";
    }
    ?>

    <h2 class="text-3xl md:text-5xl font-bold bg-black bg-clip-text text-transparent mb-4 text-center">
        Siembra <span class="bg-gradient-to-r from-green-500 to-green-800 bg-clip-text text-transparent">esperanza</span> hoy
    </h2>
    <p class="max-w-md text-center text-gray-500  px-2">Cada peso que donas se convierte en semillas, herramientas y oportunidades para familias rurales.</p>

    <div class="flex flex-col w-full max-w-[600px] mt-5 rounded-2xl shadow-xl border border-gray-200 bg-white overflow-hidden">

        <div class="p-6 md:p-8 text-left border-b border-gray-100">
            <h2 class="text-xl md:text-2xl font-bold text-slate-900 font-serif mb-1">
                Haz tu donación
            </h2>
            <p class="text-gray-500 md:text-md font-sans">
                Elige el monto y la forma de pago
            </p>
        </div>

        <div class="p-6 md:p-8">
            <form action="../../app/funciones/checkout.php" method="POST" class="space-y-6 md:space-y-8">

                <div>
                    <h2 class="text-[10px] md:text-xs font-bold text-emerald-800 uppercase tracking-widest mb-4 font-sans">
                        Frecuencia
                    </h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <label class="relative cursor-pointer">
                            <input type="radio" name="frecuencia" value="unico" checked class="peer sr-only">
                            <div class="border-2 border-gray-200 peer-checked:border-green-600 peer-checked:bg-emerald-50 text-gray-500 peer-checked:text-green-700 py-3 rounded-xl font-bold flex items-center justify-center gap-2 transition-all text-sm md:text-base">
                                Donación única
                            </div>
                        </label>
                        <label class="relative cursor-pointer">
                            <input type="radio" name="frecuencia" value="mensual" class="peer sr-only">
                            <div class="border-2 border-gray-200 peer-checked:border-green-600 peer-checked:bg-emerald-50 text-gray-500 peer-checked:text-green-700 py-3 rounded-xl font-bold flex items-center justify-center gap-2 transition-all text-sm md:text-base">
                                Mensual <span class="bg-orange-400 text-white text-[9px] px-2 py-0.5 rounded-full uppercase font-extrabold">Popular</span>
                            </div>
                        </label>
                    </div>
                </div>

                <div>
                    <h2 class="text-[10px] md:text-xs font-bold text-emerald-800 uppercase tracking-widest mb-4 font-sans">
                        Monto (€)
                    </h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mb-4">
                        <?php
                        $montos = [100, 250, 500, 1000, 2500, 5000];
                        foreach ($montos as $monto):
                        ?>
                            <label class="cursor-pointer">
                                <input type="radio" name="monto" value="<?= $monto ?>" <?= ($monto == 500) ? 'checked' : '' ?> class="peer sr-only">
                                <div class="border-2 border-gray-200 py-3 md:py-4 rounded-xl font-bold text-lg md:text-xl text-center text-slate-700 transition-all peer-checked:bg-green-600 peer-checked:text-white peer-checked:border-green-600">
                                    $<?= $monto ?>
                                </div>
                            </label>
                        <?php endforeach; ?>
                    </div>

                    <div class="relative mt-4">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">€</span>
                        <input type="number" name="cantidad_personalizada" placeholder="Otro monto"
                            class="w-full border border-gray-200 rounded-xl py-3 md:py-4 pl-10 pr-4 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-base md:text-lg transition-all">
                    </div>
                </div>

                <hr class="border-gray-100">

                <div class="space-y-4">
                    <h2 class="text-[10px] md:text-xs font-bold text-emerald-800 uppercase tracking-widest font-sans">Tus Datos</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" name="nombre" placeholder="Nombre completo" required
                            class="border border-gray-200 rounded-xl py-3 px-4 focus:ring-2 focus:ring-emerald-500 outline-none text-sm md:text-base">
                        <input type="email" name="email" placeholder="Correo electrónico" required
                            class="border border-gray-200 rounded-xl py-3 px-4 focus:ring-2 focus:ring-emerald-500 outline-none text-sm md:text-base">
                    </div>
                </div>

                <div class="pt-2 md:pt-4">
                    <button type="submit" class="w-full bg-gradient-to-r from-green-500 to-green-800 md:hover:scale-105 active:scale-95 text-white font-bold py-4 md:py-5 rounded-2xl flex items-center justify-center gap-3 transition-all shadow-lg shadow-emerald-100 text-lg md:text-xl">
                        Donar ahora
                    </button>
                </div>

            </form>
        </div>
    </div>
</section>