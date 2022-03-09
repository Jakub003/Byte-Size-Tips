<x-template.guest>
    <!--Hero -->
    <section class="pt-24 pb-32 bg-white">
        <div class="px-8 mx-auto max-w-7xl lg:px-12 xl:px-16">
            <div class="flex flex-col lg:flex-row">

                <!-- Left Content -->
                <div class="flex items-center w-full lg:w-1/2 lg:pr-10">
                    <div
                        class="relative max-w-lg mx-auto font-sans text-center text-gray-700 border-gray-200 lg:text-left">
                        <h1
                            class="m-0 text-3xl font-extrabold leading-tight text-left text-indigo-600 border-solid sm:text-4xl md:text-6xl">
                            Learn. Share. Create.
                        </h1>
                        <p class="pr-5 mx-0 my-4 text-base text-left text-gray-500 xl:leading-9 lg:my-8 xl:text-xl">
                            Begin your journey through a world of endless possibilities with the Laravel framework.
                        </p>
                        <div class="relative items-start justify-start block w-full max-w-md text-center lg:mx-0">
                            <a href="{{ route('cheat-sheet', 'artisan-commands') }}"
                                class="flex items-center justify-center px-8 font-medium text-white bg-blue-500 rounded-full h-14">
                                Cheat Sheet
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="relative w-full mt-20 lg:w-1/2 lg:mt-0">
                    <div class="relative z-20 grid w-full grid-cols-4 gap-5 mt-4 transform -rotate-6">
                        <div
                            class="flex items-center justify-center w-full h-auto col-span-2 p-3 overflow-hidden transform bg-white rounded-lg shadow-xl -rotate-3">
                            <img src="https://cdn.devdojo.com/images/january2021/image1.png" class="w-full h-auto">
                        </div>
                        <div
                            class="flex items-center justify-center w-full h-auto col-span-2 p-3 overflow-hidden transform bg-white rounded-lg shadow-xl -rotate-3">
                            <img src="https://cdn.devdojo.com/images/january2021/image2.png" class="w-full h-auto">
                        </div>
                        <div
                            class="flex items-center justify-center w-full h-auto col-span-2 p-3 overflow-hidden transform bg-white rounded-lg shadow-xl -rotate-3">
                            <img src="https://cdn.devdojo.com/images/january2021/image3.png" class="w-full h-auto">
                        </div>
                        <div
                            class="flex items-center justify-center w-full h-auto col-span-2 p-3 overflow-hidden transform bg-white rounded-lg shadow-xl -rotate-3">
                            <img src="https://cdn.devdojo.com/images/january2021/image4.png" class="w-full h-auto">
                        </div>
                        <div
                            class="flex items-center justify-center w-full h-auto col-span-2 p-3 overflow-hidden transform bg-white rounded-lg shadow-xl -rotate-3">
                            <img src="https://cdn.devdojo.com/images/january2021/image5.png" class="w-full h-auto">
                        </div>
                        <div
                            class="flex items-center justify-center w-full h-auto col-span-2 p-3 overflow-hidden transform bg-white rounded-lg shadow-xl -rotate-3">
                            <img src="https://cdn.devdojo.com/images/january2021/image6.png" class="w-full h-auto">
                        </div>
                    </div>


                    <div class="absolute top-0 right-0 z-10 w-full h-full mt-4 -mr-5 transform scale-125 rotate-45">
                        <svg class="absolute top-0 w-full h-full transform opacity-50 fill-current lg:scale-x-150 text-blue-50"
                            viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M37.3,-64.3C51.3,-56.4,67.9,-52.6,76.3,-42.5C84.7,-32.5,84.9,-16.3,80.3,-2.7C75.6,10.9,66.2,21.8,60.2,36.1C54.2,50.3,51.8,67.9,42.3,76.4C32.9,84.9,16.4,84.3,2.4,80.2C-11.7,76.2,-23.4,68.5,-36.8,62.3C-50.1,56,-65,51.1,-73.2,40.9C-81.4,30.7,-82.9,15.4,-78.6,2.5C-74.4,-10.4,-64.3,-20.9,-58.2,-34.6C-52,-48.3,-49.7,-65.3,-40.7,-76C-31.6,-86.8,-15.8,-91.4,-2.1,-87.8C11.6,-84.1,23.2,-72.2,37.3,-64.3Z"
                                transform="translate(100 100)"></path>
                        </svg>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <!-- Logo -->
    <section class="w-full py-16 pb-20 bg-white">
        <div class="container px-8 mx-auto sm:px-12 lg:px-20">
            <h2 class="font-bold text-3xl sm:text-4xl lg:text-5xl mt-3 text-center"> Amazing Development Stack</h2>
            <p class="mt-4 text-gray-500 text-base sm:text-xl lg:text-2xl text-center"> Utilize the latest technologies
                to build one of a kind web apps that delight your users.</p>
            <div class="grid grid-cols-2 gap-16 py-16 mb-0 text-center lg:grid-cols-6">
                <div class="flex items-center justify-center">
                    <img src="\images\logos\laravel-logo.png" alt="Laravel Logo"
                        class="block object-contain h-8 lg:h-10">
                </div>
                <div class="flex items-center justify-center">
                    <img src="\images\logos\alpine-js-logo.svg" alt="AlpineJS Logo" class="block object-contain h-12">
                </div>
                <div class="flex items-center justify-center">
                    <img src="\images\logos\tailwind-css-wordmark.svg" alt="Tailwind CSS"
                        class="block object-contain h-12 lg:h-16">
                </div>
                <div class="flex items-center justify-center">
                    <img src="\images\logos\livewire-logo.png" alt="Laravel Livewire Logo"
                        class="block object-contain h-9 lg:h-16">
                </div>
                <div class="flex items-center justify-center">
                    <img src="\images\logos\vue-js-logo.png" alt="VueJS Logo" class="block object-contain h-12">
                </div>
                <div class="flex items-center justify-center">
                    <img src="/images\logos\intertia-logo.png" alt="InertiaJS Logo"
                        class="block object-contain h-10 lg:h-16">
                </div>
            </div>

        </div>
    </section>

    <!-- Build Your Dream App -->
    <section
        class="box-border relative w-full font-sans leading-6 text-gray-700 bg-white border-0 border-gray-200 border-solid">
        <div
            class="box-border flex flex-col items-center px-8 py-20 mx-auto leading-6 border-solid max-w-7xl xl:px-16 md:items-stretch md:justify-center md:py-24">
            <div class="relative pb-10">
                <h2 class="font-bold text-3xl sm:text-4xl lg:text-5xl mt-3 text-center"> Build Your Dream App</h2>
                <p class="mt-4 text-gray-500 text-base sm:text-xl lg:text-2xl text-center"> Explore how to build apps
                    with the best
                    practices from start to finish.</p>
            </div>

            <div class="z-10 grid gap-5 md:grid-cols-6 lg:grid-cols-9">
                <!-- Feature 4 -->
                <a href="#"
                    class="col-span-3 font-sans text-gray-700 bg-gray-50  border border-transparent hover:border-slate-200 hover:shadow-sm rounded-3xl">
                    <div
                        class="box-border flex flex-col items-start h-full px-2 py-8 mx-4 leading-6 text-center border-solid sm:flex-row sm:items-start sm:text-left">
                        <div class="flex-shrink-0 p-3 font-sans text-gray-700 border border-gray-200 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="leading-6 text-center text-gray-700 align-middle stroke-current w-7 h-7"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M0 0h24v24H0z" stroke="none"></path>
                                <path
                                    d="M3 12h3M12 3v3M7.8 7.8L5.6 5.6M16.2 7.8l2.2-2.2M7.8 16.2l-2.2 2.2M12 12l9 3-4 2-2 4-3-9">
                                </path>
                            </svg>
                        </div>
                        <div class="mt-4 font-sans text-left text-gray-700 border-0 border-gray-200 sm:mt-2 sm:ml-4">
                            <h6 class="box-border text-2xl font-bold leading-none tracking-wide text-left border-solid">
                                Inspiration
                            </h6>
                            <p
                                class="box-border mx-0 mt-1 mb-0 font-medium leading-loose text-gray-400 border-solid sm:mt-4">
                                Look for some ideas on how to design your app and discover free asset libraries for your
                                project.
                            </p>
                        </div>
                    </div>
                </a>
                <!-- Feature 2 -->
                <a href="#"
                    class="col-span-3 font-sans text-gray-700 bg-gray-50  border border-transparent hover:border-slate-200 hover:shadow-sm rounded-3xl">
                    <div
                        class="box-border flex flex-col items-start h-full px-2 py-8 mx-4 leading-6 text-center border-solid sm:flex-row sm:items-start sm:text-left">
                        <div class="flex-shrink-0 p-3 font-sans text-gray-700 border border-gray-200 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="leading-6 text-center text-gray-700 align-middle stroke-current w-7 h-7"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M0 0h24v24H0z" stroke="none"></path>
                                <path d="M7 12l5 5L22 7M2 12l5 5m5-5l5-5"></path>
                            </svg>

                        </div>
                        <div class="mt-4 font-sans text-left text-gray-700 border-0 border-gray-200 sm:mt-2 sm:ml-4">
                            <h6 class="box-border text-2xl font-bold leading-none tracking-wide text-left border-solid">
                                Brainstorming
                            </h6>
                            <p
                                class="box-border mx-0 mt-1 mb-0 font-medium leading-loose text-gray-400 border-solid sm:mt-4">
                                Create mockups, and a plan on how you will execute the development roadmap.
                            </p>
                        </div>
                    </div>
                </a>

                <a href="#"
                    class="col-span-3 font-sans text-gray-700 bg-gray-50  border border-transparent hover:border-slate-200 hover:shadow-sm rounded-3xl">
                    <div
                        class="box-border flex flex-col items-start h-full px-2 py-8 mx-4 leading-6 text-center border-solid sm:flex-row sm:items-start sm:text-left">
                        <div class="flex-shrink-0 p-3 font-sans text-gray-700 border border-gray-200 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="leading-6 text-center text-gray-700 align-middle stroke-current w-7 h-7"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M0 0h24v24H0z" stroke="none"></path>
                                <path
                                    d="M9 4.55a8 8 0 016 14.9M15 15v5h5M5.63 7.16v.01M4.06 11v.01M4.63 15.1v.01M7.16 18.37v.01M11 19.94v.01">
                                </path>
                            </svg>
                        </div>
                        <div class="mt-4 font-sans text-left text-gray-700 border-0 border-gray-200 sm:mt-2 sm:ml-4">
                            <h6 class="box-border text-2xl font-bold leading-none tracking-wide text-left border-solid">
                                Workflow
                            </h6>
                            <p
                                class="box-border mx-0 mt-1 mb-0 font-medium leading-loose text-gray-400 border-solid sm:mt-4">
                                Create a routine for working on your app, so you can balance life and work and not get
                                burned out.
                            </p>
                        </div>
                    </div>
                </a>
                <!-- Feature 1 -->
                <a href="#"
                    class="col-span-3 font-sans text-gray-700 bg-gray-50  border border-transparent hover:border-slate-200 hover:shadow-sm rounded-3xl">
                    <div
                        class="box-border flex flex-col items-start h-full px-2 py-8 mx-4 leading-6 text-center border-solid sm:flex-row sm:items-start sm:text-left">
                        <div class="flex-shrink-0 p-3 font-sans text-gray-700 border border-gray-200 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="leading-6 text-center text-gray-700 align-middle stroke-current w-7 h-7"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M0 0h24v24H0z" stroke="none"></path>
                                <path
                                    d="M12 3l8 4.5v9L12 21l-8-4.5v-9L12 3M12 12l8-4.5M12 12v9M12 12L4 7.5M16 5.25l-8 4.5">
                                </path>
                            </svg>
                        </div>
                        <div class="mt-4 font-sans text-left text-gray-700 border-0 border-gray-200 sm:mt-2 sm:ml-4">
                            <h6 class="box-border text-2xl font-bold leading-none tracking-wide text-left border-solid">
                                Demo
                            </h6>
                            <p
                                class="box-border mx-0 mt-1 mb-0 font-medium leading-loose text-gray-400 border-solid sm:mt-4">
                                Create a functional concept demo, and don't worry about how it looks or performes.
                            </p>
                        </div>
                    </div>
                </a>




                <!-- Feature 5 -->
                <a href="#"
                    class="col-span-3 font-sans text-gray-700 bg-gray-50  border border-transparent hover:border-slate-200 hover:shadow-sm rounded-3xl">
                    <div
                        class="box-border flex flex-col items-start h-full px-2 py-8 mx-4 leading-6 text-center border-solid sm:flex-row sm:items-start sm:text-left">
                        <div class="flex-shrink-0 p-3 font-sans text-gray-700 border border-gray-200 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="leading-6 text-center text-gray-700 align-middle stroke-current w-7 h-7"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M0 0h24v24H0z" stroke="none"></path>
                                <path d="M13 3v7h6l-8 11v-7H5l8-11"></path>
                            </svg>
                        </div>
                        <div class="mt-4 font-sans text-left text-gray-700 border-0 border-gray-200 sm:mt-2 sm:ml-4">
                            <h6 class="box-border text-2xl font-bold leading-none tracking-wide text-left border-solid">
                                Optimize
                            </h6>
                            <p
                                class="box-border mx-0 mt-1 mb-0 font-medium leading-loose text-gray-400 border-solid sm:mt-4">
                                Impliment your UI/UX design, refactor your code and get your app ready to ship.
                            </p>
                        </div>
                    </div>
                </a>
                <!-- Feature 6 -->
                <a href="#"
                    class="col-span-3 font-sans text-gray-700 bg-gray-50  border border-transparent hover:border-slate-200 hover:shadow-sm rounded-3xl">
                    <div
                        class="box-border flex flex-col items-start h-full px-2 py-8 mx-4 leading-6 text-center border-solid sm:flex-row sm:items-start sm:text-left">
                        <div class="flex-shrink-0 p-3 font-sans text-gray-700 border border-gray-200 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="leading-6 text-center text-gray-700 align-middle stroke-current w-7 h-7"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M0 0h24v24H0z" stroke="none"></path>
                                <rect x="3" y="4" width="18" height="8" rx="3"></rect>
                                <rect x="3" y="12" width="18" height="8" rx="3"></rect>
                                <path d="M7 8v.01M7 16v.01"></path>
                            </svg>

                        </div>
                        <div class="mt-4 font-sans text-left text-gray-700 border-0 border-gray-200 sm:mt-2 sm:ml-4">
                            <h6 class="box-border text-2xl font-bold leading-none tracking-wide text-left border-solid">
                                Scaling
                            </h6>
                            <p
                                class="box-border mx-0 mt-1 mb-0 font-medium leading-loose text-gray-400 border-solid sm:mt-4">
                                Cookie cutter process on how to deploy and scale your app when you launch it to the
                                world.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Blob Top Left -->
        <div class="absolute top-0 left-0 -ml-56 opacity-25 w-96 h-96">
            <svg class="text-pink-500 opacity-50 fill-current w-88 h-88" viewBox="0 0 200 200"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M25.5,-24.7C35.8,-15.2,48.9,-7.6,50.6,1.7C52.3,11,42.6,22,32.3,31.2C22,40.4,11,47.8,-1.9,49.8C-14.9,51.7,-29.7,48.1,-41.1,38.9C-52.5,29.7,-60.5,14.9,-60.3,0.3C-60,-14.3,-51.5,-28.6,-40,-38.1C-28.6,-47.6,-14.3,-52.3,-3.4,-48.9C7.6,-45.5,15.2,-34.2,25.5,-24.7Z"
                    transform="translate(100 100)"></path>
            </svg>
        </div>
        <!-- Blob Top Right -->
        <div class="absolute top-0 right-0 -mb-56 opacity-25 w-96 h-96 -mr-72">
            <svg class="w-full h-full text-yellow-500 opacity-50 fill-current" viewBox="0 0 200 200"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M44.3,-48.3C55.3,-33.4,60.4,-16.7,62.2,1.8C64,20.3,62.5,40.6,51.6,55.3C40.6,70,20.3,79,2.3,76.7C-15.7,74.4,-31.4,60.7,-46.7,46C-62,31.4,-76.9,15.7,-78.5,-1.6C-80,-18.8,-68.2,-37.6,-52.9,-52.5C-37.6,-67.5,-18.8,-78.5,-1.1,-77.5C16.7,-76.4,33.4,-63.3,44.3,-48.3Z"
                    transform="translate(100 100)"></path>
            </svg>
        </div>

    </section>

    {{-- <!-- Section 3 -->
    <section class="flex items-center justify-center py-20 bg-white min-w-screen">
        <div class="px-16 bg-white">
            <div class="container flex flex-col items-start mx-auto lg:items-center">
                <p
                    class="relative flex items-start justify-start w-full text-lg font-bold tracking-wider text-purple-500 uppercase lg:justify-center lg:items-center">
                    Don't just take our word for it</p>


                <h2
                    class="relative flex items-start justify-start w-full max-w-3xl text-5xl font-bold lg:justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        class="absolute right-0 hidden w-12 h-12 -mt-2 -mr-16 text-gray-200 lg:inline-block"
                        viewBox="0 0 975.036 975.036">
                        <path
                            d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                        </path>
                    </svg>
                    See what others are saying
                </h2>
                <div class="block w-full h-0.5 max-w-lg mt-6 bg-purple-100 rounded-full"></div>

                <div class="items-center justify-center w-full mt-12 mb-4 lg:flex">
                    <div class="flex flex-col items-start justify-start w-full h-auto mb-12 lg:w-1/3 lg:mb-0">
                        <div class="flex items-center justify-center">
                            <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                                <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1700&amp;q=80"
                                    class="object-cover w-full h-full">
                            </div>
                            <div class="flex flex-col items-start justify-center">
                                <h4 class="font-bold text-gray-800">John Doe</h4>
                                <p class="text-gray-600">CEO of Something</p>
                            </div>
                        </div>
                        <blockquote class="mt-8 text-lg text-gray-500">"This is a no-brainer if you want to take your
                            business to the next level. If you are looking for the ultimate toolset, this is it!"
                        </blockquote>
                    </div>
                    <div
                        class="flex flex-col items-start justify-start w-full h-auto px-0 mx-0 mb-12 border-l border-r border-transparent lg:w-1/3 lg:mb-0 lg:px-8 lg:mx-8 lg:border-gray-200">
                        <div class="flex items-center justify-center">
                            <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                                <img src="https://images.unsplash.com/photo-1544725176-7c40e5a71c5e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2547&amp;q=80"
                                    class="object-cover w-full h-full">
                            </div>
                            <div class="flex flex-col items-start justify-center">
                                <h4 class="font-bold text-gray-800">Jane Doe</h4>
                                <p class="text-gray-600">CTO of Business</p>
                            </div>
                        </div>
                        <blockquote class="mt-8 text-lg text-gray-500">"Thanks for creating this service. My life is so
                            much
                            easier.
                            Thanks for making such a great product."</blockquote>
                    </div>
                    <div class="flex flex-col items-start justify-start w-full h-auto lg:w-1/3">
                        <div class="flex items-center justify-center">
                            <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                                <img src="https://images.unsplash.com/photo-1545167622-3a6ac756afa4?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1256&amp;q=80"
                                    class="object-cover w-full h-full">
                            </div>
                            <div class="flex flex-col items-start justify-center">
                                <h4 class="font-bold text-gray-800">John Smith</h4>
                                <p class="text-gray-600">Creator of Stuff</p>
                            </div>
                        </div>
                        <blockquote class="mt-8 text-lg text-gray-500">"Packed with awesome content and exactly what I
                            was
                            looking
                            for. I would highly recommend this to anyone."</blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Lastest Technologies -->
    <section class="py-12 sm:py-16 bg-white" x-data="{viewAllGuides:false}">
        <div class="max-w-7xl px-10 mx-auto sm:text-center">
            <h2 class="font-bold text-3xl sm:text-4xl lg:text-5xl mt-3">Utilize the Latest Tools</h2>
            <p class="mt-4 text-gray-500 text-base sm:text-xl lg:text-2xl">We've have created guides for our favorite
                tools.<br class="lg:hidden hidden sm:block"> Check'em out below 👇</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 my-12 sm:my-16">
                <x-card.latest-tech name="Jetstream" description="Laravel Autentication Suite">
                    <svg class="w-16 h-16" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z"
                            fill="#6875F5" />
                        <path
                            d="M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z"
                            fill="#6875F5" />
                    </svg>
                </x-card.latest-tech>

                <x-card.latest-tech name="Forge" description="Deploy and manage your apps">
                    <img class="h-16 w-16" src="/images/logos/forge-logo.png" />
                </x-card.latest-tech>

                <x-card.latest-tech name="Github" description="Learn to utilize Github">
                    <svg fill="currentColor" class="h-16 w-16" viewBox="0 0 16 16">
                        <path
                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                </x-card.latest-tech>

                <x-card.latest-tech name="Google" description="Learn how to find answers">
                    <img class="h-16 w-16" src="/images/logos/google-logo.png" />
                </x-card.latest-tech>
                <x-card.latest-tech name="reCaptcha" description="Protect Your App">
                    <img class="h-16 w-16" src="/images/logos/recaptcha.svg" />
                </x-card.latest-tech>
                <x-card.latest-tech name="Digital Ocean" description="Host Your App">
                    <img class="h-16 w-16" src="/images/logos/digitalocean-icon-1.svg" />
                </x-card.latest-tech>
                <x-card.latest-tech name="Cloudflare" description="Deploy on a CDN">
                    <img class="h-16 w-16" src="/images/logos/cloudflare.svg" />
                </x-card.latest-tech>
                <x-card.latest-tech name="Planet Scale" description="Fast and Cheap Databases">
                    <img class="h-16 w-16" src="/images/logos/planetscale-logo.png" />
                </x-card.latest-tech>

                <x-card.latest-tech x-cloak x-show="viewAllGuides === true" name="VS Code"
                    description="Setup your workstation">
                    <img class="h-16 w-16" src="/images/logos/vscode-logo.png" />
                </x-card.latest-tech>

                <x-card.latest-tech x-cloak x-show="viewAllGuides === true" name="NameCheap"
                    description="Book A Domain">
                    <img class="h-16 w-16" src="/images/logos/namecheap.svg" />
                </x-card.latest-tech>

                <x-card.latest-tech x-cloak x-show="viewAllGuides === true" name="Figma" description="Design Your App">
                    <img class="h-16 w-16" src="/images/logos/figma-1.svg" />
                </x-card.latest-tech>

                <x-card.latest-tech x-cloak x-show="viewAllGuides === true" name="Notion" description="Project Notes">
                    <img class="h-16 w-16" src="/images/logos/notion-2.svg" />
                </x-card.latest-tech>

                <x-card.latest-tech x-cloak x-show="viewAllGuides === true" name="Whimsical"
                    description="Easy Wireframes">
                    <img class="h-16 w-16" src="/images/logos/whimsical-logo.png" />
                </x-card.latest-tech>

                <x-card.latest-tech x-cloak x-show="viewAllGuides === true" name="Laragon"
                    description="Simple Server Setup">
                    <img class="h-16 w-16" src="/images/logos/laragon.svg" />
                </x-card.latest-tech>

                <x-card.latest-tech x-cloak x-show="viewAllGuides === true" name="Stripe"
                    description="Payment Processing">
                    <img class="h-16 w-16" src="/images/logos/stripe-4.svg" />
                </x-card.latest-tech>

                <x-card.latest-tech x-cloak x-show="viewAllGuides === true" name="php" description="Setup Tips">
                    <div class="pt-6"><img class="h-10 w-16" src="/images/logos/php-1.svg" /></div>
                </x-card.latest-tech>

            </div>
            <button @click="viewAllGuides = true" x-show="viewAllGuides === false"
                class="px-8 py-4 sm:w-auto w-full text-center text-base font-medium inline-block rounded text-white hover:bg-blue-600 bg-blue-500">
                View All Guides
            </button>
        </div>
    </section>

    <!-- Section 5 -->
    {{-- <section class="py-12 bg-purple-600 sm:py-16 md:py-20 lg:py-24 pb-28">
        <div class="max-w-6xl px-8 mx-auto lg:px-16">
            <h2 class="mb-2 text-2xl font-bold text-center text-white md:text-3xl lg:text-4xl">Frequently Asked
                Questions</h2>

            <div class="relative flex flex-col mt-8 mt-16 lg:flex-row">

                <!-- Left side of FAQs -->
                <div class="relative w-full space-y-3 lg:space-y-5 lg:w-1/2 lg:pr-4">
                    <x-card.question question="How to get better at coding?">
                        <p>
                            The best way to get better at coding is to simply start coding and practice daily. Try doing
                            a 100 day challenge of coding 1 hour each day. You will be amazed on how much you learn!
                        </p>
                    </x-card.question>

                    <x-card.question question="What is the best development stack?">
                        <p>
                            This depends on what your goals are and what you want to create. If you just want an answer,
                            than I say
                            join me on the Laravel adventure and check out the Roadmap on how to get started.
                        </p>
                    </x-card.question>

                    <x-card.question question="Can I contribute to this website?">
                        <p>Sure thing! Just shoot me a message on Twitter, or submit a pull request on Github.</p>
                    </x-card.question>
                </div>


                <!-- Right side of FAQs -->
                <div class="relative w-full mt-3 space-y-3 lg:mt-0 lg:space-y-5 lg:w-1/2 lg:pl-4">
                    <x-card.question question="Can I use the code on this site?">
                        <p>Absolutley! You can download our repository on Github and use any code you like.</p>
                    </x-card.question>

                    <x-card.question question="Why make this website?">
                        <p>It's a way to organize the knowledge base of the Team, and share it with the world. </p>
                    </x-card.question>

                    <x-card.question question="I hate PhP!">
                        <p>That's not a question, but Laravel will make you fall in love with ❤️ if you give it a
                            chance. </p>
                    </x-card.question>
                </div>


            </div>

        </div>
    </section> --}}

    <!-- Section 6 -->





</x-template.guest>
