<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Byte Size Tips- Helpful tips and guides to make your coding journey easier.</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireStyles
    <style>
        [x-cloak] {
            display: none;
        }

    </style>
</head>

<body class="font-kumbh min-h-screen relative overflow-x-hidden" x-data="{mobileMenu:false, darkMode:false}">
    {{-- <x-template.navigation /> --}}
    <nav class="bg-white border-b shadow-sm border-gray-200 w-full h-16 sticky top-0 z-40">
        <div class="flex justify-between h-16  max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex-shrink-0 flex space-x-4 items-center">
                <div class="flex space-x-2 itmes-center">
                    <img class=" h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                        alt="Workflow">
                    <p class="text-xl font-extrabold text-slate-800">Byte Size Tips</p>
                </div>
            </a>
            <div class="hidden lg:flex lg:space-x-10 lg:items-center">
                <div class="hidden lg:flex lg:space-x-10 h-16">
                    <div class="h-full  lg:flex lg:space-x-4">
                        <a href="{{ route('getting-started', 'introduction') }}"
                            class=" h-full inline-flex items-center px-1 pt-1 border-b-4 text-sm font-medium capitalize {{ Request::routeIs('getting-started*')? 'border-indigo-500 text-gray-900': 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }}">
                            Getting Started
                        </a>
                        <a href="{{ route('cheat-sheet', 'quick-commands') }}"
                            class=" h-full inline-flex items-center px-1 pt-1 border-b-4 text-sm font-medium capitalize {{ Request::routeIs('cheat-sheet*')? 'border-indigo-500 text-gray-900': 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }}">
                            Cheat Sheet
                        </a>
                        <a href="{{ route('features', 'markdown-for-laravel') }}"
                            class=" h-full inline-flex items-center px-1 pt-1 border-b-4 text-sm font-medium capitalize {{ Request::routeIs('features*')? 'border-indigo-500 text-gray-900': 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }}">
                            Features
                        </a>
                        <a href="{{ route('components', 'tips-and-tricks') }}"
                            class=" h-full inline-flex items-center px-1 pt-1 border-b-4 text-sm font-medium capitalize {{ Request::routeIs('components*')? 'border-indigo-500 text-gray-900': 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }}">
                            Components
                        </a>
                        <a href="{{ route('roadmap', 'overview') }}"
                            class=" h-full inline-flex items-center px-1 pt-1 border-b-4 text-sm font-medium capitalize {{ Request::routeIs('roadmap*')? 'border-indigo-500 text-gray-900': 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }}">
                            SASS Roadmap
                        </a>
                    </div>

                </div>

                <div class="hidden lg:flex lg:space-x-4 lg:items-center">
                    {{-- <x-button.dark-mode-toggle /> --}}
                    <a href="https://twitter.com/bytesizecoder" target="_blank" class="h-full flex items-center">
                        <svg fill="currentColor" class="text-blue-400 hover:text-blue-500 h-6 w-6" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                    </a>

                </div>
            </div>
        </div>
    </nav>

    <div class="h-full">
        {{ $slot }}
    </div>

    <footer class="py-10 bg-slate-900">
        <div class="px-10 mx-auto max-w-7xl">
            <div class="flex flex-col items-center md:flex-row md:justify-between">
                <a href="{{ route('home') }}">
                    <img class="text-white h-10 w-auto"
                        src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
                </a>

                <div class="flex flex-row justify-center mb-4 -ml-4 -mr-4">
                    {{-- <a href="#"
                            class="p-4 text-gray-700 hover:text-gray-400"> <svg class="fill-current" width="16"
                                height="16" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z">
                                </path>
                            </svg> </a> --}}
                    <a href="https://twitter.com/bytesizecoder" target="_blank"
                        class="p-4 text-gray-700 hover:text-gray-400"> <svg class="fill-current" width="16"
                            height="16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z">
                            </path>
                        </svg> </a>
                    <a href="https://github.com/Jakub003/Byte-Size-Tips" target="_blank"
                        class="p-4 text-gray-700 hover:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-github" viewBox="0 0 16 16">
                            <path
                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                        </svg>
                    </a>


                    {{-- <a href="#" class="p-4 text-gray-700 hover:text-gray-400"> <svg
                                class="fill-current" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <circle cx="12.145" cy="3.892" r="1"></circle>
                                    <path
                                        d="M8 12c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4zm0-6c-1.103 0-2 .897-2 2s.897 2 2 2 2-.897 2-2-.897-2-2-2z">
                                    </path>
                                    <path
                                        d="M12 16H4c-2.056 0-4-1.944-4-4V4c0-2.056 1.944-4 4-4h8c2.056 0 4 1.944 4 4v8c0 2.056-1.944 4-4 4zM4 2c-.935 0-2 1.065-2 2v8c0 .953 1.047 2 2 2h8c.935 0 2-1.065 2-2V4c0-.935-1.065-2-2-2H4z">
                                    </path>
                                </g>
                            </svg> </a> --}}
                </div>
            </div>
            <div class="flex flex-col justify-between text-center md:flex-row">
                <p class="order-last text-sm leading-tight text-gray-500 md:order-first">
                    Crafted with ❤️ by
                    <a href="https://dreambytelabs.com/" class="text-white">DreamByte Labs</a>.
                </p>
                <p class="text-sm text-gray-400 text-center">
                    Code highlighting provided by
                    <a href="https://torchlight.dev" target="__blank"
                        class="text-slate-300 hover:text-orange-400 font-semibold">Torchlight</a>
                </p>
                <ul class="flex flex-row justify-center pb-3 -ml-4 -mr-4 text-sm">
                    <li> <a href="{{ route('home') }}" class="px-4 text-gray-500 hover:text-white">Home</a> </li>
                    <li> <a href="{{ route('contact') }}" class="px-4 text-gray-500 hover:text-white">Contact</a>
                    </li>
                    {{-- <li> <a href="{{ route('roadmap') }}" class="px-4 text-gray-500 hover:text-white">Roadmap</a>
                    </li>
                    <li> <a href="{{ route('components') }}"
                            class="px-4 text-gray-500 hover:text-white">Components</a> </li>
                    <li> <a href="{{ route('demos') }}" class="px-4 text-gray-500 hover:text-white">Demos</a></li> --}}
                    {{-- <li> <a href="{{ route('cheat-sheet', 'aritsan-commands') }}"
                            class="px-4 text-gray-500 hover:text-white">Cheat
                            Sheet</a></li> --}}
                </ul>
            </div>
        </div>
    </footer>
    @livewireScripts
</body>

</html>
