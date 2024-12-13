<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Disposicion') }}
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
                        <th>Numero</th>
                        <th>Fecha</th>
                        <th>Exp Nro</th>
                        <th>Exp Año</th>
                        <th>Anexo Nro</th>
                        <th>Anexo Año</th>
                        <th>Conecpto</th>
                        <th>Estado</th>
                        <th>Proveedor</th>
                        <th>Importe</th>
                        <th>Firmante</th>
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Filtros debajo de la tabla -->
        <div class="filter-container" style="margin-top: 20px;">
            <select id="category-filter" class="filter-field">
                <option value="">Selecciona una categoría</option>
                <option value="idEstado">ID</option>
                <option value="nro">NRO</option>
                <option value="anio">Expediente Nro</option>
                <option value="proveedorNombre">Expediente Año</option>
                <option value="tipoCompro">Anexo Año</option>
                <option value="nroComprobante">Anexo Numero</option>
                <option value="importe">Concepto</option>
                <option value="concepto">Estado</option>
                <option value="estadoDescrip">Proveedor</option>
                <option value="expNro">Importe</option>
                <option value="expAnio">Firmante</option>
                <option value="verifPor">Id Firmante</option>
                <option value="idProve">Cargo Firma</option>
                <option value="tCompro">Id Estado</option>
                <option value="expNro">Id Proveedor</option>
                <option value="expNro">Proveedor Cuit</option>
            </select>
            <input type="text" id="name-filter" class="filter-field" placeholder="Buscar por nombre...">
            <button onclick="filterData()">Filtrar</button>
            <button onclick="clearFilters()">Eliminar Filtros</button>
            <button onclick="dispoConsultar()">Ver Dispo</button>
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