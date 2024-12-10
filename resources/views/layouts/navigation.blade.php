<div x-data="{ open: false }" class="bg-white border-b border-gray-200">
    <!-- Navbar -->
    <div class="flex items-center justify-between px-4 py-3">
        <!-- Logo -->
        <a href="{{ route('dashboard') }}" class="text-lg font-bold text-gray-800">
            <x-application-logo class="block h-8 w-auto fill-current" />
        </a>

        <!-- Hamburger Button -->
        <button @click="open = !open" class="text-gray-600 focus:outline-none lg:hidden">
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Dropdown Menu -->
    <div x-show="open" class="lg:hidden bg-white border-t border-gray-200">
        <div class="flex flex-col space-y-1 px-4 py-3">
            <a href="{{ route('dashboard') }}" class="block text-gray-600 hover:text-black hover:bg-gray-100 rounded-md py-2 px-3">
                {{ __('Dashboard') }}
            </a>


            <a href="{{ route('users.index') }}" class="block text-gray-600 hover:text-black hover:bg-gray-100 rounded-md py-2 px-3">
                {{ __('Users') }}
            </a>
            <a href="{{ route('guia.create') }}" class="block text-gray-600 hover:text-black hover:bg-gray-100 rounded-md py-2 px-3">
                {{ __('GuiaRemision') }}
            </a>
            <div class="px-3 mt-2 space-y-1">
                <x-dropdown align="left" width="48">
                    <x-slot name="trigger">
                        <button class="w-full flex items-center justify-between text-gray-600 bg-gray-100 hover:text-black hover:bg-gray-200 rounded-md py-2 px-3 transition">
                            <div class="flex items-center">
                                {{ Auth::user()->name }}
                            </div>
                            <svg class=" fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
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
        </div>
    </div>

    <!-- Desktop Menu -->
    <div class="hidden lg:flex items-center space-x-4 px-4">
        <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-black hover:bg-gray-100 rounded-md py-2 px-3">
            {{ __('Dashboard') }}
        </a>
        <a href="{{ route('users.index') }}" class="text-gray-600 hover:text-black hover:bg-gray-100 rounded-md py-2 px-3">
            {{ __('Users') }}
        </a>
        <a href="{{ route('profile.edit') }}" class="text-gray-600 hover:text-black hover:bg-gray-100 rounded-md py-2 px-3">
            {{ __('Profile') }}
        </a>
        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit" class="text-gray-600 hover:text-black hover:bg-gray-100 rounded-md py-2 px-3">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</div>