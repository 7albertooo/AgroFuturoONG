<?php

include_once 'header.php';
include_once '../../app/funciones/datosAdmin.php';

$mensajes = $_SESSION['mensaje'] ?? [];
?>


<section class="w-full mx-auto p-4 md:p-10 flex flex-col items-center  min-h-screen">

    <div class="w-9/10 mx-auto p-4 flex-row justify-start mb-6">
        <h1 class="font-bold text-3xl text-gray-800">PANEL DE ADMINISTRACIÓN</h1>
        <h3 class="text-gray-600">Gestiona solicitudes y usuarios</h3>
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
                <h2 class="text-sm font-medium text-gray-400">Total Usuarios</h2>
                <p class="text-4xl font-bold text-gray-800"><?= $datosCountUsers ?></p>

            </div>
            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                </svg>
            </div>
        </div>

        <div class="flex items-center justify-between rounded-3xl border border-gray-100 bg-white p-6 shadow-sm transition-all duration-300 hover:scale-105 hover:shadow-md">
            <div class="flex flex-col gap-1 text-left">
                <h2 class="text-sm font-medium text-gray-400">Total Solicitudes</h2>
                <p class="text-4xl font-bold text-gray-800"><?= $datosCountSoli ?></p>

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
                <p class="text-4xl font-bold text-gray-800"><?= $datoSoliPendiente ?></p>

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
                <p class="text-4xl font-bold text-gray-800"><?= $datosCountCredi ?></p>

            </div>
            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>

    </div>


    <div class="w-9/10 mx-auto p-4 mb-6 flex justify-center lg:justify-start">
        <ul class="w-full max-w-md bg-gray-200 rounded-xl flex flex-row justify-around items-center px-4 py-2 text-gray-600 gap-1">

            <li class="flex-1">
                <a id="users" href="#" class="flex items-center justify-center gap-2 p-1 rounded-lg transition-colors hover:bg-gray-300 focus:bg-white focus:text-green-600 outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                    </svg>
                    <span class="font-medium">Usuarios</span>
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
                    <span class="font-medium">Creditos</span>
                </a>
            </li>

        </ul>
    </div>


    <div class="w-9/10 overflow-x-auto bg-white p-6 rounded-lg shadow-sm" id="tableuser">
        <table class="min-w-full divide-y divide-gray-200 text-left text-sm">
            <thead class="text-gray-500 uppercase font-medium">
                <tr>
                    <th class="px-4 py-3">Usuario</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Fecha Registro</th>
                    <th class="px-4 py-3 text-right">Rol</th>
                    <th class="px-4 py-3 text-right">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <?php foreach ($datosUsers as $user) : ?>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-4 py-4">
                            <div class="font-semibold text-gray-900"><?= $user['username'] ?></div>
                        </td>
                        <td class="px-4 py-4 text-gray-600"><?= $user['email'] ?></td>

                        <td class="px-4 py-4 text-gray-600"> <?= $user['fecha_registro'] ?></td>

                        <td class="px-4 py-4 text-right font-bold text-gray-900"><?= $user['rol'] ?></td>

                        <td class="px-4 py-4">
                            <div class="flex justify-end gap-3">
                                <button data-modal-target="edit-modal-<?= $user['id'] ?>" data-modal-toggle="edit-modal-<?= $user['id'] ?>" type="button" class="text-green-600 hover:text-green-900 transition-colors focus:outline-none" id="editar" title="Editar">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                    </svg>
                                </button>

                                <button data-modal-target="delete-modal-<?= $user['id'] ?>" data-modal-toggle="delete-modal-<?= $user['id'] ?>" type="button" class="text-red-600 hover:text-red-900 transition-colors focus:outline-none" id="eliminar" title="Eliminar">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <div id="edit-modal-<?= $user['id'] ?>" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-black/50">
                        <div class="relative p-4 w-full max-w-lg max-h-full">
                            <div class="relative bg-white rounded-2xl shadow-lg border border-gray-100 p-5">
                                <div class="flex items-center justify-between p-4 md:p-5 rounded-t">
                                    <h3 class="text-xl font-semibold text-green-600">Editar Usuario</h3>
                                    <svg fill="#028a09" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-3">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path d="M30.133 1.552c-1.090-1.044-2.291-1.573-3.574-1.573-2.006 0-3.47 1.296-3.87 1.693-0.564 0.558-19.786 19.788-19.786 19.788-0.126 0.126-0.217 0.284-0.264 0.456-0.433 1.602-2.605 8.71-2.627 8.782-0.112 0.364-0.012 0.761 0.256 1.029 0.193 0.192 0.45 0.295 0.713 0.295 0.104 0 0.208-0.016 0.31-0.049 0.073-0.024 7.41-2.395 8.618-2.756 0.159-0.048 0.305-0.134 0.423-0.251 0.763-0.754 18.691-18.483 19.881-19.712 1.231-1.268 1.843-2.59 1.819-3.925-0.025-1.319-0.664-2.589-1.901-3.776zM22.37 4.87c0.509 0.123 1.711 0.527 2.938 1.765 1.24 1.251 1.575 2.681 1.638 3.007-3.932 3.912-12.983 12.867-16.551 16.396-0.329-0.767-0.862-1.692-1.719-2.555-1.046-1.054-2.111-1.649-2.932-1.984 3.531-3.532 12.753-12.757 16.625-16.628zM4.387 23.186c0.55 0.146 1.691 0.57 2.854 1.742 0.896 0.904 1.319 1.9 1.509 2.508-1.39 0.447-4.434 1.497-6.367 2.121 0.573-1.886 1.541-4.822 2.004-6.371zM28.763 7.824c-0.041 0.042-0.109 0.11-0.19 0.192-0.316-0.814-0.87-1.86-1.831-2.828-0.981-0.989-1.976-1.572-2.773-1.917 0.068-0.067 0.12-0.12 0.141-0.14 0.114-0.113 1.153-1.106 2.447-1.106 0.745 0 1.477 0.34 2.175 1.010 0.828 0.795 1.256 1.579 1.27 2.331 0.014 0.768-0.404 1.595-1.24 2.458z"></path>
                                        </g>
                                    </svg>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="edit-modal-<?= $user['id'] ?>">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                    </button>
                                </div>

                                <form class="p-4 md:p-5" action="../../app/controladores/adminC.php" method="POST">
                                    <input type="hidden" name="accion" value="editarUser">
                                    <input type="hidden" name="idUser" value="<?= $user['id'] ?>">
                                    <div class="grid gap-4 mb-6 grid-cols-2">
                                        <div class="col-span-2">
                                            <label class="block mb-2 text-sm font-medium text-gray-700">Nombre de Usuario</label>
                                            <input type="text" name="username" value="<?= htmlspecialchars($user['username']) ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5" placeholder="usuario10" required>
                                        </div>
                                        <div class="col-span-2">
                                            <label class="block mb-2 text-sm font-medium text-gray-700">Correo Electrónico</label>
                                            <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5" placeholder="usuario10@example.com" required>
                                        </div>
                                        <div class="col-span-1">
                                            <label class="block mb-2 text-sm font-medium text-gray-700">Nueva Contraseña</label>
                                            <input type="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5">
                                        </div>
                                        <div class="col-span-1">
                                            <label class="block mb-2 text-sm font-medium text-gray-700">Rol</label>
                                            <select name="rol" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5">
                                                <option value="admin" <?= $user['rol'] === 'admin' ? 'selected' : '' ?>>Admin</option>
                                                <option value="user" <?= $user['rol'] === 'user' ? 'selected' : '' ?>>User</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="flex justify-end gap-3 pt-4">
                                        <button type="button" data-modal-hide="edit-modal-<?= $user['id'] ?>" class="py-2.5 px-5 text-sm font-medium text-gray-900 bg-white rounded-full border border-gray-200 hover:bg-gray-100 transition-colors">Cancelar</button>
                                        <button type="submit" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-emerald-300 font-medium rounded-full text-sm px-6 py-2.5 transition-colors">
                                            Guardar cambios
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div id="delete-modal-<?= $user['id'] ?>" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-black/50">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-2xl shadow-lg p-6 text-center border border-gray-100">
                                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="delete-modal-<?= $user['id'] ?>">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                </button>

                                <div class="p-4 md:p-5">
                                    <div class="mx-auto mb-4 text-red-500 bg-red-50 w-16 h-16 rounded-full flex items-center justify-center">
                                        <svg class="w-10 h-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </div>
                                    <h3 class="mb-5 text-lg font-normal text-gray-600">¿Estás seguro de que deseas eliminar este usuario?</h3>
                                    <div class="flex items-center justify-center space-x-3">
                                        <form action="../../app/controladores/adminC.php" method="POST">
                                            <input type="hidden" name="accion" value="eliminarUser">
                                            <input type="hidden" name="idUser" value="<?= $user['id'] ?>">
                                            <button data-modal-hide="delete-modal-<?= $user['id'] ?>" type="submit" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 transition-colors">
                                                Sí, eliminar
                                            </button>
                                        </form>

                                        <button data-modal-hide="delete-modal-<?= $user['id'] ?>" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-emerald-600">
                                            No, cancelar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="flex justify-end mt-6 gap-1">

            <?php if ($pagina > 1): ?>
                <a href="?pagina=<?= $pagina - 1 ?>"
                    class="px-3 py-1 rounded bg-gray-200 hover:bg-gray-300">
                    ←
                </a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
                <a href="?pagina=<?= $i ?>"
                    class="px-3 py-1 rounded
           <?= $i == $pagina
                    ? 'bg-green-500 text-white'
                    : 'bg-gray-200 hover:bg-gray-300' ?>">
                    <?= $i ?>
                </a>
            <?php endfor; ?>

            <?php if ($pagina < $totalPaginas): ?>
                <a href="?pagina=<?= $pagina + 1 ?>"
                    class="px-3 py-1 rounded bg-gray-200 hover:bg-gray-300">
                    →
                </a>
            <?php endif; ?>

        </div>
    </div>

    <div class="w-9/10 overflow-x-auto bg-white p-6 rounded-lg shadow-sm hidden" id="tablesoli">
        <table class="min-w-full divide-y divide-gray-200 text-left text-sm">

            <thead class="text-gray-500 uppercase font-medium">
                <tr>
                    <th class="px-4 py-3">Solicitud</th>
                    <th class="px-4 py-3">Solicitante</th>
                    <th class="px-4 py-3">Estado</th>
                    <th class="px-4 py-3 text-right">Fecha Envio</th>
                    <th class="px-4 py-3 text-right">Fecha Resolucion</th>
                    <th class="px-4 py-3 text-right">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <?php foreach ($datoSoli as $soli) : ?>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-4 py-4">
                            <div class="font-semibold text-gray-900"><?= $soli['id'] ?></div>
                        </td>
                        <td class="px-4 py-4 text-gray-600"><?= $soli['nombreUser'] ?></td>
                        <td class="px-4 py-4">
                            <?php if ($soli['estado'] == 'pendiente') : ?>
                                <span class="px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                    <?= $soli['estado'] ?>
                                </span>
                            <?php endif; ?>

                            <?php if ($soli['estado'] == 'aprobada') : ?>
                                <span class="px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    <?= $soli['estado'] ?>
                                </span>
                            <?php endif; ?>

                            <?php if ($soli['estado'] == 'rechazada') : ?>
                                <span class="px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                    <?= $soli['estado'] ?>
                                </span>
                            <?php endif; ?>

                        </td>
                        <td class="px-4 py-4 text-right font-bold text-gray-900"><?= $soli['fecha_envio'] ?></td>
                        <td class="px-4 py-4 text-right text-gray-500"><?= $soli['fecha_resolucion'] ?></td>
                        <td class="px-4 py-4">
                            <div class="flex justify-end gap-3">
                                <button data-modal-target="aceptar-modal-<?= $soli['id'] ?>" data-modal-toggle="aceptar-modal-<?= $soli['id'] ?>" type="button" class="text-blue-600 hover:text-blue-900 transition-colors focus:outline-none" id="editar" title="Editar">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 13l4 4L19 7" />
                                    </svg>
                                </button>

                                <button data-modal-target="denegar-modal-<?= $soli['id'] ?>" data-modal-toggle="denegar-modal-<?= $soli['id'] ?>" type="button" class="text-red-600 hover:text-red-900 transition-colors focus:outline-none" id="eliminar" title="Eliminar">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="18" y1="6" x2="6" y2="18" />
                                        <line x1="6" y1="6" x2="18" y2="18" />
                                    </svg>
                                </button>

                                <button data-modal-target="view-solicitud-modal-<?= $soli['id'] ?>" data-modal-toggle="view-solicitud-modal-<?= $soli['id'] ?>" type="button" class="text-blue-600 hover:text-blue-900 transition-colors focus:outline-none" id="ver" title="Ver">
                                    <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0001 5.25C9.22586 5.25 6.79699 6.91121 5.12801 8.44832C4.28012 9.22922 3.59626 10.0078 3.12442 10.5906C2.88804 10.8825 2.70368 11.1268 2.57736 11.2997C2.51417 11.3862 2.46542 11.4549 2.43187 11.5029C2.41509 11.5269 2.4021 11.5457 2.393 11.559L2.38227 11.5747L2.37911 11.5794L2.10547 12.0132L2.37809 12.4191L2.37911 12.4206L2.38227 12.4253L2.393 12.441C2.4021 12.4543 2.41509 12.4731 2.43187 12.4971C2.46542 12.5451 2.51417 12.6138 2.57736 12.7003C2.70368 12.8732 2.88804 13.1175 3.12442 13.4094C3.59626 13.9922 4.28012 14.7708 5.12801 15.5517C6.79699 17.0888 9.22586 18.75 12.0001 18.75C14.7743 18.75 17.2031 17.0888 18.8721 15.5517C19.72 14.7708 20.4039 13.9922 20.8757 13.4094C21.1121 13.1175 21.2964 12.8732 21.4228 12.7003C21.4859 12.6138 21.5347 12.5451 21.5682 12.4971C21.585 12.4731 21.598 12.4543 21.6071 12.441L21.6178 12.4253L21.621 12.4206L21.6224 12.4186L21.9035 12L21.622 11.5809L21.621 11.5794L21.6178 11.5747L21.6071 11.559C21.598 11.5457 21.585 11.5269 21.5682 11.5029C21.5347 11.4549 21.4859 11.3862 21.4228 11.2997C21.2964 11.1268 21.1121 10.8825 20.8757 10.5906C20.4039 10.0078 19.72 9.22922 18.8721 8.44832C17.2031 6.91121 14.7743 5.25 12.0001 5.25ZM4.29022 12.4656C4.14684 12.2885 4.02478 12.1311 3.92575 12C4.02478 11.8689 4.14684 11.7115 4.29022 11.5344C4.72924 10.9922 5.36339 10.2708 6.14419 9.55168C7.73256 8.08879 9.80369 6.75 12.0001 6.75C14.1964 6.75 16.2676 8.08879 17.8559 9.55168C18.6367 10.2708 19.2709 10.9922 19.7099 11.5344C19.8533 11.7115 19.9753 11.8689 20.0744 12C19.9753 12.1311 19.8533 12.2885 19.7099 12.4656C19.2709 13.0078 18.6367 13.7292 17.8559 14.4483C16.2676 15.9112 14.1964 17.25 12.0001 17.25C9.80369 17.25 7.73256 15.9112 6.14419 14.4483C5.36339 13.7292 4.72924 13.0078 4.29022 12.4656ZM14.25 12C14.25 13.2426 13.2427 14.25 12 14.25C10.7574 14.25 9.75005 13.2426 9.75005 12C9.75005 10.7574 10.7574 9.75 12 9.75C13.2427 9.75 14.25 10.7574 14.25 12ZM15.75 12C15.75 14.0711 14.0711 15.75 12 15.75C9.92898 15.75 8.25005 14.0711 8.25005 12C8.25005 9.92893 9.92898 8.25 12 8.25C14.0711 8.25 15.75 9.92893 15.75 12Z" fill="#007bff"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <div id="aceptar-modal-<?= $soli['id'] ?>" tabindex="-1" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/50 overflow-y-auto">
                        <div class="relative w-full max-w-md p-4">
                            <div class="bg-white rounded-2xl shadow-xl p-6 text-center border border-gray-100">

                                <button type="button" class="absolute top-5 right-5 text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg w-8 h-8 flex items-center justify-center" data-modal-hide="aceptar-modal-<?= $soli['id'] ?>">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M1 1l12 12M13 1L1 13" />
                                    </svg>
                                </button>


                                <div class="flex justify-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>


                                <h3 class="mb-4 text-xl font-semibold text-gray-700">Aceptar Solicitud</h3>
                                <p class="mb-5 text-gray-500 text-sm">Introduce el monto del crédito que deseas asignar a esta solicitud.</p>


                                <form action="../../app/controladores/adminC.php" method="post" class="mb-4 flex flex-col gap-3">
                                    <input type="hidden" name="accion" value="aceptarSoli">
                                    <input type="hidden" name="idSoli" value="<?= $soli['id'] ?>">
                                    <input type="number" name="cantidad" id="cantidad" placeholder="Monto del crédito" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-400 focus:outline-none text-gray-700 mb-4">

                                    <button type="submit" data-modal-hide="aceptar-modal-<?= $soli['id'] ?>"
                                        class="w-full bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg py-2 transition-colors mb-2">
                                        Aceptar Crédito
                                    </button>
                                </form>


                                <button type="button" data-modal-hide="aceptar-modal-<?= $soli['id'] ?>"
                                    class="w-full py-2 text-sm font-medium text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-green-600 transition-colors">
                                    Cancelar
                                </button>
                            </div>
                        </div>
                    </div>

                    <div id="denegar-modal-<?= $soli['id'] ?>" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-black/50">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-2xl shadow-lg p-6 text-center border border-gray-100">
                                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="denegar-modal-<?= $soli['id'] ?>">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                </button>

                                <div class="p-4 md:p-5">
                                    <div class="mx-auto mb-4 text-red-500 bg-red-50 w-16 h-16 rounded-full flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-red-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="18" y1="6" x2="6" y2="18" />
                                            <line x1="6" y1="6" x2="18" y2="18" />
                                        </svg>
                                    </div>
                                    <h3 class="mb-5 text-lg font-normal text-gray-600">¿Estás seguro de que deseas rechazar esta solicitud?</h3>
                                    <div class="flex items-center justify-center space-x-3">
                                        <form action="../../app/controladores/adminC.php?" method="POST">
                                            <input type="hidden" name="accion" value="denegarSoli">
                                            <input type="hidden" name="idSoli" value="<?= $soli['id'] ?>">
                                            <button data-modal-hide="denegar-modal-<?= $soli['id'] ?>" type="submit" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 transition-colors">
                                                Sí, rechazar
                                            </button>
                                        </form>

                                        <button data-modal-hide="denegar-modal-<?= $soli['id'] ?>" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-emerald-600">
                                            No, cancelar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="view-solicitud-modal-<?= $soli['id'] ?>" tabindex="-1"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 
            flex justify-center items-center w-full md:inset-0 
            h-[calc(100%-1rem)] max-h-full bg-black/50">

                        <div class="relative p-4 w-full max-w-lg max-h-full">
                            <div class="relative bg-white rounded-2xl shadow-lg border border-gray-100 p-5">

                           
                                <div class="flex items-center justify-between p-4 md:p-5 rounded-t">
                                    <h3 class="text-xl font-semibold text-green-600">
                                        Detalles de la Solicitud
                                    </h3>

                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 
                               rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                        data-modal-hide="view-solicitud-modal-<?= $soli['id'] ?>">
                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                    </button>
                                </div>

                                <div class="p-4 md:p-5 space-y-4 text-sm text-gray-700">

                                    <div>
                                        <span class="font-semibold">ID Solicitud:</span>
                                        <?= $soli['id'] ?>
                                    </div>

                                    <div>
                                        <span class="font-semibold">Usuario:</span>
                                        <?= htmlspecialchars($soli['username'] ?? $soli['id_usuario']) ?>
                                    </div>

                                    <div>
                                        <span class="font-semibold">Estado:</span>
                                        <span class="px-3 py-1 rounded-full text-white text-xs
                                            <?= $soli['estado'] === 'pendiente' ? 'bg-yellow-500' : '' ?>
                                            <?= $soli['estado'] === 'aprobada' ? 'bg-green-600' : '' ?>
                                            <?= $soli['estado'] === 'rechazada' ? 'bg-red-600' : '' ?>">
                                            <?= ucfirst($soli['estado']) ?>
                                        </span>
                                    </div>

                                    <div>
                                        <span class="font-semibold">Fecha de envío:</span>
                                        <?= $soli['fecha_envio'] ?>
                                    </div>

                                    <div>
                                        <span class="font-semibold">Fecha de resolución:</span>
                                        <?= $soli['fecha_resolucion'] ?? '—' ?>
                                    </div>

                                    <div>
                                        <label class="block mb-1 font-semibold">Texto de la solicitud:</label>
                                        <div class="bg-gray-50 border border-gray-300 rounded-lg p-3 text-gray-800 whitespace-pre-line">
                                            <?= htmlspecialchars($soli['texto']) ?>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

            </tbody>


        </table>

        <div class="flex justify-end mt-6 gap-1">

            <?php if ($paginaSoli > 1): ?>
                <a href="?paginaSoli=<?= $paginaSoli - 1 ?>"
                    class="px-3 py-1 rounded bg-gray-200 hover:bg-gray-300">
                    ←
                </a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $totalPaginasSoli; $i++): ?>
                <a href="?paginaSoli=<?= $i ?>"
                    class="px-3 py-1 rounded
           <?= $i == $paginaSoli
                    ? 'bg-green-500 text-white'
                    : 'bg-gray-200 hover:bg-gray-300' ?>">
                    <?= $i ?>
                </a>
            <?php endfor; ?>

            <?php if ($paginaSoli < $totalPaginasSoli): ?>
                <a href="?paginaSoli=<?= $paginaSoli + 1 ?>"
                    class="px-3 py-1 rounded bg-gray-200 hover:bg-gray-300">
                    →
                </a>
            <?php endif; ?>

        </div>
    </div>

    <div class="w-9/10 overflow-x-auto bg-white p-6 rounded-lg shadow-sm hidden" id="tablecredi">
        <table class="min-w-full divide-y divide-gray-200 text-left text-sm">

            <thead class="text-gray-500 uppercase font-medium">
                <tr>
                    <th class="px-4 py-3">ID Credito</th>
                    <th class="px-4 py-3">ID Solicitud</th>
                    <th class="px-4 py-3">Solicitante</th>
                    <th class="px-4 py-3">Cantidad</th>
                    <th class="px-4 py-3">Fecha Envio</th>
                    <th class="px-4 py-3">Estado</th>
                    <th class="px-4 py-3 text-right">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <?php foreach ($datosCredi as $credi) : ?>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-4 py-4">
                            <div class="font-semibold text-gray-900"><?= $credi['id'] ?></div>
                        </td>
                        <td class="px-4 py-4 text-gray-600"><?= $credi['id_solicitud'] ?></td>
                        <td class="px-4 py-4 text-gray-600"><?= $credi['nombreUser'] ?></td>
                        <td class="px-4 py-4 text-gray-600"><?= $credi['cantidad'] ?></td>
                        <td class="px-4 py-4 font-bold text-gray-900"><?= $credi['fecha_envio'] ?></td>
                        <?php if ($credi['estado'] == 'pendiente') : ?>
                            <td class="px-4 py-4">
                                <span class="px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                    <?= $credi['estado'] ?>
                                </span>
                            </td>
                        <?php endif; ?>

                        <?php if ($credi['estado'] == 'realizado') : ?>
                            <td class="px-4 py-4">
                                <span class="px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    <?= $credi['estado'] ?>
                                </span>
                            </td>
                        <?php endif; ?>

                        <td class="px-4 py-4">
                            <div class="flex justify-end gap-3">
                                <button data-modal-target="completo-modal-<?= $credi['id'] ?>" data-modal-toggle="completo-modal-<?= $credi['id'] ?>" type="button" class="text-blue-600 hover:text-blue-900 transition-colors focus:outline-none" id="editar" title="Editar">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 13l4 4L19 7" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <div id="completo-modal-<?= $credi['id'] ?>" tabindex="-1" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/50 overflow-y-auto">
                        <div class="relative w-full max-w-md p-4">
                            <div class="bg-white rounded-2xl shadow-xl p-6 text-center border border-gray-100">

                                <button type="button" class="absolute top-5 right-5 text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg w-8 h-8 flex items-center justify-center" data-modal-hide="completo-modal-<?= $credi['id'] ?>">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M1 1l12 12M13 1L1 13" />
                                    </svg>
                                </button>


                                <div class="flex justify-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>


                                <h3 class="mb-4 text-xl font-semibold text-gray-700">Marcar como completado</h3>
                                <p class="mb-5 text-gray-500 text-sm">¿Estás seguro de que deseas marcar este crédito como completado?</p>


                                <form action="../../app/controladores/adminC.php" method="post" class="mb-4 flex flex-col gap-3">
                                    <input type="hidden" name="accion" value="realizadoCredi">
                                    <input type="hidden" name="idCredi" value="<?= $credi['id'] ?>">

                                    <button type="submit" data-modal-hide="completo-modal-<?= $credi['id'] ?>"
                                        class="w-full bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg py-2 transition-colors mb-2">
                                        Marcar como completado
                                    </button>
                                </form>


                                <button type="button" data-modal-hide="completo-modal-<?= $credi['id'] ?>"
                                    class="w-full py-2 text-sm font-medium text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-green-600 transition-colors">
                                    Cancelar
                                </button>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

            </tbody>


        </table>

        <div class="flex justify-end mt-6 gap-1">

            <?php if ($paginaCredi > 1): ?>
                <a href="?paginasCredi=<?= $paginaCredi - 1 ?>"
                    class="px-3 py-1 rounded bg-gray-200 hover:bg-gray-300">
                    ←
                </a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $totalPaginasCredi; $i++): ?>
                <a href="?paginasCredi=<?= $i ?>"
                    class="px-3 py-1 rounded
           <?= $i == $paginaCredi
                    ? 'bg-green-500 text-white'
                    : 'bg-gray-200 hover:bg-gray-300' ?>">
                    <?= $i ?>
                </a>
            <?php endfor; ?>

            <?php if ($paginaCredi < $totalPaginasCredi): ?>
                <a href="?paginasCredi=<?= $paginaCredi + 1 ?>"
                    class="px-3 py-1 rounded bg-gray-200 hover:bg-gray-300">
                    →
                </a>
            <?php endif; ?>

        </div>
    </div>



</section>


<script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>


<script type="module">
    const tableUser = document.getElementById('tableuser');
    const tableSoli = document.getElementById('tablesoli');
    const tableCredi = document.getElementById('tablecredi');

    const linkUser = document.getElementById('users');
    const linkSoli = document.getElementById('soli');
    const linkCredi = document.getElementById('credi');


    const updateLinkStyles = (activeId) => {
        if (activeId === 'users') {
            linkUser.classList.add('bg-white', 'text-green-600');
            linkSoli.classList.remove('bg-white', 'text-green-600');
            linkCredi.classList.remove('bg-white', 'text-green-600');
        } else if (activeId === 'soli') {
            linkSoli.classList.add('bg-white', 'text-green-600');
            linkUser.classList.remove('bg-white', 'text-green-600');
            linkCredi.classList.remove('bg-white', 'text-green-600');
        } else if (activeId === 'credi') {
            linkCredi.classList.add('bg-white', 'text-green-600');
            linkUser.classList.remove('bg-white', 'text-green-600');
            linkSoli.classList.remove('bg-white', 'text-green-600');
        }
    }

    const showUsers = () => {
        tableUser.classList.remove('hidden');
        tableSoli.classList.add('hidden');
        tableCredi.classList.add('hidden');
        localStorage.setItem('activeTab', 'users');
        updateLinkStyles('users');
    }

    const showSoli = () => {
        tableSoli.classList.remove('hidden');
        tableUser.classList.add('hidden');
        tableCredi.classList.add('hidden');
        localStorage.setItem('activeTab', 'soli');
        updateLinkStyles('soli');
    }

    const showCredi = () => {
        tableCredi.classList.remove('hidden');
        tableUser.classList.add('hidden');
        tableSoli.classList.add('hidden');
        localStorage.setItem('activeTab', 'credi');
        updateLinkStyles('credi');
    }

    linkUser.onclick = (e) => {
        e.preventDefault();
        showUsers();
    }

    linkSoli.onclick = (e) => {
        e.preventDefault();
        showSoli();
    }

    linkCredi.onclick = (e) => {
        e.preventDefault();
        showCredi();
    }

    // Persistencia al recargar
    window.onload = () => {
        const activeTab = localStorage.getItem('activeTab');

        if (activeTab === 'soli') {
            showSoli();
        } else if (activeTab === 'credi') {
            showCredi();
        } else {
            showUsers();
        }
    };
</script>