<nav class="bg-white border-b shadow-sm border-gray-200 w-full sticky top-0 z-50">
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <a href="{{ route('home') }}" class="flex-shrink-0 flex space-x-4 items-center">
                <div class="flex space-x-2 itmes-center">
                    <img class=" h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                        alt="Workflow">
                    <p class=" text-xl font-extrabold text-slate-800">Byte Size Tips</p>
                </div>
            </a>
            <div class="flex space-x-20">
                <div class="hidden md:-my-px md:ml-6 md:flex md:space-x-8">
                    <a href="{{ route('home') }}"
                        class=" inline-flex items-center px-1 pt-1 border-b-4 text-sm font-medium {{ Request::routeIs('home')? 'border-indigo-500 text-gray-900': 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }}"
                        aria-current="page">
                        Home
                    </a>
                    <a href="{{ route('roadmap') }}"
                        class=" inline-flex items-center px-1 pt-1 border-b-4 text-sm font-medium {{ Request::routeIs('roadmap')? 'border-indigo-500 text-gray-900': 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }}"
                        aria-current="page">
                        Roadmap
                    </a>
                    <a href="{{ route('components') }}"
                        class=" inline-flex items-center px-1 pt-1 border-b-4 text-sm font-medium {{ Request::routeIs('components')? 'border-indigo-500 text-gray-900': 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }}"
                        aria-current="page">
                        Components
                    </a>
                    <a href="{{ route('demos') }}"
                        class=" inline-flex items-center px-1 pt-1 border-b-4 text-sm font-medium {{ Request::routeIs('demos')? 'border-indigo-500 text-gray-900': 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }}"
                        aria-current="page">
                        Demos
                    </a>
                    <a href="{{ route('cheat-sheet') }}"
                        class=" inline-flex items-center px-1 pt-1 border-b-4 text-sm font-medium {{ Request::routeIs('cheat-sheet')? 'border-indigo-500 text-gray-900': 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }}"
                        aria-current="page">
                        Cheat Sheet
                    </a>


                </div>
                <div class="hidden lg:ml-6 lg:flex lg:space-x-4 lg:items-center">
                    <x-button.dark-mode-toggle />
                    <a href="https://twitter.com/bytesizecoder" target="_blank" class="h-full flex items-center">
                        <svg fill="currentColor" class="text-blue-400 hover:text-blue-500 h-6 w-6" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                    </a>
                    <a href="https://github.com/Jakub003/Byte-Size-Tips" target="_blank"
                        class="h-6 w-6 text-gray-700 hover:text-gray-400">
                        <svg fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                            <path
                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                        </svg>
                    </a>
                </div>
                <div class="-mr-2 flex items-center sm:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" @click="mobileMenu = !mobileMenu"
                        class="bg-white inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>

                        <svg x-show="mobileMenu === false" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>

                        <svg x-cloak x-show="mobileMenu === true" class="h-6 w-6"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>


                    </button>
                </div>
            </div>

    </section>


    <!-- Mobile menu, show/hide based on menu state. -->
    <section x-cloak class="md:hidden" id="mobile-menu" x-show="mobileMenu === true">
        <div class="pt-2 pb-3 space-y-1">
            <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800" -->
            <a href="{{ route('home') }}"
                class="bg-indigo-50 border-indigo-500 text-indigo-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium"
                aria-current="page">
                Home
            </a>

            <a
                class=" cursor-pointer border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800 flex pl-3 pr-4 py-2 border-l-4 text-base font-medium w-full">
                <p x-tooltip.placement.right="tooltipCommingSoon">Reports</p>
            </a>
            <a
                class=" cursor-pointer border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800 flex pl-3 pr-4 py-2 border-l-4 text-base font-medium w-full">
                <p x-tooltip.placement.right="tooltipCommingSoon">Watchlist</p>
            </a>

            <a
                class=" cursor-pointer border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800 flex pl-3 pr-4 py-2 border-l-4 text-base font-medium w-full">
                <p x-tooltip.placement.right="tooltipCommingSoon">Resources</p>
            </a>
        </div>
    </section>
</nav>
