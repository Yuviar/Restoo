{{-- <x-guest-layout> --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div class="font-sans text-gray-900 antialiased">
        {{-- {{ $slot }} --}}
        <x-auth-card>
            {{-- <x-slot name="logo">
                    <a href="/">
                        <i class="fas fa-hotdog text-indigo-600" style="font-size: 5em; "></i>
                    </a>
                </x-slot>
            
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
            
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
            
                <form method="POST" action="{{ route('login') }}">
                    @csrf
            
                    <!-- Email Address -->
                    <div>
                        <x-label for="input_type" :value="__('Email or Username')" />
            
                        <x-input id="input_type" class="block mt-1 w-full" type="text" name="input_type" :value="old('input_type')" autofocus />
                    </div>
            
                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />
            
                        <x-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                     autocomplete="current-password" />
                    </div>
            
                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
            
                    <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                                {{ __('Dont have account?') }}
                            </a>
                        <x-button class="ml-3">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form> --}}
            <x-slot name="logo">
                <a href="/">
                    <i class="fas fa-hotdog text-indigo-600" style="font-size: 5em; "></i>
                </a>
            </x-slot>
            <!-- Session Status -->
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1
                class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white text-center">
                Sign in
            </h1>
            <x-auth-session-status class="mb-4" :status="session('status')" />
            
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <x-label for="input_type" :value="__('Email or Username')" />
                        <x-input id="input_type" type="text" name="input_type" :value="old('input_type')" autofocus />
                    </div>
                    <div>
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                            autocomplete="current-password" />
                        {{-- <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required=""> --}}
                    </div>

                    <x-button >
                        {{ __('Log in') }}
                    </x-button>

                </form>
            </div>
        </x-auth-card>
    </div>
</body>

</html>

{{-- </x-guest-layout> --}}
