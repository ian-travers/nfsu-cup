<header x-data="{ isOpen: false }">
    <div class="bg-nfsu-brand">
        <nav class="bg-nfsu-brand">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="border-b border-gray-700">
                    <div class="flex items-center justify-between h-16 px-4 sm:px-0">
                        <div class="flex items-center">
                            <div class="flex items-center w-60">
                                <img class="w-20 mr-1 md:w-24 md:mr-2" src="{{ asset('storage/logo.png') }}"
                                     alt="Workflow">
                                <span class="text-blue-200 hover:text-blue-100 text-lg md:text-2xl mb-0.5">NFSU Cup</span>
                            </div>
                            <div class="hidden md:block">
                                <div class="flex items-baseline space-x-2">
                                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                    <a href="#"
                                       class="text-blue-200 hover:bg-gray-700 hover:text-blue-100 px-3 py-2 rounded-md font-medium">Tourneys</a>

                                    <a href="#"
                                       class="text-blue-200 hover:bg-gray-700 hover:text-blue-100 px-3 py-2 rounded-md font-medium">Stats</a>

                                    <a href="#"
                                       class="text-blue-200 hover:bg-gray-700 hover:text-blue-100 px-3 py-2 rounded-md font-medium">Game Server</a>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-4 flex items-center md:ml-6">
                                <button
                                    class="bg-nfsu-brand p-1 text-gray-400 rounded-full hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                                    <span class="sr-only">View notifications</span>
                                    <!-- Heroicon name: bell -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                                    </svg>
                                </button>

                                <!-- Profile dropdown -->
                                <div
                                    x-data="{ isOpen: false }"
                                    class="ml-3 relative"
                                >
                                    <div @click="isOpen = !isOpen">
                                        <button
                                            class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                            id="user-menu"
                                            aria-haspopup="true"
                                        >
                                            <span class="sr-only">Open user menu</span>
                                            <img
                                                class="h-8 w-8 rounded-full"
                                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt=""
                                            >
                                        </button>
                                    </div>
                                    <div
                                        x-show="isOpen" x-cloak
                                        @keydown.escape.window="isOpen = false"
                                        @click.away="isOpen = false"
                                        x-transition:enter="transition ease-out duration-150 transform"
                                        x-transition:enter-start="opacity-0 scale-95"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-150 transform"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-95"
                                        class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg border border-gray-700 py-1 bg-nfsu-brand ring-1 ring-black ring-opacity-5"
                                        role="menu"
                                        aria-orientation="vertical"
                                        aria-labelledby="user-menu"
                                    >
                                        <a
                                            href="#"
                                            class="block px-4 py-2 text-sm text-blue-200 hover:bg-gray-700 hover:text-blue-100"
                                            role="menuitem"
                                        >
                                            Your Profile
                                        </a>
                                        <a
                                            href="#"
                                            class="block px-4 py-2 text-sm text-blue-200 hover:bg-gray-700 hover:text-blue-100"
                                            role="menuitem"
                                        >
                                            Settings
                                        </a>
                                        <a
                                            href="#"
                                            class="block px-4 py-2 text-sm text-blue-200 hover:bg-gray-700 hover:text-blue-100"
                                            role="menuitem"
                                        >
                                            Sign out
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="-mr-2 md:hidden"
                        >
                            <!-- Mobile menu button -->
                            <button
                                @click="isOpen = !isOpen"
                                class="bg-nfsu-brand inline-flex items-center justify-center p-2 rounded-md border border-gray-700 text-blue-200 hover:text-blue-100 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                                <span class="sr-only">Open main menu</span>
                                <!--
                                  Menu open: "hidden", Menu closed: "block"
                                -->
                                <svg x-show="!isOpen" class="block h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M4 6h16M4 12h16M4 18h16"/>
                                </svg>
                                <!--
                                  Menu open: "block", Menu closed: "hidden"
                                -->
                                <svg x-show="isOpen" class="block h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!--
        Mobile menu, toggle classes based on menu state.
        Open: "block", closed: "hidden"
    -->
    <div
        x-show="isOpen"
        x-cloak
        class=" border-b border-gray-700 bg-nfsu-brand md:hidden"
    >
        <div class="px-2 py-3 space-y-1 sm:px-3">
            <a href="#"
               class="text-blue-200 hover:bg-gray-700 hover:text-blue-100 block px-3 py-2 rounded-md text-base font-medium">Tourneys</a>

            <a href="#"
               class="text-blue-200 hover:bg-gray-700 hover:text-blue-100 block px-3 py-2 rounded-md text-base font-medium">Stats</a>

            <a href="#"
               class="text-blue-200 hover:bg-gray-700 hover:text-blue-100 block px-3 py-2 rounded-md text-base font-medium">Game Server</a>
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
                <a href="#"
                   class="block px-3 py-2 rounded-md text-base font-medium text-blue-200 hover:text-blue-100 hover:bg-gray-700">Your
                    Profile</a>

                <a href="#"
                   class="block px-3 py-2 rounded-md text-base font-medium text-blue-200 hover:text-blue-100 hover:bg-gray-700">Settings</a>

                <a href="#"
                   class="block px-3 py-2 rounded-md text-base font-medium text-blue-200 hover:text-blue-100 hover:bg-gray-700">Sign
                    out</a>
            </div>
        </div>
    </div>
</header>


