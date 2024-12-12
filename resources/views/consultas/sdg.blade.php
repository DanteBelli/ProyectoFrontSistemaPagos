@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Consultar SDG</h1>
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
    </script>
    <style>
        .custom-table {
            border-collapse: collapse;
            width: 100%;
            background-color: #333; /* Fondo oscuro para mejor contraste */
        }

        .custom-table th, .custom-table td {
            border: 1px solid white; /* Bordes blancos */
            color: white; /* Texto en blanco */
            padding: 8px;
            text-align: center;
        }

        .custom-table th {
            background-color: #444; /* Fondo para las cabeceras */
        }

        .custom-table tbody tr:nth-child(even) {
            background-color: #555; /* Fila par con un color de fondo ligeramente diferente */
        }

        .custom-table tbody tr:nth-child(odd) {
            background-color: #666; /* Fila impar con un color de fondo ligeramente diferente */
        }

        .custom-table td input[type="checkbox"] {
            accent-color: white; /* Cambia el color del checkbox a blanco */
        }
    </style>
@endsection