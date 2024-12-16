<x-app-layout>
    <x-slot name="header">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <script src="{{ asset('js/scripts.js') }}"></script>
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Liquidacion Detalle') }}
        </h1>
    </x-slot>
    <div class="content">
        <div class="max-w-4xl mx-auto mt-8">
        <form action="" method="POST">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <!-- Nro -->
                <div class="col-span-1">
                    <label for="campo_numero1" class="block text-sm font-medium text-white">Nro</label>
                    <input type="number" name="campo_numero1" id="nroLiq" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                <!-- Año -->
                <div class="col-span-1">
                    <label for="campo_numero2" class="block text-sm font-medium text-white">Año</label>
                    <input type="number" name="campo_numero2" id="anioLiq" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                <!-- Fecha-->
                <div class="col-span-1">
                    <label for="campo_fecha1" class="block text-sm font-medium text-white">Fecha</label>
                    <input type="date" name="campo_fecha1" id="fechaLiq" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                <!-- Cuit -->
                <div class="col-span-1">
                    <label for="campo_string1" class="block text-sm font-medium text-white">Cuit</label>
                    <input type="text" name="campo_string1" id="cuitLiq" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                 <!-- Razon Social -->
                 <div class="col-span-1">
                    <label for="campo_string1" class="block text-sm font-medium text-white">Razon Social</label>
                    <input type="text" name="campo_string1" id="razonSocialLiq" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                <!-- Fecha Vencimiento 1 -->
                <div class="col-span-1">
                    <label for="campo_fecha2" class="block text-sm font-medium text-white">Fecha Vencimiento 1</label>
                    <input type="date" name="campo_fecha2" id="fechaVencLiq" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                <!-- Fecha Vencimiento 2 -->
                <div class="col-span-1">
                    <label for="campo_fecha3" class="block text-sm font-medium text-white">Fecha Vencimiento 2</label>
                    <input type="date" name="campo_fecha3" id="fechaVenc2Liq" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                 <!-- A favor -->
                 <div class="col-span-1">
                    <label for="campo_string2" class="block text-sm font-medium text-white">A Favor De</label>
                    <input type="text" name="campo_string2" id="afavorLiq" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                <!-- Exp Año -->
                <div class="col-span-1">
                    <label for="campo_string3" class="block text-sm font-medium text-white">Exp Año</label>
                    <input type="text" name="campo_string3" id="expAñoLiq" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                <!-- Exp Nro -->
                <div class="col-span-1">
                    <label for="campo_double" class="block text-sm font-medium text-white">Anexo Nro</label>
                    <input type="text" name="" id="expNroLiq" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                <!-- Estado -->
                <div class="col-span-1">
                    <label for="campo_string4" class="block text-sm font-medium text-white">Estado</label>
                    <input type="text" name="campo_string4" id="estadoLiq" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                <!-- Importe -->
                <div class="col-span-1">
                    <label for="campo_double" class="block text-sm font-medium text-white">Importe Bruto</label>
                    <input type="number" step="0.01" name="campo_double" id="importeLiq" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                  <!-- Retenciones -->
                  <div class="col-span-1">
                    <label for="campo_double" class="block text-sm font-medium text-white">Total Retenciones</label>
                    <input type="number" step="0.01" name="campo_double" id="retencionesLiq" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                  <!-- Importe a Pagar -->
                <div class="col-span-1">
                    <label for="campo_double" class="block text-sm font-medium text-white">Importe A Pagar</label>
                    <input type="number" step="0.01" name="campo_double" id="importePagarLiq" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                <!-- Importe Letras -->
                <div class="col-span-1">
                    <label for="campo_string3" class="block text-sm font-medium text-white">Importe Letras</label>
                    <input type="text" name="campo_string3" id="importeLetrasLiq" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        value="" readonly>
                </div>
                <!-- Cantidad Comprobantes -->
                <div class="col-span-1">
                    <label for="campo_numero2" class="block text-sm font-medium text-white">Cant. Comprobante</label>
                    <input type="number" name="campo_numero2" id="cantCompLiq" 
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
            <a href="#" class="tab-link text-gray-500 hover:text-gray-700 px-3 py-2 text-sm font-medium" data-target="tab1">SDG Incluidas</a>
            <!-- Solapa 2 -->
            <a href="#" class="tab-link text-gray-500 hover:text-gray-700 px-3 py-2 text-sm font-medium" data-target="tab2">Retenciones</a>
            <!-- Solapa 3 -->
            <a href="#" class="tab-link text-gray-500 hover:text-gray-700 px-3 py-2 text-sm font-medium" data-target="tab3">Concepto Gastos</a>
            <!-- Solapa 4 -->
            <a href="#" class="tab-link text-gray-500 hover:text-gray-700 px-3 py-2 text-sm font-medium" data-target="tab4">Firmas</a>
        </nav>
    </div>
    <div class="container">
        <!-- Contenido de las solapas -->
        <div class="tab-content mt-4">
            <!-- Grilla 1 -->
            <div id="tab1" class="tab-content-item">
                <div class="table-responsive">
                    <table class="custom-table" id="liqDetalleGrilla1"> 
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NRO SDG</th>
                                <th>Año</th>
                                <th>Fecha</th>
                                <th>Proveedor</th>
                                <th>Tipo Compro</th>
                                <th>Nro. Compro</th>
                                <th>Importe $</th>
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
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Grilla 2 -->
            <div id="tab2" class="tab-content-item hidden">
                <div class="table-responsive">
                    <table class="custom-table" id="liqDetalleGrilla2"> 
                        <thead>
                            <tr>
                                <th>Impuesto</th>
                                <th>Importe</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fila 1</td>
                                <td>Fila 1</td>
                            </tr>
                            <tr>
                                <td>Fila 2</td>
                                <td>Fila 2</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Solapa  Concepto Gastos-->
            <div id="tab3" class="tab-content-item hidden">
                <<!-- Concepto -->
                <div class="col-span-2">
                    <label for="campo_texto" class="block text-sm font-medium text-white">Concepto</label>
                    <textarea name="campo_texto" id="conceptoLiq" rows="4" 
                        class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm" 
                        readonly></textarea>
                </div>
            </div>
            <!-- Firmas -->
            <div id="tab4" class="tab-content-item hidden">
                 <div class="table-responsive">
                    <table class="custom-table" id="liqDetalleGrilla2"> 
                        <thead>
                            <tr>
                                <th>Firma 1 Por</th>
                                <th>Firma 1 El</th>
                                <th>Firma 2 Por</th>
                                <th>Firma 2 El</th>
                                <th>Rechazado El</th>
                                <th>Rechazado Por</th>
                                <th>Motivo Rechazo</th>
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