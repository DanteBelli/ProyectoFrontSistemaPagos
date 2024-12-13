<x-app-layout>
    <x-slot name="header">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('SDG Consulta') }}
        </h1>
    </x-slot>
    <div class="content">
        <div class="max-w-4xl mx-auto mt-8">
        <form action="" method="POST">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <!-- Campo Numérico 1 -->
                <div class="col-span-1">
                    <label for="campo_numero1" class="block text-sm font-medium text-white">Nro</label>
                    <input type="number" name="campo_numero1" id="campo_numero1" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                <!-- Campo Numérico 2 -->
                <div class="col-span-1">
                    <label for="campo_numero2" class="block text-sm font-medium text-white">Año</label>
                    <input type="number" name="campo_numero2" id="campo_numero2" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                <!-- Campo Fecha 1 -->
                <div class="col-span-1">
                    <label for="campo_fecha1" class="block text-sm font-medium text-white">Fecha</label>
                    <input type="date" name="campo_fecha1" id="campo_fecha1" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                <!-- Campo String 1 -->
                <div class="col-span-1">
                    <label for="campo_string1" class="block text-sm font-medium text-white">Proveedor</label>
                    <input type="text" name="campo_string1" id="campo_string1" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                <!-- Campo Fecha 2 -->
                <div class="col-span-1">
                    <label for="campo_fecha2" class="block text-sm font-medium text-white">Fecha Emision</label>
                    <input type="date" name="campo_fecha2" id="campo_fecha2" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                <!-- Campo Fecha 3 -->
                <div class="col-span-1">
                    <label for="campo_fecha3" class="block text-sm font-medium text-white">Fecha Vencimiento</label>
                    <input type="date" name="campo_fecha3" id="campo_fecha3" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                 <!-- Campo String 2 -->
                 <div class="col-span-1">
                    <label for="campo_string2" class="block text-sm font-medium text-white">Tipo Comprobante</label>
                    <input type="text" name="campo_string2" id="campo_string2" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                <!-- Campo String 3 -->
                <div class="col-span-1">
                    <label for="campo_string3" class="block text-sm font-medium text-white">Nro Comprobante</label>
                    <input type="text" name="campo_string3" id="campo_string3" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                <!-- Campo Double -->
                <div class="col-span-1">
                    <label for="campo_double" class="block text-sm font-medium text-white">Importe</label>
                    <input type="number" step="0.01" name="campo_double" id="campo_double" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                <!-- Campo String 4 -->
                <div class="col-span-1">
                    <label for="campo_string4" class="block text-sm font-medium text-white">Estado</label>
                    <input type="text" name="campo_string4" id="campo_string4" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                <!-- Campo Medium Text -->
                <div class="col-span-2">
                    <label for="campo_texto" class="block text-sm font-medium text-white">Concepto</label>
                    <textarea name="campo_texto" id="campo_texto" rows="4" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        readonly></textarea>
                </div>
            </div>
            <br><br>
            <!--Grilla -->
            <div class="table-responsive">
                <table class="custom-table"> 
                    <thead>
                        <tr>
                            <th>Fuente</th>
                            <th>Programa</th>
                            <th>Partida</th>
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
            <!-- Botón Volver -->
            <div class="mt-6">
                <a href="{{ route('sdg') }}" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 text-center inline-block">Volver</a>
            </div>
        </form>
    </div>
    </div>
</x-app-layout>