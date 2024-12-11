<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Principal') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <!-- Contenedor para la cuadrícula 3x3 -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="p-6 bg-gray-100 dark:bg-gray-700 border border-gray-200 rounded-lg shadow-sm hover:bg-blue-50 transition duration-300 ease-in-out">
                            <h3 class="text-center text-lg font-semibold text-gray-800 dark:text-gray-200">
                                SDG x Estados({{ now()->year }})
                            </h3>
                            <p class="mt-4 text-center text-gray-600 dark:text-gray-400">
                               Torta+ items.
                            </p>
                        </div>
                        <div class="p-6 bg-gray-100 dark:bg-gray-700 border border-gray-200 rounded-lg shadow-sm hover:bg-blue-50 transition duration-300 ease-in-out">
                            <h3 class="text-center text-lg font-semibold text-gray-800 dark:text-gray-200">
                            SDG x Responsable({{ now()->year }})
                            </h3>
                            <p class="mt-4 text-center text-gray-600 dark:text-gray-400">
                                Descripción de la sección.
                            </p>
                        </div>
                        <div class="p-6 bg-gray-100 dark:bg-gray-700 border border-gray-200 rounded-lg shadow-sm hover:bg-blue-50 transition duration-300 ease-in-out">
                            <h3 class="text-center text-lg font-semibold text-gray-800 dark:text-gray-200">
                                SDG Comedor x Estados({{ now()->year }})
                            </h3>
                            <p class="mt-4 text-center text-gray-600 dark:text-gray-400">
                                Descripción de la sección.
                            </p>
                        </div>
                        <div class="p-6 bg-gray-100 dark:bg-gray-700 border border-gray-200 rounded-lg shadow-sm hover:bg-blue-50 transition duration-300 ease-in-out">
                            <h3 class="text-center text-lg font-semibold text-gray-800 dark:text-gray-200">
                                LIQ x Estado({{ now()->year }})
                            </h3>
                            <p class="mt-4 text-center text-gray-600 dark:text-gray-400">
                                Descripción de la sección.
                            </p>
                        </div>
                        <div class="p-6 bg-gray-100 dark:bg-gray-700 border border-gray-200 rounded-lg shadow-sm hover:bg-blue-50 transition duration-300 ease-in-out">
                            <h3 class="text-center text-lg font-semibold text-gray-800 dark:text-gray-200">
                                OP x Estado({{ now()->year }})
                            </h3>
                            <p class="mt-4 text-center text-gray-600 dark:text-gray-400">
                                Descripción de la sección.
                            </p>
                        </div>
                        <div class="p-6 bg-gray-100 dark:bg-gray-700 border border-gray-200 rounded-lg shadow-sm hover:bg-blue-50 transition duration-300 ease-in-out">
                            <h3 class="text-center text-lg font-semibold text-gray-800 dark:text-gray-200">
                                DISPO x Estado({{ now()->year }}).
                            </h3>
                            <p class="mt-4 text-center text-gray-600 dark:text-gray-400">
                                Descripción de la sección.
                            </p>
                        </div>
                        <div class="p-6 bg-gray-100 dark:bg-gray-700 border border-gray-200 rounded-lg shadow-sm hover:bg-blue-50 transition duration-300 ease-in-out">
                            <h3 class="text-center text-lg font-semibold text-gray-800 dark:text-gray-200">
                                Ranking Cant. SDG x PROVEEDOR({{ now()->year }})
                            </h3>
                            <p class="mt-4 text-center text-gray-600 dark:text-gray-400">
                                Descripción de la sección.
                            </p>
                        </div>
                        <div class="p-6 bg-gray-100 dark:bg-gray-700 border border-gray-200 rounded-lg shadow-sm hover:bg-blue-50 transition duration-300 ease-in-out">
                            <h3 class="text-center text-lg font-semibold text-gray-800 dark:text-gray-200">
                                Cant. Creados Hoy ({{ now()->format('d/m/Y') }})
                            </h3>
                            <p class="mt-4 text-center text-gray-600 dark:text-gray-400">
                                Descripción de la sección.
                            </p>
                        </div>
                        <div class="p-6 bg-gray-100 dark:bg-gray-700 border border-gray-200 rounded-lg shadow-sm hover:bg-blue-50 transition duration-300 ease-in-out">
                            <h3 class="text-center text-lg font-semibold text-gray-800 dark:text-gray-200">
                               Cant. Entidad CON / SIN ({{now()->year}})
                            </h3>
                            <p class="mt-4 text-center text-gray-600 dark:text-gray-400">
                                Descripción de la sección 1.
                            </p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>