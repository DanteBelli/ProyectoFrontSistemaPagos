<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('SDG Consulta') }}
        </h1>
    </x-slot>

    <div class="content">
        <p>El ID de la fila seleccionada es: {{ $rowId }}</p>
        <!-- Aquí puedes agregar más lógica para mostrar información adicional basada en el ID -->
    </div>
</x-app-layout>