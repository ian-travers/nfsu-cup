<x-layout-auth>
    <x-auth.card>
        <x-slot name="logo">
            <x-auth.logo></x-auth.logo>
        </x-slot>
        <p class="py-3">{{ __('reset-password-form-title') }}</p>
        <x-validation-errors class="mb-4" />
        <form method="post" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-label for="email" value="{{ __('email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
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
                <x-button>
                    {{ __('reset-password') }}
                </x-button>
            </div>
        </form>
    </x-auth.card>
</x-layout-auth>
