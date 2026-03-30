<?php
require_once '../config/conexion/conexion.php';
require_once '../../vendor/stripe/stripe-php/init.php';
require_once 'guardarPago.php';

$stripeSecret = $_ENV['STRIPE_SECRET_KEY'];

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $frecuencia = $_POST['frecuencia'] ?? 'unico';
    $monto = $_POST['monto'] ?? 0;
    $nombre = $_POST['nombre'] ?? '';
    $email = $_POST['email'] ?? '';
    $monto_personalizado = $_POST['cantidad_personalizada'] ?? null;

}

\Stripe\Stripe::setApiKey($stripeSecret);

$monto_euros = $monto; 
$cantidad = $monto * 100;

if(!empty($monto_personalizado)) {

    $cantidad = $monto_personalizado * 100;
    $monto_euros = $monto_personalizado;

}


guardarPago($conexion, $nombre, $email, $monto_euros, $frecuencia);


if($frecuencia == 'mensual') {

$session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],
    'line_items' => [[
        'price_data' => [
            'currency' => 'eur',
            'product_data' => [
                'name' => 'Donación-ONG'
            ],
            'unit_amount' => $cantidad,
            
            'recurring' => [
                'interval' => 'month'
            ]
        ],
        'quantity' => 1
    ]],
    'mode' => 'subscription',
    'customer_email' => $email,
    'locale' => 'auto',
    'success_url' => 'http://localhost/agrofuturoong/public/vistas/pago.php?session_id={CHECKOUT_SESSION_ID}',
    'cancel_url' => 'http://localhost/agrofuturoong/public/vistas/pago.php?session_id={CHECKOUT_SESSION_ID}'
]);

}elseif ($frecuencia == 'unico'){

    $session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],
    'line_items' => [[
        'price_data' => [
            'currency' => 'eur',
            'product_data' => [
                'name' => 'Donación-ONG'
            ],
            'unit_amount' => $cantidad
        ],
        'quantity' => 1
    ]],
    'mode' => 'payment',
    'customer_email' => $email,
    'success_url' => 'http://localhost/agrofuturoong/public/vistas/pago.php?session_id={CHECKOUT_SESSION_ID}',
    'cancel_url' => 'http://localhost/agrofuturoong/public/vistas/pago.php?session_id={CHECKOUT_SESSION_ID}'
]);

}

header("Location: " . $session->url);
exit();
?>
