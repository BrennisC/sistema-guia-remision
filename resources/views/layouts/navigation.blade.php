<div x-data="{ open: false }" class="flex h-screen bg-gray-100" >
    <!-- Sidebar -->
    <div class="bg-white border-r border-gray-200 w-64 flex flex-col" style="height: 100vh; position: fixed; z-index: 0; margin: 0; padding: 0;">
        <!-- Logo -->
        <div class="flex items-center justify-center py-4 border-b">
            <a href="{{ route('dashboard') }}" class="text-lg font-bold text-gray-800">
                <x-application-logo class="block h-8 w-auto fill-current" />
            </a>
        </div>

        <!-- Navigation Links -->
        <nav class="flex-1 px-2 py-4 space-y-2">
            @foreach([
            'dashboard' => __('Estadisticas'),
            'users.index' => __('Usuarios'),
            'guiaremision.create' => __('Guía de Remisión'),
            ] as $route => $label)
            <a href="{{ route($route) }}" class="block text-gray-600 hover:text-black hover:bg-gray-100 rounded-md py-2 px-3">
                {{ $label }}
            </a>
            @endforeach
        </nav>

        <!-- User Dropdown -->
        <div class="border-t px-3 py-4">
            <x-dropdown align="left" width="48">
                <x-slot name="trigger">
                    <button class="w-full flex items-center justify-between text-gray-600 bg-gray-100 hover:text-black hover:bg-gray-200 rounded-md py-2 px-3 transition">
                        <span class="inline-flex items-center">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                            </svg>
                            <div class="ml-2 space-x-2">{{ Auth::user()->name }}</div>
                        </span>
                        <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Perfil') }}
                    </x-dropdown-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Salir') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-4 ml-8 h-screen overflow-auto" style="background-color: #2F4F4F; margin:0; margin-left:150px  ">
        <main >
            {{ $slot }}
        </main>
    </div>



</div>