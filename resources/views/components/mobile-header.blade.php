<div
    x-show="isOpen"
    x-cloak
    class=" border-b border-gray-700 bg-nfsu-brand md:hidden"
>
    <div class="px-2 py-3 space-y-1 sm:px-3">
        <x-mobile-nav-link route="tourneys">{{ __('tourneys') }}</x-mobile-nav-link>
        <x-mobile-nav-link route="stats">{{ __('stats') }}</x-mobile-nav-link>
        <div class="text-sm font-semibold text-gray-400 tracking-widest uppercase text-center">
            {{ __('game-server') }}
        </div>
        <x-mobile-nav-link route="server.monitor">{{ __('monitor') }}</x-mobile-nav-link>
        <x-mobile-nav-link route="server.monitor">{{ __('best-performers') }}</x-mobile-nav-link>
        <x-mobile-nav-link route="server.monitor">{{ __('rating') }}</x-mobile-nav-link>

    </div>
    <div class="pt-4 pb-3 border-t border-gray-700">
        <div class="flex items-center px-5">
            <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full"
                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                     alt="">
            </div>
            <div class="ml-3">
                <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
            </div>
            <button
                class="ml-auto bg-nfsu-brand flex-shrink-0 p-1 text-gray-400 rounded-full hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                <span class="sr-only">View notifications</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                </svg>
            </button>
        </div>
        <div class="mt-3 px-2 space-y-1">
            <x-mobile-nav-link route="user.settings">{{ __('settings') }}</x-mobile-nav-link>
            <x-mobile-nav-link route="user.logout">{{ __('logout') }}</x-mobile-nav-link>
        </div>
    </div>
</div>
