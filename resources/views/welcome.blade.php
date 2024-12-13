<x-guest-layout>
    <div class="flex px-6 py-4 bg-black ">
        <div class="w-full max-w-md  bg-black rounded-lg shadow-lg dark:bg-gray-800">
            <!-- Header -->
            <header class="text-center mb-8">
                <h1 class="text-3xl font-bold text-white">Sistema de Gestión</h1>
                <p class="mt-2 text-gray-500">Please log in or register to continue</p>
            </header>

            <!-- Navigation -->
            @if (Route::has('login'))
            <div class="flex flex-col space-y-4">
                @auth
                <a href="{{ url('/dashboard') }}"
                    class="w-full px-4 py-2 text-center text-black bg-blue-600 rounded-md shadow-md transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:bg-blue-500 dark:hover:bg-blue-600">
                    Dashboard
                </a>
                @else
                <a href="{{ route('login') }}"
                    class="w-full px-4 py-2 text-center text-white bg-green-600 rounded-md shadow-md transition hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 dark:bg-green-500 dark:hover:bg-green-600">
                    Log in
                </a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="w-full px-4 py-2 text-center text-white bg-gray-600 rounded-md shadow-md transition hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 dark:bg-gray-500 dark:hover:bg-gray-600">
                    Register
                </a>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </div>
</x-guest-layout>