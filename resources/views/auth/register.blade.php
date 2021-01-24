<x-layout-auth title="{{ __('register') }}">
    <div class="absolute inset-y-2 right-2">
        <x-language-switcher/>
    </div>
    <x-auth.card>
        <x-slot name="logo">
           <x-auth.logo></x-auth.logo>
        </x-slot>
        <p class="py-3">{{ __('register-form-title') }}</p>
        <x-validation-errors class="mb-4" />
        <form method="post" action="{{ route('register') }}">
            @csrf
            <div>
                <x-label for="name" value="{{ __('name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('confirm-password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('already-registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('register') }}
                </x-button>
            </div>
        </form>
    </x-auth.card>
</x-layout-auth>
