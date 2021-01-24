<x-layout-auth>
    <x-auth.card>
        <x-slot name="logo">
            <x-auth.logo></x-auth.logo>
        </x-slot>
        <p class="py-3">{{ __('forgot-password-form-title') }}</p>
        <form method="post" action="{{ route('password.email') }}">
            @csrf
            <div class="block">
                <x-label for="email" value="{{ __('email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('email-password-reset-link') }}
                </x-button>
            </div>
        </form>
    </x-auth.card>
</x-layout-auth>

