<x-app-layout>
    <x-slot name="header">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <script src="{{ asset('js/scripts.js') }}"></script>
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Sueldo Detalle') }}
        </h1>
    </x-slot>
    <div class="content">
        <div class="max-w-4xl mx-auto mt-8">
            <form action="" method="POST">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Nro -->
                    <div class="col-span-1">
                        <label for="campo_numero1" class="block text-sm font-medium text-white">ID</label>
                        <input type="number" name="campo_numero1" id="idDetalle" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Nro ESIDIF -->
                    <div class="col-span-1">
                        <label for="nroEsidifSueldo" class="block text-sm font-medium text-white">Nro ESIDIF</label>
                        <input type="number" name="campo_numero2" id="nroEsidifSueldo" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Fecha ESIDIF-->
                    <div class="col-span-1">
                        <label for="fechaEsidifSueldo" class="block text-sm font-medium text-white">Fecha ESIDIF</label>
                        <input type="date" name="campo_fecha1" id="fechaEsidifSueldo" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Fecha Creacion-->
                    <div class="col-span-1">
                        <label for="fechaCreacionSueldo" class="block text-sm font-medium text-white">Fecha Creacion</label>
                        <input type="date" name="campo_fecha2" id="fechaCreacionSueldo" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Periodo -->
                    <div class="col-span-1">
                        <label for="periodoSueldo" class="block text-sm font-medium text-white">Periodo</label>
                        <input type="text" name="campo_string2" id="periodoSueldo" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Año -->
                    <div class="col-span-1">
                        <label for="añoSueldos" class="block text-sm font-medium text-white">Año</label>
                        <input type="number" name="campo_numero3" id="añoSueldos" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Importe Proveedores -->
                    <div class="col-span-1">
                        <label for="importeProvSueldos" class="block text-sm font-medium text-white">Importe Proveedores</label>
                        <input type="number" step="0.01" name="campo_double1" id="importeProvSueldos" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Importe Partidas -->
                    <div class="col-span-1">
                        <label for="importePartidasSueldo" class="block text-sm font-medium text-white">Importe Partidas</label>
                        <input type="number" step="0.01" name="campo_double2" id="importePartidasSueldo" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Importe Total -->
                    <div class="col-span-1">
                        <label for="importeTotalSueldo" class="block text-sm font-medium text-white">Importe Total</label>
                        <input type="number" step="0.01" name="campo_double3" id="importeTotalSueldo" 
                            class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                            value="" readonly>
                    </div>
                    <!-- Estado -->
                    <div class="col-span-1">
                        <label for="estadoSueldo" class="block text-sm font-medium text-white">Estado</label>
                        <input type="text" name="campo_string1" id="estadoSueldo" 
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
                            <a href="#" class="tab-link text-gray-500 hover:text-gray-700 px-3 py-2 text-sm font-medium" data-target="tab1">Partidas</a>
                            <!-- Solapa 2 -->
                            <a href="#" class="tab-link text-gray-500 hover:text-gray-700 px-3 py-2 text-sm font-medium" data-target="tab2">Proveedores</a>
                            <!-- Solapa 3 -->
                            <a href="#" class="tab-link text-gray-500 hover:text-gray-700 px-3 py-2 text-sm font-medium" data-target="tab3">Notas</a>
                            <!-- Solapa 4 -->
                            <a href="#" class="tab-link text-gray-500 hover:text-gray-700 px-3 py-2 text-sm font-medium" data-target="tab4">Bitacora</a>
                        </nav>
                    </div>
                    <div class="container">
                        <!-- Contenido de las solapas -->
                        <div class="tab-content mt-4">
                            <!-- Grilla 1 -->
                            <div id="tab1" class="tab-content-item">
                                <div class="table-responsive">
                                    <table class="custom-table" id="grillaPartidaSueldo"> 
                                        <thead>
                                            <tr>
                                                <th>Entidad</th>
                                                <th>Partida</th>
                                                <th>Nombre</th>
                                                <th>Importe</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
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
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Grilla 2 -->
                            <div id="tab2" class="tab-content-item hidden">
                                <div class="table-responsive">
                                    <table class="custom-table" id="grillaProveedoresSueldo"> 
                                        <thead>
                                            <tr>
                                                <th>Entidad</th>
                                                <th>CUIT</th>
                                                <th>Razon Social</th>
                                                <th>Importe</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
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
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Solapa  Notas-->
                            <div id="tab3" class="tab-content-item hidden">
                                <!-- Notas -->
                                <div class="col-span-2">
                                    <label for="notasSueldos" class="block text-sm font-medium text-white">Notas</label>
                                    <textarea name="campo_texto" id="notasSueldos" rows="4" 
                                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                                        readonly></textarea>
                                </div>
                            </div>
                            <!-- Bitacora -->
                            <div id="tab4" class="tab-content-item hidden">
                                <div class="col-span-2">
                                    <form action="" method="POST">
                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                            <!-- Fecha Creacion-->
                                            <div class="col-span-1">
                                                <label for="fechaCreadoSueldo" class="block text-sm font-medium text-white">Creado EL</label>
                                                <input type="date" name="campo_fecha3" id="fechaCreadoSueldo" 
                                                    class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                                                    value="" readonly>
                                            </div>
                                            <!-- Creado -->
                                            <div class="col-span-1">
                                                <label for="creadoSueldo" class="block text-sm font-medium text-white">Creado Por</label>
                                                <input type="number" name="campo_numero4" id="creadoSueldo" 
                                                    class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                                                    value="" readonly>
                                            </div>
                                            <!-- Verificado El-->
                                            <div class="col-span-1">
                                                <label for="fechaVerificadoSueldo" class="block text-sm font-medium text-white">Verificado  El</label>
                                                <input type="date" name="campo_fecha4" id="fechaVerificadoSueldo" 
                                                    class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                                                    value="" readonly>
                                            </div>
                                            <!-- Verificado Por -->
                                            <div class="col-span-1">
                                                <label for="verifSueldo" class="block text-sm font-medium text-white">Verificado Por</label>
                                                <input type="number" name="campo_numero5" id="verifSueldo" 
                                                    class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                                                    value="" readonly>
                                            </div>
                                            <!-- Modificado El-->
                                            <div class="col-span-1">
                                                <label for="fechaModifSueldo" class="block text-sm font-medium text-white">Modificado  El</label>
                                                <input type="date" name="campo_fecha5" id="fechaModifSueldo" 
                                                    class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                                                    value="" readonly>
                                            </div>
                                            <!-- Modificado Por -->
                                            <div class="col-span-1">
                                                <label for="modificadoPor" class="block text-sm font-medium text-white">Modificado Por</label>
                                                <input type="number" name="campo_numero6" id="modificadoPor" 
                                                    class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                                                    value="" readonly>
                                            </div>
                                            <!-- Condiciones Aprobacion -->
                                            <div class="col-span-2">
                                                <label for="condicionesSueldo" class="block text-sm font-medium text-white">Condiciones Aprobacion</label>
                                                <textarea name="campo_texto2" id="condicionesSueldo" rows="4" 
                                                    class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                                                    readonly></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Botón Volver -->
                <div class="mt-6">
                    <a href="{{ route('liq') }}" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 text-center inline-block">Volver</a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
