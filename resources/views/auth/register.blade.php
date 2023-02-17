<x-guest-layout>
    <h1 class="mb-3 text-2xl font-bold text-gray-900 lg:text-3xl dark:text-white">Crear una cuenta</h1>
    <form method="POST" action="{{ route('register') }}" class="mt-8">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Correo electrónico')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <x-primary-button class="mt-6">
            {{ __('Crear cuenta') }}
        </x-primary-button>
        <div class="text-sm font-medium text-gray-500 dark:text-gray-400 mt-6">
            ¿Ya tienes una cuenta?
            <a class="ml-1 text-indigo-700 hover:underline dark:text-indigo-500" href="{{ route('login') }}">
                {{ __('Iniciar sesión') }}
            </a>
        </div>
    </form>
</x-guest-layout>
