<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Caja Chica') }}
        </h1>
    </x-slot>

    <div class="content">
        <div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-800">
            <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-lg max-w-lg text-center">
                <div class="mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-yellow-500 mx-auto" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2L2 7h3v8h2V9h4v6h2V7h3L12 2z"></path>
                    </svg>
                </div>
                <h1 class="text-2xl font-semibold text-blue-800 dark:text-blue-300 mb-4">Disculpe las molestias</h1>
                <p class="text-lg text-gray-700 dark:text-gray-300">Esta sección se verá en la nueva versión.</p>
            </div>
        </div>
    </div>

        <script src="{{ asset('js/scripts.js') }}"></script>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</x-app-layout>