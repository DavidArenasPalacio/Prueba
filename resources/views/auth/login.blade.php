<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-96" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}" novalidate>
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="usuario" :value="__('Usuario')" />

                <x-input id="usuario" class="block mt-1 w-full" type="text" name="usuario" :value="old('usuario')" required autofocus placeholder="Ingrese el nombre de usuario"/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Contraseña')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password"  placeholder="Ingrese la contraseña" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                </label>
            </div>

            <div class="mt-2">
                <x-button class="w-full  justify-center">
                    {{ __('Iniciar Sesión') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
