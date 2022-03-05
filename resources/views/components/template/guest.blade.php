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

<body class="font-kumbh">
    <div class="relative min-h-full" x-data="{mobileMenu:false, darkMode:false}">
        <x-template.navigation />


        <div class="h-full">
            {{ $slot }}
        </div>

        <footer class="bg-white max-w-7xl mx-auto flex flex-col space-y-10  py-16 px-10">
            <div class="mt-8 md:mt-0 md:order-1">
                <p class="text-center text-base text-gray-400">
                    &copy; 2022 Byte Size Tips. All rights reserved.
                </p>
            </div>
        </footer>
    </div>
    @livewireScripts
</body>

</html>
