@extends('layouts.app')
@section('content')
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
        /* Contenedor de filtros responsivo */
        .filter-container {
            display: flex;
            gap: 10px;
            flex-wrap: wrap; /* Permite que los elementos se apilen en pantallas pequeñas */
            align-items: center;
            border: 2px solid white;
            padding: 10px;
            background-color: #444;
            margin-top: 20px;
            border-radius: 8px;
        }

        .filter-field {
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            flex-grow: 1; /* Hace que los filtros ocupen el espacio disponible */
            min-width: 120px; /* Establece un ancho mínimo */
        }

        .filter-container button {
            padding: 8px 16px;
            font-size: 14px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
            margin-top: 10px; /* Para que los botones estén separados en pantallas pequeñas */
        }

        /* Botón Filtrar */
        .filter-container button:nth-child(3) {
            background-color: #28a745;
            color: white;
            border: none;
        }

        .filter-container button:nth-child(3):hover {
            background-color: #218838;
        }

        /* Botón Eliminar Filtros */
        .filter-container button:nth-child(4) {
            background-color: #dc3545;
            color: white;
            border: none;
        }

        .filter-container button:nth-child(4):hover {
            background-color: #c82333;
        }

        /* Estilo para la tabla responsiva */
        .table-responsive {
            overflow-x: auto;
        }

        .custom-table {
            width: 100%;
            border-collapse: collapse;
            background-color: #333;
            table-layout: auto; /* Cambiado para que la tabla se ajuste dinámicamente */
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

        /* Estilo de los checkboxes */
        .custom-table td input[type="checkbox"] {
            accent-color: white;
        }

        /* Responsividad en pantallas pequeñas */
        @media (max-width: 768px) {
            .custom-table th, .custom-table td {
                font-size: 12px;
                padding: 6px;
            }

            .filter-container {
                flex-direction: column;
                align-items: flex-start;
            }

            .filter-container button {
                width: 100%; /* Los botones ocupan todo el ancho */
                margin-top: 5px;
            }

            /* Hacer que la tabla sea más legible en móviles */
            .custom-table td, .custom-table th {
                word-wrap: break-word;
                white-space: normal; /* Permite que el texto se ajuste en móviles */
            }
        }
    </style>
@endsection