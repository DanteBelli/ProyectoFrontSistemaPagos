<x-app-layout>
    <x-slot name="header">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <script src="{{ asset('js/scripts.js') }}"></script>
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Disposición Detalle') }}
        </h1>
    </x-slot>
    <div class="content">
        <div class="max-w-4xl mx-auto mt-8">
            <form action="" method="POST">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Nro -->
                    <div class="col-span-1">
                        <label for="expNroDispo" class="block text-sm font-medium text-white">Exp. Nro</label>
                        <input type="number" name="expNroDispo" id="expNroDispo" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Año -->
                    <div class="col-span-1">
                        <label for="anioDispo" class="block text-sm font-medium text-white">Año</label>
                        <input type="number" name="anioDispo" id="anioDispo" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Firmante-->
                    <div class="col-span-1">
                        <label for="firmanteDispo" class="block text-sm font-medium text-white">Firmante</label>
                        <input type="text" name="firmanteDispo" id="firmanteDispo" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Nro Dispo-->
                    <div class="col-span-1">
                        <label for="nroDispo" class="block text-sm font-medium text-white">Nro Dispo</label>
                        <input type="number" name="nroDispo" id="nroDispo" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Anexo Nro -->
                    <div class="col-span-1">
                        <label for="anexoNroDispo" class="block text-sm font-medium text-white">Anexo Nro</label>
                        <input type="number" name="anexoNroDispo" id="anexoNroDispo" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Año -->
                    <div class="col-span-1">
                        <label for="añoDispo" class="block text-sm font-medium text-white">Año</label>
                        <input type="number" name="añoDispo" id="añoDispo" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Cargo Firmante-->
                    <div class="col-span-1">
                        <label for="cargoFirmanteDispo" class="block text-sm font-medium text-white">Cargo Firmante</label>
                        <input type="text" name="cargoFirmanteDispo" id="cargoFirmanteDispo" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm">
                    </div>      
                    <!-- Fecha-->
                    <div class="col-span-1">
                        <label for="fechaDispo" class="block text-sm font-medium text-white">Fecha</label>
                        <input type="date" name="fechaDispo" id="fechaDispo" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Proveedor-->
                    <div class="col-span-1">
                        <label for="idProveedor" class="block text-sm font-medium text-white">Proveedor</label>
                        <input type="text" name="idProveedor" id="idProveedor" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm">     
                    </div>
                    <!-- CUIT -->
                    <div class="col-span-1">
                        <label for="cuitProveedorDispo" class="block text-sm font-medium text-white">CUIT</label>
                        <input type="number" name="cuitProveedorDispo" id="cuitProveedorDispo" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Estado -->
                    <div class="col-span-1">
                        <label for="estadoDispo" class="block text-sm font-medium text-white">Estado</label>
                        <input type="number" name="estadoDispo" id="estadoDispo" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Importe -->
                    <div class="col-span-1">
                        <label for="importeDispo" class="block text-sm font-medium text-white">Importe a Pagar</label>
                        <input type="number" step="0.01" name="importeDispo" id="importeDispo" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Letras Importe -->
                    <div class="col-span-1">
                        <label for="importeDispo" class="block text-sm font-medium text-white">Importe Letras</label>
                        <input type="text" name="importeLetrasDispo" id="importeLetrasDispo" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Q SDG -->
                    <div class="col-span-1">
                        <label for="qsdgDispo" class="block text-sm font-medium text-white">Q SDG</label>
                        <input type="number" name="qsdgDispo" id="qsdgDispo" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                </div>
                <br><br>

                <!-- Solapa de Grillas -->
                <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                    <!-- Contenedor de las solapas -->
                    <div class="border-b border-gray-200">
                        <nav class="flex space-x-8">
                            <!-- Solapa 1 -->
                            <a href="#" class="tab-link text-gray-500 hover:text-gray-700 px-3 py-2 text-sm font-medium" data-target="tab1">Concepto</a>
                            <!-- Solapa 2 -->
                            <a href="#" class="tab-link text-gray-500 hover:text-gray-700 px-3 py-2 text-sm font-medium" data-target="tab2">Docs Incluidos</a>
                        </nav>
                    </div>

                    <div class="container">
                        <!-- Contenido de las solapas -->
                        <div class="tab-content mt-4">
                            <!-- Solapa Concepto Gastos-->
                            <div id="tab1" class="tab-content-item hidden">
                                <!-- Concepto -->
                                <div class="col-span-2">
                                    <label for="conceptoLiq" class="block text-sm font-medium text-white">Concepto</label>
                                    <textarea name="conceptoLiq" id="conceptoLiq" rows="4" 
                                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                                        readonly></textarea>
                                </div>
                            </div>
                            <!-- Grilla 2 -->
                            <div id="tab2" class="tab-content-item">
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
                                    <table class="custom-table" id="tableDispo2"> 
                                        <thead>
                                            <tr>
                                                <th>Entidad</th>
                                                <th>ID</th>
                                                <th>Numero</th>
                                                <th>Año</th>
                                                <th>Fecha</th>
                                                <th>Tipo C</th>
                                                <th>Nro PtoVta</th>
                                                <th>Nro Compro</th>
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
                                                <td>Fila 2</td>
                                                <td>Fila 2</td>
                                                <td>Fila 2</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Botón Volver -->
                <div class="mt-6">
                    <a href="{{ route('dispo') }}" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 text-center inline-block">Volver</a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>