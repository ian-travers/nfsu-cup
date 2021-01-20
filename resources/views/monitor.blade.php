<x-layout-app>
    <div class="px-6 py-4">
        <h1 class="text-3xl">Server / Monitor</h1>
        {{ __('auth.throttle', ['seconds' => 180]) }}
        <div class="flex justify-center">
            {{ language()->flags() }}
        </div>
        {{ Route::currentRouteName() }}
    </div>
</x-layout-app>
