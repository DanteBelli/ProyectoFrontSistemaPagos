<x-app-layout>
    <x-slot name="header">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <script src="{{ asset('js/scripts.js') }}"></script>
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('OP Detalle') }}
        </h1>
    </x-slot>
    <div class="content">
        <div class="max-w-4xl mx-auto mt-8">
            <form action="" method="POST">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Nro ESIDIF -->
                    <div class="col-span-1">
                        <label for="campo_numero1" class="block text-sm font-medium text-white">Nro ESIDIF</label>
                        <input type="number" name="campo_numero1" id="nroEsidifOp" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Año -->
                    <div class="col-span-1">
                        <label for="campo_numero2" class="block text-sm font-medium text-white">Año</label>
                        <input type="number" name="campo_numero2" id="añoOp" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Fecha ESIDIF -->
                    <div class="col-span-1">
                        <label for="campo_fecha1" class="block text-sm font-medium text-white">Fecha ESIDIF</label>
                        <input type="date" name="campo_fecha1" id="fechaEsidifOp" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Fecha Creacion -->
                    <div class="col-span-1">
                        <label for="campo_fecha2" class="block text-sm font-medium text-white">Fecha Creacion</label>
                        <input type="date" name="campo_fecha2" id="fechaCreacionOp" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Fecha Vencimiento -->
                    <div class="col-span-1">
                        <label for="campo_fecha3" class="block text-sm font-medium text-white">Fecha Vencimiento</label>
                        <input type="date" name="campo_fecha3" id="fechaVencOp" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Cuenta Pagadora-->
                    <div class="col-span-1">
                        <label for="campo_string1" class="block text-sm font-medium text-white">Cuenta Pagadora</label>
                        <input type="text" name="campo_string1" id="cuentaPagadoraOp" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Estado-->
                    <div class="col-span-1">
                        <label for="campo_string2" class="block text-sm font-medium text-white">Estado</label>
                        <input type="text" name="campo_string2" id="estadoOp" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Letras Importe-->
                    <div class="col-span-1">
                        <input type="text" name="campo_string3" id="letrasImporteOp" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Importe -->
                    <div class="col-span-1">
                        <label for="campo_double" class="block text-sm font-medium text-white">Importe a Pagar</label>
                        <input type="number" step="0.01" name="campo_double" id="importeOp" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                </div>
                <br><br>
                <!-- Solapa de Grillas-->
                <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                    <!-- Contenedor de las solapas -->
                    <div class="border-b border-gray-200">
                        <nav class="flex space-x-8">
                            <!-- Solapa 1 -->
                            <a href="#" class="tab-link text-gray-500 hover:text-gray-700 px-3 py-2 text-sm font-medium" data-target="tab1">LIQ. Incluidas</a>
                            <!-- Solapa 2 -->
                            <a href="#" class="tab-link text-gray-500 hover:text-gray-700 px-3 py-2 text-sm font-medium" data-target="tab2">Extras</a>
                        </nav>
                    </div>

                    <div class="container">
                        <!-- Contenido de las solapas -->
                        <div class="tab-content mt-4">
                            <!-- Grilla 1 -->
                            <div id="tab1" class="tab-content-item">
                                <div class="table-responsive">
                                    <table class="custom-table" id="tableDispo1"> 
                                        <thead>
                                            <tr>
                                                <th>Entidad</th>
                                                <th>ID</th>
                                                <th>Numero</th>
                                                <th>Año</th>
                                                <th>Fecha</th>
                                                <th>Importe $</th>
                                                <th>Concepto</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Fila 1</td>
                                                <td>Fila 1</td>
                                                <td>Fila 1</td>
                                                <td>Fila 1</td>
                                                <td>Fila 1</td>
                                                <td>Fila 1</td>
                                                <td>Fila 1</td>
                                            </tr>
                                            <tr>
                                                <td>Fila 2</td>
                                                <td>Fila 2</td>
                                                <td>Fila 2</td>
                                                <td>Fila 2</td>
                                                <td>Fila 2</td>
                                                <td>Fila 2</td>
                                                <td>Fila 2</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br><br>
                                </div>
                            </div>
                            <!-- Concepto -->
                            <div id="tab2" class="tab-content-item hidden">
                                <!-- Concepto -->
                                <div class="col-span-2">
                                    <label for="campo_texto" class="block text-sm font-medium text-white">Extra</label>
                                    <textarea name="campo_texto" id="conceptoOp" rows="4" 
                                    class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                                    readonly></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Botón Volver -->
                <div class="mt-6">
                    <a href="{{ route('dispo') }}" class="w-auto bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 text-center inline-block">Volver</a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>