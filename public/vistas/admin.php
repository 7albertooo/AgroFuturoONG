<?php

session_start();

include_once 'header.php';
?>


<section class="w-full mx-auto p-4 md:p-10 flex flex-col items-center  min-h-screen">

    <div class="w-9/10 mx-auto p-4 flex-row justify-start mb-6">
        <h1 class="font-bold text-3xl text-gray-800">PANEL DE ADMINISTRACIÓN</h1>
        <h3 class="text-gray-600">Gestiona solicitudes y usuarios</h3>
    </div>



    <div class="w-9/10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 p-4 bg-gray-50">

        <div class="flex items-center justify-between rounded-3xl border border-gray-100 bg-white p-6 shadow-sm transition-all duration-300 hover:scale-105 hover:shadow-md">
            <div class="flex flex-col gap-1">
                <h2 class="text-sm font-medium text-gray-400">Total Usuarios</h2>
                <p class="text-4xl font-bold text-gray-800">10</p>

            </div>
            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                </svg>
            </div>
        </div>

        <div class="flex items-center justify-between rounded-3xl border border-gray-100 bg-white p-6 shadow-sm transition-all duration-300 hover:scale-105 hover:shadow-md">
            <div class="flex flex-col gap-1 text-left">
                <h2 class="text-sm font-medium text-gray-400">Solicitudes Pendientes</h2>
                <p class="text-4xl font-bold text-gray-800">8</p>

            </div>
            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>

        <div class="flex items-center justify-between rounded-3xl border border-gray-100 bg-white p-6 shadow-sm transition-all duration-300 hover:scale-105 hover:shadow-md">
            <div class="flex flex-col gap-1 text-left">
                <h2 class="text-sm font-medium text-gray-400">En Formación</h2>
                <p class="text-4xl font-bold text-gray-800">15</p>

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
                <h2 class="text-sm font-medium text-gray-400">Subvenciones Otorgadas</h2>
                <p class="text-4xl font-bold text-gray-800">23</p>

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
                <a href="#" class="flex items-center justify-center gap-2 p-1 rounded-lg transition-colors hover:bg-gray-300 focus:bg-white focus:text-green-600 outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                    </svg>
                    <span class="font-medium">Usuarios</span>
                </a>
            </li>

            <li class="flex-1">
                <a href="#" class="flex items-center justify-center gap-2 p-1 rounded-lg transition-colors hover:bg-gray-300 focus:bg-white focus:text-green-600 outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="font-medium">Solicitudes</span>
                </a>
            </li>

        </ul>
    </div>


    <div class="w-9/10 overflow-x-auto bg-white p-6 rounded-lg shadow-sm">
        <table class="min-w-full divide-y divide-gray-200 text-left text-sm">

            <thead class="text-gray-500 uppercase font-medium">
                <tr>
                    <th class="px-4 py-3">Solicitud</th>
                    <th class="px-4 py-3">Solicitante</th>
                    <th class="px-4 py-3">Estado</th>
                    <th class="px-4 py-3 text-right">Monto</th>
                    <th class="px-4 py-3 text-right">Fecha</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-4 py-4">
                        <div class="font-semibold text-gray-900">Ayuda para cultivo de olivos</div>
                        <div class="text-xs text-gray-500 truncate w-64">Solicitud de ayuda para expandir...</div>
                    </td>
                    <td class="px-4 py-4 text-gray-600">María García</td>
                    <td class="px-4 py-4">
                        <span class="px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                            Pendiente
                        </span>
                    </td>
                    <td class="px-4 py-4 text-right font-bold text-gray-900">5000 €</td>
                    <td class="px-4 py-4 text-right text-gray-500">15/2/2026</td>
                </tr>

            </tbody>


        </table>
    </div>



</section>