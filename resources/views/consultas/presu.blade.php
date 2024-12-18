<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Presupuesto') }}
        </h1>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <script src="{{ asset('js/scripts.js') }}"></script>
    </x-slot>
    <div class="content">
        <div class="flex items-center justify-center min-h-screen bg-gray-100">
            <div class="bg-white p-6 rounded-lg shadow-lg max-w-lg text-center">
                <h1 class="text-2xl font-semibold text-blue-800 mb-4">Disculpe las molestias</h1> <!-- Color azul oscuro -->
                <p class="text-lg text-gray-700">Esta sección se verá en la nueva versión.</p>
            </div>
        </div>
    </div>
</x-layouts.app>