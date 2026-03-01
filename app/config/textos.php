<?php

$APP_NAME = "AgroFuturoONG";


// Si la variable $idioma no está definida (por ejemplo, si se incluye fuera de header.php), 
// intentamos detectarla de la cookie o usamos 'es' por defecto.
if (!isset($idioma)) {
    $idioma = $_COOKIE['idioma'] ?? 'es';
}

switch ($idioma) {
    case 'en':
        $textos = [
            'nav' => [
                'inicio' => 'Home',
                'ayuda' => 'Request Help',
                'apoyar' => 'Support',
                'contacto' => 'Contact',
                'login' => 'Login',
                'logout' => 'Logout',
                'admin' => 'Admin',
                'perfil' => 'Profile'
                
            ],
            'hero' => [
                'titulo' => [
                    't1' => 'We sow',
                    's1' => 'hope;',
                    't2' => 'we harvest',
                    's2' => 'future'
                ],

                'subtitulo' => 'We support rural communities with sustainable agriculture and microcredits to build lasting economic development.',
                'btn_ayuda' => 'Request Help',
                'btn_apoyar' => 'Support'
            ],
            'stats' => [
                'beneficiarios' => 'Beneficiaries',
                'microcreditos' => 'In Microcredits',
                'ciudades' => 'Cities',
                'exito' => 'Success Rate'
            ],
            'servicios' => [
                'titulo' => 'How do we help you?',
                'subtitulo' => 'We offer a comprehensive program to boost your agricultural project and improve your family economy.',
                'items' => [
                    'agri' => ['t' => 'Sustainable Agriculture', 'd' => 'Ecological farming techniques adapted to the local climate to maximize your production.'],
                    'micro' => ['t' => 'Microcredits', 'd' => 'Access to flexible financing to boost your agricultural project or entrepreneurship.'],
                    'form' => ['t' => 'Free Training', 'd' => 'Technical training and agricultural management to improve your skills.'],
                    'comu' => ['t' => 'Community', 'd' => 'Join a network of farmers who share knowledge and experiences.']
                ]
            ],
            'proceso' => [
                'titulo' => 'Simple Process',
                'subtitulo' => 'In 4 simple steps you can access our support program.',
                'pasos' => [
                    1 => ['t' => 'Request Help', 'd' => 'Send your request with your project data.'],
                    2 => ['t' => 'Approval', 'd' => 'Our team evaluates your request and notifies you of approval.'],
                    3 => ['t' => 'Training', 'd' => 'Complete the online training modules.'],
                    4 => ['t' => 'Receive Support', 'd' => 'Get your grant or microcredit.']
                ],
                'btn' => 'Start Now'
            ],
            'galeria' => [
                'titulo' => [
                    't1' => 'Image ',
                    's1' => 'Gallery'
                ],
                'footer_titulo' => 'Ready to transform your future?',
                'footer_sub' => 'Join our community of farmers and entrepreneurs who are building a more prosperous tomorrow.',
                'btn_enviar' => 'Send Request',
                'btn_cuenta' => 'I already have an account'
            ],
            'contacto' => [
                'titulo' => 'Contact Us',
                'form' => ['nombre' => 'Name', 'email' => 'Email', 'msj' => 'Message', 'btn' => 'Send message'],
                'info' => ['horario' => 'Business hours', 'tel' => 'Phone', 'dir' => 'Address', 'redes' => 'Social Networks'],
                'placeholders' => ['nombre' => 'Your name', 'email' => 'yourmail@email.com', 'msj' => 'Write your message here...'],
                'datos' => [
                    'h_dias' => 'Monday to Friday: 9:00 - 18:00',
                    'h_sab' => 'Saturdays: 10:00 - 14:00',
                    'h_dom' => 'Sundays: Closed'
                ]
            ],
            'auth' => [
                'volver' => 'Go back',
                'login_t' => 'Login',
                'login_sub' => 'Welcome back!!',
                'reg_t' => 'Register',
                'reg_sub' => 'Join us!!',
                'inputs' => ['user' => 'Enter your username', 'pass' => 'Enter your password', 'email' => 'Enter your email'],
                'btns' => ['entrar' => 'Login', 'registrar' => 'Register'],
                'preguntas' => ['no_cuenta' => "Don't have an account?", 'si_cuenta' => 'Already have an account?'],
                'enlaces' => ['reg' => 'Register here', 'log' => 'Login']
            ]
        ];
        break;

    case 'es':
    default:
        $textos = [
            'nav' => [
                'inicio' => 'Inicio',
                'ayuda' => 'Solicitar Ayuda',
                'apoyar' => 'Apoyar',
                'contacto' => 'Contacto',
                'login' => 'Iniciar Sesión',
                'logout' => 'Cerrar Sesión',
                'admin' => 'Admin',
                'perfil' => 'Perfil'
            ],
            'hero' => [
                'titulo' => [
                    't1' => 'Sembramos ',
                    's1' => 'esperanza;',
                    't2' => 'cosechamos ',
                    's2' => 'futuro'
                ],
                'subtitulo' => 'Apoyamos a comunidades rurales con agricultura sostenible y microcréditos para construir un desarrollo económico duradero.',
                'btn_ayuda' => 'Solicitar Ayuda',
                'btn_apoyar' => 'Apoyar'
            ],
            'stats' => [
                'beneficiarios' => 'Beneficiarios',
                'microcreditos' => 'En Microcréditos',
                'ciudades' => 'Ciudades',
                'exito' => 'Tasa de Éxito'
            ],
            'servicios' => [
                'titulo' => '¿Cómo te ayudamos?',
                'subtitulo' => 'Ofrecemos un programa integral para impulsar tu proyecto agrícola y mejorar tu economía familiar.',
                'items' => [
                    'agri' => ['t' => 'Agricultura Sostenible', 'd' => 'Técnicas de cultivo ecológicas adaptadas al clima local para maximizar tu producción.'],
                    'micro' => ['t' => 'Microcréditos', 'd' => 'Acceso a financiamiento flexible para impulsar tu proyecto agrícola o emprendimiento.'],
                    'form' => ['t' => 'Formación Gratuita', 'd' => 'Capacitación técnica y gestión agrícola para mejorar tus habilidades.'],
                    'comu' => ['t' => 'Comunidad', 'd' => 'Únete a una red de agricultores que comparten conocimientos y experiencias.']
                ]
            ],
            'proceso' => [
                'titulo' => 'Proceso Simple',
                'subtitulo' => 'En 4 sencillos pasos puedes acceder a nuestro programa de apoyo.',
                'pasos' => [
                    1 => ['t' => 'Solicita Ayuda', 'd' => 'Envía tu solicitud con los datos de tu proyecto.'],
                    2 => ['t' => 'Aprobación', 'd' => 'Nuestra equipo evalúa tu solicitud y te notifica la aprobación.'],
                    3 => ['t' => 'Formación', 'd' => 'Completa los módulos de capacitación en línea.'],
                    4 => ['t' => 'Recibe Apoyo', 'd' => 'Obtén tu subvención o microcrédito.']
                ],
                'btn' => 'Comenzar Ahora'
            ],
            'galeria' => [
                'titulo' => ['t1' => 'Galeria de ', 's1' => 'Imagenes'],
                'footer_titulo' => '¿Listo para transformar tu futuro?',
                'footer_sub' => 'Únete a nuestra comunidad de agricultores y emprendedores que están construyendo un mañana más próspero.',
                'btn_enviar' => 'Enviar Solicitud',
                'btn_cuenta' => 'Ya tengo cuenta'
            ],
            'contacto' => [
                'titulo' => 'Contáctanos',
                'form' => ['nombre' => 'Nombre', 'email' => 'Correo electrónico', 'msj' => 'Mensaje', 'btn' => 'Enviar mensaje'],
                'info' => ['horario' => 'Horario de atención', 'tel' => 'Telefono', 'dir' => 'Dirección', 'redes' => 'Redes Sociales'],
                'placeholders' => ['nombre' => 'Tu nombre', 'email' => 'tucorreo@email.com', 'msj' => 'Escribe tu mensaje aquí...'],
                'datos' => [
                    'h_dias' => 'Lunes a Viernes: 9:00 - 18:00',
                    'h_sab' => 'Sábados: 10:00 - 14:00',
                    'h_dom' => 'Domingos: Cerrado'
                ]
            ],
            'auth' => [
                'volver' => 'Volver atrás',
                'login_t' => 'Inicio de sesión',
                'login_sub' => 'Bienvenido de nuevo!!',
                'reg_t' => 'Registro',
                'reg_sub' => 'Unete a nosotros!!',
                'inputs' => ['user' => 'Introduce tu usuario', 'pass' => 'Introduce tu contraseña', 'email' => 'Introduce tu email'],
                'btns' => ['entrar' => 'Iniciar Sesión', 'registrar' => 'Registrarse'],
                'preguntas' => ['no_cuenta' => '¿No tienes cuenta?', 'si_cuenta' => '¿Ya tienes cuenta?'],
                'enlaces' => ['reg' => 'Regístrate aquí', 'log' => 'Inicia Sesión']
            ]
        ];
        break;
}
