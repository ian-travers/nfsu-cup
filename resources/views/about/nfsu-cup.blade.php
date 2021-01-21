<x-layout-app>
    <div class="px-6 py-4">
        <h1 class="text-3xl">About / NFSU Cup</h1>
        {{ __('auth.throttle', ['seconds' => 180]) }}
        <div class="flex justify-center">
            {{ language()->flags() }}
        </div>
    </div>
</x-layout-app>

