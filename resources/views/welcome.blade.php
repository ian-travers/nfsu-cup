<x-layout-app>
    <div class="px-6 py-4">
        {{ __('auth.throttle', ['seconds' => 180]) }}

        <div class="flex justify-center">
            {{ language()->flags() }}
        </div>
    </div>
</x-layout-app>
