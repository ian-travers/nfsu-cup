<x-auth.card>
    <x-slot name="logo">
        <x-auth.logo></x-auth.logo>
    </x-slot>
    <p class="py-3">{{ __('register-form-title') }}</p>
    @if($submitMessage)
        <div class="flex justify-between bg-green-50 rounded-md p-4 my-4">
            <div class="text-green-600">{{ $submitMessage }}</div>
            <button
                wire:click="$set('submitMessage', false)"
                type="button"
            >
                <svg viewBox="0 0 20 20" class="w-5 h-5 text-green-600">
                    <path fill="currentColor" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    @endif
    <form wire:submit.prevent="submitForm" method="post">
        @csrf
        <div class="relative">
            <x-label for="name" value="{{ __('name') }}"/>
            <x-input
                wire:model.lazy="name"
                class="block mt-1 w-full"
                type="text" name="name"
                :value="old('name')"
                required autofocus
                autocomplete="name"
            />
            <x-checking-input-spinner input="name"/>
        </div>
        @error('name')<p class="text-red-500 mt-1 text-xs">{{ $message }}</p>@enderror

        <div class="relative mt-4">
            <x-label for="email" value="{{ __('email') }}"/>
            <x-input
                wire:model.lazy="email"
                class="block mt-1 w-full"
                type="email"
                name="email"
                :value="old('email')"
                required
            />
            <x-checking-input-spinner input="email"/>
        </div>
        @error('email')<p class="text-red-500 mt-1 text-xs">{{ $message }}</p>@enderror

        <div class="relative mt-4">
            <x-label for="password" value="{{ __('password') }}"/>
            <x-input
                wire:model.lazy="password"
                class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="new-password"
            />
        </div>
        @error('password')<p class="text-red-500 mt-1 text-xs">{{ $message }}</p>@enderror

        <div class="mt-4">
            <x-label for="password_confirmation" value="{{ __('confirm-password') }}"/>
            <x-input
                wire:model="password_confirmation"
                class="block mt-1 w-full"
                type="password"
                name="password_confirmation"
                required autocomplete="new-password"
            />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a
                class="underline text-sm text-gray-600 hover:text-gray-900"
                href="{{ route('login') }}"
            >
                {{ __('already-registered?') }}
            </a>

            <x-button class="ml-4">
                {{ __('register') }}
            </x-button>
        </div>
    </form>
</x-auth.card>
