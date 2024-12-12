@extends('layouts.app')
@section('content')
    <!--Archivo con los estilos de la grilla y el buscador , ubicado en public -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!-- Incluyo el javascript para controlar el check de la grilla y el filtrador , se encuentra en public -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <div class="container">
        <h1>Consultar SDG</h1>
        <!-- Tabla de datos responsiva -->
        <div class="table-responsive">
            <table class="custom-table"> 
                <thead>
                    <tr>
                        <th></th>
                        <th>Entidad</th>
                        <th>ID</th>
                        <th>Numero</th>
                        <th>Año</th>
                        <th>Fecha</th>
                        <th>Proveedor</th>
                        <th>Comprobante</th>
                        <th>Nro Compro</th>
                        <th>Importe</th>
                        <th>Concepto</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(range(1, 10) as $row) 
                        <tr>
                            <td><input type="checkbox" class="check-row" data-id="row{{ $row }}" /></td>
                            <td>Fila {{ $row }} - Columna 1</td>
                            <td>Fila {{ $row }} - Columna 2</td>
                            <td>Fila {{ $row }} - Columna 3</td>
                            <td>Fila {{ $row }} - Columna 4</td>
                            <td>Fila {{ $row }} - Columna 5</td>
                            <td>Fila {{ $row }} - Columna 6</td>
                            <td>Fila {{ $row }} - Columna 7</td>
                            <td>Fila {{ $row }} - Columna 8</td>
                            <td>Fila {{ $row }} - Columna 9</td>
                            <td>Fila {{ $row }} - Columna 10</td>
                            <td>Fila {{ $row }} - Columna 11</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Filtros debajo de la tabla -->
        <div class="filter-container" style="margin-top: 20px;">
            <select id="category-filter" class="filter-field">
                <option value="">Selecciona una categoría</option>
                <option value="id">ID</option>
                <option value="nro">NRO</option>
                <option value="anio">AÑO</option>
                <option value="proveedorNombre">Proveedor Nombre</option>
                <option value="tipoCompro">Tipo Compro</option>
                <option value="nroComprobante">Nro Comprobante</option>
                <option value="importe">Importe</option>
                <option value="concepto">Concepto</option>
                <option value="estadoDescrip">Estado Descrip</option>
                <option value="verifPor">Verif Por</option>
                <option value="idProve">Id Prov</option>
                <option value="idEstado">Id Estado</option>
                <option value="tCompro">TCOMPRO</option>
                <option value="expNro">Exp Nro</option>
                <option value="expAnio">Exp Año</option>
            </select>
            <input type="text" id="name-filter" class="filter-field" placeholder="Buscar por nombre...">
            <button onclick="filterData()">Filtrar</button>
            <button onclick="clearFilters()">Eliminar Filtros</button>
        </div>
    </div>
@endsection