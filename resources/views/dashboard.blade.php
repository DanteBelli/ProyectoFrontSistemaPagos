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
                            <!--Grilla -->
                            <div class="overflow-x-auto mt-6">
                                <table class="min-w-full table-auto">
                                    <thead>
                                        <tr class="bg-gray-200 dark:bg-gray-600">
                                            <th class="px-4 py-2 text-left text-gray-700 dark:text-gray-300">Cant.</th>
                                            <th class="px-4 py-2 text-left text-gray-700 dark:text-gray-300">Proveedor</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b">
                                            <td class="px-4 py-2 text-gray-700 dark:text-gray-300">Dato 1</td>
                                            <td class="px-4 py-2 text-gray-700 dark:text-gray-300">Dato 2</t>

                                        </tr>
                                        <tr class="border-b">
                                            <td class="px-4 py-2 text-gray-700 dark:text-gray-300">Dato 5</td>
                                            <td class="px-4 py-2 text-gray-700 dark:text-gray-300">Dato 6</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="p-6 bg-gray-100 dark:bg-gray-700 border border-gray-200 rounded-lg shadow-sm hover:bg-blue-50 transition duration-300 ease-in-out">
                            <h3 class="text-center text-lg font-semibold text-gray-800 dark:text-gray-200">
                                Cant. Creados Hoy ({{ now()->format('d/m/Y') }})
                            </h3>
                            <!--Grilla -->
                            <div class="overflow-x-auto mt-6">
                                <table class="min-w-full table-auto">
                                    <thead>
                                        <tr class="bg-gray-200 dark:bg-gray-600">
                                            <th class="px-4 py-2 text-left text-gray-700 dark:text-gray-300">Descripción</th>
                                            <th class="px-4 py-2 text-left text-gray-700 dark:text-gray-300">Cant.</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b">
                                            <td class="px-4 py-2 text-gray-700 dark:text-gray-300">Dato 1</td>
                                            <td class="px-4 py-2 text-gray-700 dark:text-gray-300">Dato 2</t>

                                        </tr>
                                        <tr class="border-b">
                                            <td class="px-4 py-2 text-gray-700 dark:text-gray-300">Dato 5</td>
                                            <td class="px-4 py-2 text-gray-700 dark:text-gray-300">Dato 6</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="p-6 bg-gray-100 dark:bg-gray-700 border border-gray-200 rounded-lg shadow-sm hover:bg-blue-50 transition duration-300 ease-in-out">
                            <h3 class="text-center text-lg font-semibold text-gray-800 dark:text-gray-200">
                               Cant. Entidad CON / SIN ({{now()->year}})
                            </h3>
                            <!--Grilla -->
                            <div class="overflow-x-auto mt-6">
                                <table class="min-w-full table-auto">
                                    <thead>
                                        <tr class="bg-gray-200 dark:bg-gray-600">
                                            <th class="px-4 py-2 text-left text-gray-700 dark:text-gray-300">Descripción</th>
                                            <th class="px-4 py-2 text-left text-gray-700 dark:text-gray-300">Cantidad</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b">
                                            <td class="px-4 py-2 text-gray-700 dark:text-gray-300">Dato 1</td>
                                            <td class="px-4 py-2 text-gray-700 dark:text-gray-300">Dato 2</t>

                                        </tr>
                                        <tr class="border-b">
                                            <td class="px-4 py-2 text-gray-700 dark:text-gray-300">Dato 5</td>
                                            <td class="px-4 py-2 text-gray-700 dark:text-gray-300">Dato 6</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>