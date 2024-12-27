<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen m-0 p-0 flex items-center justify-center" style="background-image: url('https://images8.alphacoders.com/133/1339755.jpeg'); background-size: cover; background-position: center;">
    <div class="bg-white/70 backdrop-blur-sm rounded-lg shadow-lg p-8 w-full max-w-sm">
        <div class="flex items-center justify-center mb-6">
            <img src="https://e7.pngegg.com/pngimages/713/762/png-clipart-computer-icons-button-login-image-file-formats-logo.png" 
                 alt="Login Icon" 
                 class="w-10 h-10 me-2">
            <h2 class="text-2xl font-bold"> Welcome back </h2>
        </div>
        
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <div class="flex items-center border border-gray-400 rounded-md focus-within:ring-indigo-500 focus-within:border-indigo-500 p-2">
                    <img src="https://images.vexels.com/content/140131/preview/email-circle-icon-design-7e05b7.png" 
                         alt="Email Icon" 
                         class="w-6 h-6 me-2">
                    <x-text-input id="email" 
                                  class="w-full border-none focus:ring-0" 
                                  type="email" 
                                  name="email" 
                                  :value="old('email')" 
                                  required autofocus autocomplete="username" />
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <div class="flex items-center border border-gray-400 rounded-md focus-within:ring-indigo-500 focus-within:border-indigo-500 p-2">
                    <img src="https://cdn.icon-icons.com/icons2/569/PNG/512/unlocked-padlock-black-security-symbol_icon-icons.com_54444.png" 
                         alt="Lock Icon" 
                         class="w-6 h-6 me-2">
                    <x-text-input id="password" 
                                  class="w-full border-none focus:ring-0"
                                  type="password"
                                  name="password"
                                  required autocomplete="current-password" />
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" 
                           type="checkbox" 
                           class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" 
                           name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-6">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ms-3 bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</body>
</html>
