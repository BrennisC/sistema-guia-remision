<div x-data="{ open: false }" class="bg-white border-b border-gray-200 px-2.5 sm:px-4">
    <!-- Navbar -->
    <div class="flex items-center justify-between px-4 py-3">
        <!-- Logo -->
        <a href="{{ route('dashboard') }}" class="text-lg font-bold text-gray-800">
            <x-application-logo class="block h-8 w-auto fill-current" />
        </a>

        <!-- Hamburger Button -->
        <button
            @click="open = !open"
            aria-expanded="open"
            aria-controls="mobile-menu"
            class="text-gray-600 focus:outline-none lg:hidden">
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div
        x-cloak="true"
        x-show="open"
        id="mobile-menu"
        class="lg:hidden bg-white border-t border-gray-200"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 transform scale-95"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-95">


        <nav class="flex flex-col space-y-1 px-4 py-3">
            <!-- Menu Items -->
            @foreach([
            'dashboard' => __('Dashboard'),
            'users.index' => __('Users'),
            'guiaremision.create' => __('GuiaRemision'),
            ] as $route => $label)
            <a href="{{ route($route) }}" class="block text-gray-600 hover:text-black hover:bg-gray-100 rounded-md py-2 px-3">
                {{ $label }}
            </a>
            @endforeach

            <!-- User Dropdown -->
            <div class="px-3 mt-2 space-y-1">
                <x-dropdown align="left" width="48">
                    <x-slot name="trigger">
                        <button class="w-full flex items-center justify-between text-gray-600 bg-gray-100 hover:text-black hover:bg-gray-200 rounded-md py-2 px-3 transition">
                            <div>{{ Auth::user()->name }}</div>
                            <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </nav>
    </div>

    <!-- Desktop Menu -->
    <div class="hidden lg:flex items-center space-x-4 px-4">
        @foreach([
        'dashboard' => __('Dashboard'),
        'users.index' => __('Users'),
        'profile.edit' => __('Profile')
        ] as $route => $label)
        <a href="{{ route($route) }}" class="text-gray-600 hover:text-black hover:bg-gray-100 rounded-md py-2 px-3">
            {{ $label }}
        </a>
        @endforeach
        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit" class="text-gray-600 hover:text-black hover:bg-gray-100 rounded-md py-2 px-3">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</div>