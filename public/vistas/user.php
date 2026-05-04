<?php
session_start();

if (empty($_SESSION["usuario_id"])) {
    header("Location: login.php");
    exit();
}

include_once 'header.php';
include_once '../../app/funciones/datosUser.php';

$mensajes = $_SESSION['mensaje'] ?? [];
?>

<section class="w-full mx-auto p-4 md:p-10 flex flex-col items-center min-h-screen">

    <div class="w-9/10 mx-auto p-4 flex-row justify-start mb-6">
        <h1 class="font-bold text-3xl text-gray-800">PANEL DE USUARIO</h1>
        <h3 class="text-gray-600">Bienvenido, <?= htmlspecialchars($datosUser['username']) ?></h3>
    </div>

    <?php if (!empty($mensajes)): ?>
        <div class="w-9/10 mx-auto mb-6">
            <?php foreach ($mensajes as $mensaje): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
                    <span class="block sm:inline"><?= $mensaje ?></span>
                </div>
            <?php endforeach; ?>
        </div>
        <?php unset($_SESSION['mensaje']); ?>
    <?php endif; ?>

    <div class="w-9/10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 p-4 bg-gray-50">

        <div class="flex items-center justify-between rounded-3xl border border-gray-100 bg-white p-6 shadow-sm transition-all duration-300 hover:scale-105 hover:shadow-md">
            <div class="flex flex-col gap-1">
                <h2 class="text-sm font-medium text-gray-400">Mis Solicitudes</h2>
                <p class="text-4xl font-bold text-gray-800"><?= $datosCountUserSoli ?></p>
            </div>
            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>

        <div class="flex items-center justify-between rounded-3xl border border-gray-100 bg-white p-6 shadow-sm transition-all duration-300 hover:scale-105 hover:shadow-md">
            <div class="flex flex-col gap-1 text-left">
                <h2 class="text-sm font-medium text-gray-400">Solicitudes Pendientes</h2>
                <p class="text-4xl font-bold text-gray-800"><?= $datoUserSoliPendiente ?></p>
            </div>
            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                </svg>
            </div>
        </div>

        <div class="flex items-center justify-between rounded-3xl border border-gray-100 bg-white p-6 shadow-sm transition-all duration-300 hover:scale-105 hover:shadow-md">
            <div class="flex flex-col gap-1 text-left">
                <h2 class="text-sm font-medium text-gray-400">Créditos Otorgados</h2>
                <p class="text-4xl font-bold text-gray-800"><?= $datosCountUserCredi ?></p>
            </div>
            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>

        <div class="flex items-center justify-between rounded-3xl border border-gray-100 bg-white p-6 shadow-sm transition-all duration-300 hover:scale-105 hover:shadow-md">
            <div class="flex flex-col gap-1 text-left">
                <h2 class="text-sm font-medium text-gray-400">Donaciones Realizadas</h2>
                <p class="text-4xl font-bold text-gray-800"><?= $datosCountUserDona ?></p>
            </div>
            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                </svg>
            </div>
        </div>

    </div>

    <div class="w-9/10 mx-auto p-4 mb-6 flex justify-center lg:justify-start">
        <ul class="w-full max-w-md bg-gray-200 rounded-xl flex flex-row justify-around items-center px-4 py-2 text-gray-600 gap-1">
            <li class="flex-1">
                <a id="profile" href="#" class="flex items-center justify-center gap-2 p-1 rounded-lg transition-colors hover:bg-gray-300 focus:bg-white focus:text-green-600 outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span class="font-medium">Perfil</span>
                </a>
            </li>
            <li class="flex-1">
                <a id="soli" href="#" class="flex items-center justify-center gap-2 p-1 rounded-lg transition-colors hover:bg-gray-300 focus:bg-white focus:text-green-600 outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="font-medium">Solicitudes</span>
                </a>
            </li>
            <li class="flex-1">
                <a id="credi" href="#" class="flex items-center justify-center gap-2 p-1 rounded-lg transition-colors hover:bg-gray-300 focus:bg-white focus:text-green-600 outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2H2v10l9.29 9.29c.94.94 2.48.94 3.42 0l5-5c.94-.94.94-2.48 0-3.42L12 2Z" />
                        <path d="M7 7h.01" />
                    </svg>
                    <span class="font-medium">Créditos</span>
                </a>
            </li>
            <li class="flex-1">
                <a id="dona" href="#" class="flex items-center justify-center gap-2 p-1 rounded-lg transition-colors hover:bg-gray-300 focus:bg-white focus:text-green-600 outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                    </svg>
                    <span class="font-medium">Donaciones</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Profile Section -->
    <div class="w-9/10 overflow-hidden bg-white rounded-3xl shadow-xl ring-1 ring-gray-200" id="tableprofile">
        <div class="grid grid-cols-1 lg:grid-cols-[280px_minmax(0,1fr)] gap-6 p-6">
            <div class="rounded-3xl bg-emerald-50 p-6 flex flex-col items-center text-center gap-4">
           
                <div>
                    <p class="text-lg font-semibold text-gray-900"><?= htmlspecialchars($datosUser['username']) ?></p>
                    <p class="text-sm text-gray-600">Perfil de usuario</p>
                </div>
                <div class="rounded-3xl bg-white px-4 py-3 shadow-sm border border-gray-100">
                    <p class="text-xs uppercase tracking-[0.24em] text-gray-500">Rol</p>
                    <p class="mt-2 text-sm font-semibold text-emerald-700"><?= htmlspecialchars($datosUser['rol']) ?></p>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="rounded-3xl border border-gray-100 bg-gray-50 p-5">
                    <p class="text-xs uppercase tracking-[0.24em] text-gray-500">Nombre de Usuario</p>
                    <p class="mt-3 text-base font-semibold text-gray-900"><?= htmlspecialchars($datosUser['username']) ?></p>
                </div>
                <div class="rounded-3xl border border-gray-100 bg-gray-50 p-5">
                    <p class="text-xs uppercase tracking-[0.24em] text-gray-500">Email</p>
                    <p class="mt-3 text-base font-semibold text-gray-900"><?= htmlspecialchars($datosUser['email']) ?></p>
                </div>
                <div class="rounded-3xl border border-gray-100 bg-gray-50 p-5">
                    <p class="text-xs uppercase tracking-[0.24em] text-gray-500">Fecha de Registro</p>
                    <p class="mt-3 text-base font-semibold text-gray-900"><?= htmlspecialchars($datosUser['fecha_registro']) ?></p>
                </div>
                <div class="rounded-3xl border border-gray-100 bg-gray-50 p-5">
                    <p class="text-xs uppercase tracking-[0.24em] text-gray-500">Email verificado</p>
                    <p class="mt-3 text-base font-semibold text-gray-900"><?= !empty($datosUser['email']) ? 'Sí' : 'No' ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Requests Section -->
    <div class="w-9/10 overflow-x-auto bg-white p-6 rounded-3xl shadow-xl ring-1 ring-gray-200 hidden" id="tablesoli">
        <h2 class="text-xl font-semibold mb-4 border-b border-gray-200 pb-3">Mis Solicitudes</h2>
        <table class="min-w-full divide-y divide-gray-200 text-left text-sm">
            <thead class="text-gray-700 uppercase text-xs  font-semibold">
                <tr>
                    <th class="px-5 py-3">Tipo</th>
                    <th class="px-5 py-3">Monto</th>
                    <th class="px-5 py-3">Estado</th>
                    <th class="px-5 py-3">Fecha Envio</th>
                    <th class="px-5 py-3">Fecha Resolucion</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php foreach ($datoUserSoli as $soli): ?>
                    <tr class="bg-white hover:bg-emerald-50/20 transition-colors">
                        <td class="px-5 py-4 text-gray-900 font-medium"><?= htmlspecialchars($soli['tipo']) ?></td>
                        <td class="px-5 py-4 text-gray-600">$<?= htmlspecialchars($soli['monto']) ?></td>
                        <td class="px-5 py-4">
                            <span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-semibold text-white <?= htmlspecialchars($soli['estado']) === 'pendiente' ? 'bg-amber-500' : 'bg-emerald-600' ?>">
                                <?= htmlspecialchars($soli['estado']) ?>
                            </span>
                        </td>
                        <td class="px-5 py-4 text-gray-600"><?= htmlspecialchars($soli['fecha_envio']) ?></td>
                        <td class="px-5 py-4 text-gray-600"><?= htmlspecialchars($soli['fecha_resolucion']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Credits Section -->
    <div class="w-9/10 overflow-x-auto bg-white p-6 rounded-3xl shadow-xl ring-1 ring-gray-200 hidden" id="tablecredi">
        <h2 class="text-xl font-semibold mb-4 border-b border-gray-200 pb-3">Mis Créditos</h2>
        <table class="min-w-full divide-y divide-gray-200 text-left text-sm">
            <thead class="text-gray-700 uppercase text-xs font-semibold">
                <tr>
                    <th class="px-5 py-3">Cantidad</th>
                    <th class="px-5 py-3">Estado</th>
                    <th class="px-5 py-3">Fecha</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php foreach ($datoUserCredi as $credi): ?>
                    <tr class="bg-white hover:bg-emerald-50/20 transition-colors">
                        <td class="px-5 py-4 text-gray-900 font-medium">$<?= htmlspecialchars($credi['cantidad']) ?></td>
                        <td class="px-5 py-4">
                            <span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-semibold text-white <?= htmlspecialchars($credi['estado']) === 'pendiente' ? 'bg-amber-500' : 'bg-emerald-600' ?>">
                                <?= htmlspecialchars($credi['estado']) ?>
                            </span>
                        </td>
                        <td class="px-5 py-4 text-gray-600"><?= htmlspecialchars($credi['fecha_envio'] ?? '') ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Donations Section -->
    <div class="w-9/10 overflow-x-auto bg-white p-6 rounded-3xl shadow-xl ring-1 ring-gray-200 hidden" id="tabledona">
        <h2 class="text-xl font-semibold mb-4 border-b border-gray-200 pb-3">Mis Donaciones</h2>
        <table class="min-w-full divide-y divide-gray-200 text-left text-sm">
            <thead class=" text-gray-700 uppercase text-xs  font-semibold">
                <tr>
                    <th class="px-5 py-3">Monto</th>
                    <th class="px-5 py-3">Fecha</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php foreach ($datoUserDona as $dona): ?>
                    <tr class="bg-white hover:bg-emerald-50/20 transition-colors">
                        <td class="px-5 py-4 text-gray-900 font-medium">$<?= htmlspecialchars($dona['monto_euros']) ?></td>
                        <td class="px-5 py-4 text-gray-600"><?= htmlspecialchars($dona['fecha']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</section>

<script type="module">
    const sectionProfile = document.getElementById('tableprofile');
    const sectionSoli = document.getElementById('tablesoli');
    const sectionCredi = document.getElementById('tablecredi');
    const sectionDona = document.getElementById('tabledona');

    const linkProfile = document.getElementById('profile');
    const linkSoli = document.getElementById('soli');
    const linkCredi = document.getElementById('credi');
    const linkDona = document.getElementById('dona');

    const links = [linkProfile, linkSoli, linkCredi, linkDona];

    const updateLinkStyles = (activeId) => {
        links.forEach(link => {
            if (link.id === activeId) {
                link.classList.add('bg-white', 'text-green-600');
                link.classList.remove('bg-gray-200', 'text-gray-600');
            } else {
                link.classList.remove('bg-white', 'text-green-600');
                link.classList.add('bg-gray-200', 'text-gray-600');
            }
        });
    };

    const hideAllSections = () => {
        sectionProfile.classList.add('hidden');
        sectionSoli.classList.add('hidden');
        sectionCredi.classList.add('hidden');
        sectionDona.classList.add('hidden');
    };

    const showProfile = () => {
        hideAllSections();
        sectionProfile.classList.remove('hidden');
        localStorage.setItem('activeUserTab', 'profile');
        updateLinkStyles('profile');
    };

    const showSoli = () => {
        hideAllSections();
        sectionSoli.classList.remove('hidden');
        localStorage.setItem('activeUserTab', 'soli');
        updateLinkStyles('soli');
    };

    const showCredi = () => {
        hideAllSections();
        sectionCredi.classList.remove('hidden');
        localStorage.setItem('activeUserTab', 'credi');
        updateLinkStyles('credi');
    };

    const showDona = () => {
        hideAllSections();
        sectionDona.classList.remove('hidden');
        localStorage.setItem('activeUserTab', 'dona');
        updateLinkStyles('dona');
    };

    linkProfile.addEventListener('click', e => {
        e.preventDefault();
        showProfile();
    });

    linkSoli.addEventListener('click', e => {
        e.preventDefault();
        showSoli();
    });

    linkCredi.addEventListener('click', e => {
        e.preventDefault();
        showCredi();
    });

    linkDona.addEventListener('click', e => {
        e.preventDefault();
        showDona();
    });

    window.addEventListener('load', () => {
        const activeTab = localStorage.getItem('activeUserTab');

        if (activeTab === 'soli') {
            showSoli();
        } else if (activeTab === 'credi') {
            showCredi();
        } else if (activeTab === 'dona') {
            showDona();
        } else {
            showProfile();
        }
    });
</script>

<?php include_once 'footer.php'; ?>