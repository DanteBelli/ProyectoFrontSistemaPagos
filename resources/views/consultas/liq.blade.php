<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Liquidacion') }}
        </h1>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <script src="{{ asset('js/scripts.js') }}"></script>
    </x-slot>
    <div class="content">
    <div class="table-responsive">
            <table class="custom-table"> 
                <thead>
                    <tr>
                        <th></th>
                        <th>Entidad</th>
                        <th>ID</th>
                        <th>Estado</th>
                        <th>Numero</th>
                        <th>Año</th>
                        <th>Fecha</th>
                        <th>Proveedor</th>
                        <th>A Favor De</th>
                        <th>Importe Bruto</th>
                        <th>Retenciones</th>
                        <th>Importe Pagar</th>
                        <th>Concepto</th>
                        <th>Exp</th>
                        <th>Año</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(range(1, 10) as $row) 
                        <tr>
                            <td><input type="checkbox" class="check-row" data-id="row{{ $row }}" /></td>
                            <td>Fila {{ $row }} - Columna 1</td>
                            <td>2</td>
                            <td>Fila {{ $row }} - Columna 3</td>
                            <td>Fila {{ $row }} - Columna 4</td>
                            <td>Fila {{ $row }} - Columna 5</td>
                            <td>Fila {{ $row }} - Columna 6</td>
                            <td>Fila {{ $row }} - Columna 7</td>
                            <td>Fila {{ $row }} - Columna 8</td>
                            <td>Fila {{ $row }} - Columna 9</td>
                            <td>Fila {{ $row }} - Columna 10</td>
                            <td>Fila {{ $row }} - Columna 11</td>
                            <td>Fila {{ $row }} - Columna 12</td>
                            <td>Fila {{ $row }} - Columna 13</td>
                            <td>Fila {{ $row }} - Columna 14</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Filtros debajo de la tabla -->
        <div class="filter-container" style="margin-top: 20px;">
            <select id="category-filter" class="filter-field">
                <option value="">Selecciona una categoría</option>
                <option value="idEstado">Estado</option>
                <option value="id">ID</option>
                <option value="nro">NRO</option>
                <option value="anio">AÑO</option>
                <option value="proveedorNombre">Proveedor Nombre</option>
                <option value="tipoCompro">A favor de</option>
                <option value="nroComprobante">Importe Bruto</option>
                <option value="importe">Total Reten</option>
                <option value="concepto">Importe Pago</option>
                <option value="estadoDescrip">Concepto</option>
                <option value="expNro">Exp Nro</option>
                <option value="expAnio">Exp Año</option>
                <option value="verifPor">Anexo Nro</option>
                <option value="idProve">Anexo Año</option>
                <option value="tCompro">Id Estado</option>
                <option value="expNro">Cuit</option>
            </select>
            <input type="text" id="name-filter" class="filter-field" placeholder="Buscar por nombre...">
            <button onclick="filterData()">Filtrar</button>
            <button onclick="clearFilters()">Eliminar Filtros</button>
            <button onclick="liqConsultar()">Ver Detalle</button>
        </div>
    </div>
    <!-- Modal Error-->
    <div id="errorModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full">
            <h3 class="text-lg font-semibold text-red-600">Error</h3>
            <p class="mt-2 text-sm">Por favor, selecciona una fila antes de consultar.</p>
            <div class="mt-4 text-right">
                <button onclick="closeModal()" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Cerrar</button>
            </div>
        </div>
    </div>
</x-layouts.app>