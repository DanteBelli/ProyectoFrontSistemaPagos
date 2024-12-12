@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Consultar SDG</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th><input type="checkbox" id="select-all" /></th>
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
                @foreach(range(1, 10) as $row)  <!-- Ejemplo de filas -->
                    <tr>
                        <td><input type="checkbox" class="check-row" data-id="row{{ $row }}" /></td>
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
@endsection