<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Presupuesto') }}
        </h1>
    </x-slot>

    <div class="content">
        <div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-800">
            <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-lg max-w-lg text-center">
                <div class="mb-4">
                    <!-- Icono de advertencia -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-yellow-500 mx-auto" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2L2 7h3v8h2V9h4v6h2V7h3L12 2z"></path>
                    </svg>
                </div>
                <h1 class="text-2xl font-semibold text-blue-800 dark:text-blue-300 mb-4">Disculpe las molestias</h1>
                <p class="text-lg text-gray-700 dark:text-gray-300">Esta sección se verá en la nueva versión.</p>
            </div>
        </div>
    </div>

    <!-- Modal de error -->
    <div id="errorModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full">
            <h3 class="text-lg font-semibold text-red-600">Error</h3>
            <p class="mt-2 text-sm">Por favor, selecciona una fila antes de consultar.</p>
            <div class="mt-4 text-right">
                <button onclick="closeModal()" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Cerrar</button>
            </div>
        </div>
    </div>

    <script>
        // Función para cerrar el mensaje
        function closeMessage() {
            document.querySelector('.content').style.display = 'none';
        }

        // Función para cerrar el modal de error
        function closeModal() {
            document.getElementById('errorModal').classList.add('hidden');
        }
    </script>
</x-layouts.app>