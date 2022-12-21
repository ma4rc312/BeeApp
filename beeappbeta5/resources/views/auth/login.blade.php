<link  href="{{asset('css/autenticacion.css')}}" rel="stylesheet">

<div>
    
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="formulario" method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" class="texto" :value="__('Corrego electronico')" />

                <x-input id="email" class="inputs" type="email" name="email" :value="old('email')" required autofocus />
            </div><br>

            <!-- Password -->
           <div >
                <x-label for="password" class="texto" :value=" __  ('Contraseña')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div><br>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordar') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="texto2" href="{{ route('password.request') }}">
                        {{ __('olvide mi contraseña') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Iniciar sesion') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
</div>
