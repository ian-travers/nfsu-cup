<x-layout-auth title="{{ __('login') }}">
    <div class="absolute inset-y-2 right-2">
        <x-language-switcher/>
    </div>
    <x-auth.card>
        <x-slot name="logo">
            <x-auth.logo></x-auth.logo>
        </x-slot>
        <p class="py-3">{{ __('login-form-title') }}</p>
        <form method="post" action="{{ route('login') }}">
            @csrf
            <div>
                <x-label for="email" value="{{ __('email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('remember-me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('forgot-your-password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('login') }}
                </x-button>
            </div>
        </form>
    </x-auth.card>
</x-layout-auth>

