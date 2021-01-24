<x-layout-auth title="{{ __('login') }}">
    <div class="absolute inset-y-2 right-2">
        <x-language-switcher/>
    </div>
    <x-auth.card>
        <x-slot name="logo">
            <x-auth.logo></x-auth.logo>
        </x-slot>
        <p class="py-3">{{ __('verify-email-form-title') }}</p>
        <div class="mt-4 flex items-center justify-between">
            <form method="post" action="{{ route('verification.send') }}">
                @csrf
                <div>
                    <x-button type="submit">
                        {{ __('resend-verification-email') }}
                    </x-button>
                </div>
            </form>
            <form method="post" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('logout') }}
                </button>
            </form>
        </div>
    </x-auth.card>
</x-layout-auth>
