<x-app-layout>
    <x-slot name="header">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('SDGOC Consulta') }}
        </h1>
    </x-slot>
    <div class="content">
        <div class="max-w-4xl mx-auto mt-8">
        <form action="" method="POST">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <!-- Nro -->
                <div class="col-span-1">
                    <label for="campo_numero1" class="block text-sm font-medium text-white">Nro</label>
                    <input type="number" name="campo_numero1" id="nroOc" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                <!-- Año -->
                <div class="col-span-1">
                    <label for="campo_numero2" class="block text-sm font-medium text-white">Año</label>
                    <input type="number" name="campo_numero2" id="anioOc" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                <!-- Importe -->
                <div class="col-span-1">
                    <label for="campo_double" class="block text-sm font-medium text-white">Importe</label>
                    <input type="number" step="0.01" name="campo_double" id="importeOc" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
            </div>
            <br><br>
            <!--Grilla 1 -->
            <div class="table-responsive">
                <table class="custom-table"> 
                    <thead>
                        <tr>
                            <th>Nro</th>
                            <th>Año</th>
                            <th>Fecha</th>
                            <th>Concepto</th>
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
            <br><br>
             <!--Grilla 2 -->
             <div class="table-responsive">
                <table class="custom-table"> 
                    <thead>
                        <tr>
                            <th>FF</th>
                            <th>PRG</th>
                            <th>Partida</th>
                            <th>Importe</th>
                            <th>SGG</th>
                            <th>RGG</th>
                            <th>Observaciones</th>
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
                            <td>Fila 1</td>
                            <td>Fila 1</td>
                            <td>Fila 1</td>
                        </tr>
                    </tbody>
                </table>
            </div>      
            <!-- Botón Volver -->
            <div class="mt-6">
                <a href="{{ route('sdgOc') }}" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 text-center inline-block">Volver</a>
            </div>
        </form>
    </div>
    </div>
</x-app-layout>