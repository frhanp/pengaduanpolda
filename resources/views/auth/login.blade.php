<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="text-center mb-6">
        <h1 class="text-2xl font-semibold text-blue-700">Masuk</h1>
        <p class="text-gray-500 mt-2">Silakan login untuk melapor atau melihat laporan Anda</p>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Kata Sandi')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" 
                    class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500" 
                    name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-4">
            @if (Route::has('password.request'))
                <a 
                    class="underline text-sm text-gray-500 hover:text-blue-700 transition" 
                    href="{{ route('password.request') }}"
                >
                    {{ __('Lupa password?') }}
                </a>
            @endif

            <x-primary-button 
                class="px-6 py-2.5 font-semibold text-gray-900 bg-blue-400 rounded-full shadow-md transition transform hover:bg-blue-500 hover:shadow-blue-500/60 hover:scale-105">
                {{ __('Masuk') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
