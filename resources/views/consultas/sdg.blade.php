@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Consultar SDG</h1>
        
        <!-- Tabla de datos -->
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

    <!-- Script para el manejo del filtrado -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const checkboxes = document.querySelectorAll('.check-row');
            let lastChecked = null;

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    if (lastChecked && lastChecked !== this) {
                        lastChecked.checked = false;
                    }
                    lastChecked = this;
                });
            });
        });

        // Función para filtrar los datos de la tabla
        function filterData() {
            const category = document.getElementById('category-filter').value.toLowerCase();
            const name = document.getElementById('name-filter').value.toLowerCase();
            const rows = document.querySelectorAll('.custom-table tbody tr');

            rows.forEach(row => {
                const categoryCell = row.cells[6].textContent.toLowerCase(); // Columna de Proveedor (para este ejemplo)
                const nameCell = row.cells[1].textContent.toLowerCase(); // Columna de Entidad (para este ejemplo)

                if ((category === '' || categoryCell.includes(category)) && (name === '' || nameCell.includes(name))) {
                    row.style.display = ''; // Muestra la fila
                } else {
                    row.style.display = 'none'; // Oculta la fila
                }
            });
        }

        // Función para limpiar los filtros
        function clearFilters() {
            document.getElementById('category-filter').value = '';
            document.getElementById('name-filter').value = '';
            filterData(); // Vuelve a mostrar todas las filas
        }
    </script>

    <!-- Estilos para la tabla y filtros -->
    <style>
       /* Borde blanco alrededor del filtrador */
.filter-container {
    display: flex;
    gap: 10px;
    align-items: center;
    border: 2px solid white;  /* Borde blanco */
    padding: 10px;            /* Espaciado interior */
    background-color: #444;  /* Fondo oscuro para el área de filtros */
    margin-top: 20px;         /* Separación con la tabla */
    border-radius: 8px;       /* Bordes redondeados */
}

/* Estilo para los campos de filtro */
.filter-field {
    padding: 8px;
    font-size: 14px;
    border: 1px solid #ccc;  /* Borde de los campos de filtro */
    border-radius: 5px;      /* Bordes redondeados */
}

/* Estilo para el botón Filtrar */
.filter-container button:nth-child(3) {
    background-color: #28a745;  /* Verde */
    color: white;
    border: none;
    padding: 8px 16px;
    font-size: 14px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.filter-container button:nth-child(3):hover {
    background-color: #218838; /* Verde más oscuro al pasar el ratón */
}

/* Estilo para el botón Eliminar Filtros */
.filter-container button:nth-child(4) {
    background-color: #dc3545;  /* Rojo */
    color: white;
    border: none;
    padding: 8px 16px;
    font-size: 14px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.filter-container button:nth-child(4):hover {
    background-color: #c82333; /* Rojo más oscuro al pasar el ratón */
}

/* Tabla personalizada */
.custom-table {
    border-collapse: collapse;
    width: 100%;
    background-color: #333;
}

.custom-table th, .custom-table td {
    border: 1px solid white;
    color: white;
    padding: 8px;
    text-align: center;
}

.custom-table th {
    background-color: #444;
}

.custom-table tbody tr:nth-child(even) {
    background-color: #555;
}

.custom-table tbody tr:nth-child(odd) {
    background-color: #666;
}

.custom-table td input[type="checkbox"] {
    accent-color: white;
}
    </style>
@endsection