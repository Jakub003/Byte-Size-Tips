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
                        <div class="relative flex items-start justify-start block w-full max-w-md text-center lg:mx-0">
                            <a href="{{ route('cheat-sheet') }}"
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
            <h1 class="mb-3 text-3xl font-bold leading-tight text-center text-gray-900 md:text-4xl">
                Amazing Development Stack
            </h1>
            <p class="text-lg text-center text-gray-600 ">
                Utilize the latest technologies to build one of a kind web apps that delight your users.
            </p>
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

    <!-- Section 2 -->
    <section
        class="box-border relative w-full font-sans leading-6 text-gray-700 bg-white border-0 border-gray-200 border-solid">
        <div
            class="box-border flex flex-col items-center px-8 py-20 mx-auto leading-6 border-solid max-w-7xl xl:px-16 md:items-stretch md:justify-center md:py-24">
            <div class="relative pb-10">
                <h1 class="mb-3 text-3xl font-bold leading-tight text-center text-gray-900 md:text-4xl">
                    Variety of Topics
                </h1>
                <p class="text-lg text-center text-gray-600 ">
                    Explore how to build apps with the best practices from start to finish.
                </p>
            </div>

            <div class="z-10 grid gap-5 md:grid-cols-6 lg:grid-cols-9">
                <!-- Feature 4 -->
                <a href="#" class="col-span-3 font-sans text-gray-700 bg-gray-50  hover:shadow-md rounded-3xl">
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
                                Find insipration ect
                            </p>
                        </div>
                    </div>
                </a>
                <!-- Feature 2 -->
                <div class="col-span-3 font-sans text-gray-700 bg-gray-50 rounded-3xl">
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
                                Plan out your project
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-span-3 font-sans text-gray-700 bg-gray-50 rounded-3xl">
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
                                Set it, and forget it. Our automated tools will allow you to automate your workflow.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Feature 1 -->
                <div class="col-span-3 font-sans text-gray-700 bg-gray-50 rounded-3xl">
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
                                Deployment
                            </h6>
                            <p
                                class="box-border mx-0 mt-1 mb-0 font-medium leading-loose text-gray-400 border-solid sm:mt-4">
                                Take advantage of our unlimited projects for your tasks and automated workflow.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 3 -->


                <!-- Feature 5 -->
                <div class="col-span-3 font-sans text-gray-700 bg-gray-50 rounded-3xl">
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
                                Performance
                            </h6>
                            <p
                                class="box-border mx-0 mt-1 mb-0 font-medium leading-loose text-gray-400 border-solid sm:mt-4">
                                We have the fastest response times than any other service in our industry.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Feature 6 -->
                <div class="col-span-3 font-sans text-gray-700 border-0 bg-gray-50 rounded-3xl">
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
                                Distribution
                            </h6>
                            <p
                                class="box-border mx-0 mt-1 mb-0 font-medium leading-loose text-gray-400 border-solid sm:mt-4">
                                We pride ourselves in our up-time metrics. We focus a lot of our energy on being
                                reliable.
                            </p>
                        </div>
                    </div>
                </div>
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

    <!-- Section 3 -->
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
    </section>

    <!-- Section 4 -->
    <section class="py-12 sm:py-16 bg-white">
        <div class="max-w-7xl px-10 mx-auto sm:text-center">
            <p class="text-blue-500 font-medium uppercase">Our Application Integrations</p>
            <h2 class="font-bold text-3xl sm:text-4xl lg:text-5xl mt-3">Connect with Your Favorite Apps.</h2>
            <p class="mt-4 text-gray-500 text-base sm:text-xl lg:text-2xl">We've built integrations with some of your
                favorite services.<br class="lg:hidden hidden sm:block"> Check'em out below 👇</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 my-12 sm:my-16">
                <div
                    class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <svg class="w-16 h-auto" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="xMidYMid">
                        <path
                            d="M159.999 128.056a76.55 76.55 0 0 1-4.915 27.024 76.745 76.745 0 0 1-27.032 4.923h-.108c-9.508-.012-18.618-1.75-27.024-4.919A76.557 76.557 0 0 1 96 128.056v-.112a76.598 76.598 0 0 1 4.91-27.02A76.492 76.492 0 0 1 127.945 96h.108a76.475 76.475 0 0 1 27.032 4.923 76.51 76.51 0 0 1 4.915 27.02v.112zm94.223-21.389h-74.716l52.829-52.833a128.518 128.518 0 0 0-13.828-16.349v-.004a129 129 0 0 0-16.345-13.816l-52.833 52.833V1.782A128.606 128.606 0 0 0 128.064 0h-.132c-7.248.004-14.347.62-21.265 1.782v74.716L53.834 23.665A127.82 127.82 0 0 0 37.497 37.49l-.028.02A128.803 128.803 0 0 0 23.66 53.834l52.837 52.833H1.782S0 120.7 0 127.956v.088c0 7.256.615 14.367 1.782 21.289h74.716l-52.837 52.833a128.91 128.91 0 0 0 30.173 30.173l52.833-52.837v74.72a129.3 129.3 0 0 0 21.24 1.778h.181a129.15 129.15 0 0 0 21.24-1.778v-74.72l52.838 52.837a128.994 128.994 0 0 0 16.341-13.82l.012-.012a129.245 129.245 0 0 0 13.816-16.341l-52.837-52.833h74.724c1.163-6.91 1.77-14 1.778-21.24v-.186c-.008-7.24-.615-14.33-1.778-21.24z"
                            fill="#FF4A00"></path>
                    </svg>
                    <p class="font-bold mt-4">Zapier</p>
                    <p class="mt-2 text-sm text-gray-500">Connect to 1,000+ apps</p>
                </div>
                <div
                    class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <svg class="w-16 h-auto" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" fill-rule="evenodd">
                            <path
                                d="M19.712.133a5.381 5.381 0 0 0-5.376 5.387 5.381 5.381 0 0 0 5.376 5.386h5.376V5.52A5.381 5.381 0 0 0 19.712.133m0 14.365H5.376A5.381 5.381 0 0 0 0 19.884a5.381 5.381 0 0 0 5.376 5.387h14.336a5.381 5.381 0 0 0 5.376-5.387 5.381 5.381 0 0 0-5.376-5.386"
                                fill="#36C5F0"></path>
                            <path
                                d="M53.76 19.884a5.381 5.381 0 0 0-5.376-5.386 5.381 5.381 0 0 0-5.376 5.386v5.387h5.376a5.381 5.381 0 0 0 5.376-5.387m-14.336 0V5.52A5.381 5.381 0 0 0 34.048.133a5.381 5.381 0 0 0-5.376 5.387v14.364a5.381 5.381 0 0 0 5.376 5.387 5.381 5.381 0 0 0 5.376-5.387"
                                fill="#2EB67D"></path>
                            <path
                                d="M34.048 54a5.381 5.381 0 0 0 5.376-5.387 5.381 5.381 0 0 0-5.376-5.386h-5.376v5.386A5.381 5.381 0 0 0 34.048 54m0-14.365h14.336a5.381 5.381 0 0 0 5.376-5.386 5.381 5.381 0 0 0-5.376-5.387H34.048a5.381 5.381 0 0 0-5.376 5.387 5.381 5.381 0 0 0 5.376 5.386"
                                fill="#ECB22E"></path>
                            <path
                                d="M0 34.249a5.381 5.381 0 0 0 5.376 5.386 5.381 5.381 0 0 0 5.376-5.386v-5.387H5.376A5.381 5.381 0 0 0 0 34.25m14.336-.001v14.364A5.381 5.381 0 0 0 19.712 54a5.381 5.381 0 0 0 5.376-5.387V34.25a5.381 5.381 0 0 0-5.376-5.387 5.381 5.381 0 0 0-5.376 5.387"
                                fill="#E01E5A"></path>
                        </g>
                    </svg>
                    <p class="font-bold mt-4">Slack</p>
                    <p class="mt-2 text-sm text-gray-500">Messaging Platform</p>
                </div>
                <div
                    class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <svg class="w-16 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 262" fill="none">
                        <path
                            d="M192.277 86.567V55.5a23.953 23.953 0 0 0 13.815-21.594v-.727a23.998 23.998 0 0 0-23.934-23.934h-.726a24 24 0 0 0-23.935 23.934v.727A23.949 23.949 0 0 0 171.312 55.5v31.132a67.887 67.887 0 0 0-32.278 14.202l-85.44-66.541A27.259 27.259 0 1 0 40.828 50.9l84.004 65.395a68.079 68.079 0 0 0 1.049 76.757l-25.564 25.565a21.93 21.93 0 0 0-6.343-1.033 22.187 22.187 0 0 0-20.502 13.699 22.19 22.19 0 1 0 42.693 8.492 21.858 21.858 0 0 0-1.033-6.343l25.29-25.29a68.198 68.198 0 0 0 58.778 11.746 68.196 68.196 0 0 0 45.342-39.203 68.198 68.198 0 0 0-3.13-59.858 68.188 68.188 0 0 0-49.183-34.26h.048Zm-10.523 102.354a34.988 34.988 0 0 1-34.225-41.871 34.99 34.99 0 0 1 69.295 6.898 34.99 34.99 0 0 1-34.989 34.989"
                            fill="#FF7A59"></path>
                    </svg>
                    <p class="font-bold mt-4">Hubspot</p>
                    <p class="mt-2 text-sm text-gray-500">Customer Relations</p>
                </div>
                <div
                    class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <svg class="w-16 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 190" fill="none">
                        <path
                            d="M115.482 49.956V189.13H0L115.482 49.956ZM115.482 0A57.587 57.587 0 0 1 98.57 40.756a57.793 57.793 0 0 1-40.83 16.882c-15.313 0-30-6.073-40.828-16.882A57.586 57.586 0 0 1 0 0h115.482ZM134.507 189.13a57.586 57.586 0 0 1 16.912-40.757 57.792 57.792 0 0 1 40.829-16.881c15.313 0 30 6.072 40.828 16.881a57.586 57.586 0 0 1 16.912 40.757H134.507ZM134.507 139.174V0h115.494L134.507 139.174Z"
                            fill="#03363D"></path>
                    </svg>
                    <p class="font-bold mt-4">Zendesk</p>
                    <p class="mt-2 text-sm text-gray-500">Customer Messaging</p>
                </div>
                <div
                    class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <svg class="w-16 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 215" fill="none">
                        <path
                            d="M0 162.02V69.962c0-3.137 3.137-5.378 6.095-4.302l106.849 41.592c3.047 1.165 3.316 5.378.448 6.812L6.633 166.144C3.585 167.668 0 165.427 0 162.02Z"
                            fill="#F82B60"></path>
                        <path
                            d="M123.611 94.792 16.942 51.766c-3.406-1.434-3.406-6.275 0-7.709L119.31 1.479c4.661-1.972 9.95-1.972 14.7 0l102.367 42.578c3.406 1.434 3.406 6.275 0 7.709L130.155 94.792a8.3 8.3 0 0 1-6.544 0Z"
                            fill="#FCB400"></path>
                        <path
                            d="m139.835 214.369 107.386-41.323c1.703-.628 2.778-2.241 2.778-4.034V69.424c0-3.047-2.958-5.11-5.736-4.033l-107.387 41.323c-1.703.627-2.778 2.241-2.778 4.033v99.588c0 3.048 2.958 5.109 5.737 4.034Z"
                            fill="#18BFFF"></path>
                        <path
                            d="M112.944 107.252 6.095 65.66c-1.434-.538-2.868-.269-4.033.448l75.295 65.525 36.035-17.569c2.868-1.523 2.599-5.736-.448-6.812Z"
                            fill="#BA2048"></path>
                    </svg>
                    <p class="font-bold mt-4">Airtable</p>
                    <p class="mt-2 text-sm text-gray-500">Data Management</p>
                </div>
                <div
                    class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <svg class="w-16 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 250" fill="none">
                        <path d="m146.101 236.335-42.529-41.47 91.337-93.269 44.032 43.155-92.84 91.584Z"
                            fill="#8AB4F8"></path>
                        <path
                            d="M146.283 52.982 103.907 9.717l-92.659 91.779c-11.944 11.944-11.944 31.308 0 43.265l91.267 91.863 43.156-40.37-69.536-73.125 70.148-70.147Z"
                            fill="#4285F4"></path>
                        <path
                            d="M238.329 102.209 146.45 10.332c-11.958-11.957-31.35-11.957-43.308 0-11.959 11.958-11.959 31.35 0 43.308l91.879 91.876c11.958 11.958 31.35 11.958 43.308 0 11.959-11.958 11.959-31.349 0-43.307Z"
                            fill="#8AB4F8"></path>
                        <path
                            d="M124.092 246.372c16.53 0 29.93-13.4 29.93-29.93 0-16.529-13.4-29.929-29.93-29.929-16.531 0-29.93 13.4-29.93 29.929 0 16.53 13.399 29.93 29.93 29.93Z"
                            fill="#246FDB"></path>
                    </svg>
                    <p class="font-bold mt-4">Google Tag Manager</p>
                    <p class="mt-2 text-sm text-gray-500">Web Tag Manager</p>
                </div>
                <div
                    class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <svg class="w-16 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                        style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <path
                            d="M362.9 243.5c3.1-.4 6.2-.4 9.3 0 1.7-3.8 2-10.5.5-17.6-2.2-10.7-5.3-17.2-11.5-16.2s-6.5 8.8-4.2 19.5c1.1 5.9 3.4 11.1 5.9 14.3zm-53.7 8.5c4.5 2 7.2 3.3 8.3 2.1 1.9-1.9-3.5-9.4-12.1-13.1-10.2-4.2-21.8-2.8-30.7 3.7-3 2.2-5.8 5.2-5.4 7.1.9 3.7 10-2.7 22.7-3.5 6.9-.5 12.7 1.7 17.2 3.7zm-9 5.1c-9.1 1.4-15 6.5-13.5 10.1.9.3 1.2.8 5.2-.8 6-2.3 12.4-2.9 18.8-2 2.9.3 4.3.5 5-.5 1.3-2.1-5.8-7.9-15.5-6.8zm54.2 17.2c3.4-6.9-10.9-14-14.3-7-3.4 6.9 11 13.9 14.3 7zm15.7-20.5c-7.7-.1-8 15.8-.3 16 7.8 0 8.1-15.9.3-16zm-219.2 79c-1.3.3-6 1.5-8.5-2.4-5.2-8 11.1-20.4 3-35.9-9.1-17.5-27.9-13.6-35.1-5.6-8.7 9.6-8.7 23.6-5 24.1 4.3.6 4.1-6.5 7.4-11.7 3.9-6 11.8-7.7 17.8-3.8 0 0 .1 0 .1.1 11.6 7.6 1.4 17.8 2.3 28.7 1.4 16.7 18.5 16.4 21.6 9 .4-.7.3-1.7-.2-2.3 0 1.1.6-1.1-3.4-.2zm300.4-17.1c-3.4-11.8-2.6-9.2-6.8-20.6 2.5-3.7 15.3-24.1-3.1-43.3-10.4-10.9-34-16.6-41.2-18.6-1.5-11.4 4.7-58.8-21.6-83.2 20.8-21.6 33.8-45.4 33.8-65.8-.1-39.2-48.3-51.1-107.7-26.5L292.1 63c-.1-.1-22.8-22.3-23.1-22.6-67.6-59-279.4 176.3-211.7 233.5l14.8 12.5c-4 10.7-5.4 22.2-4.1 33.6 3.4 33.5 36.1 60.6 67.7 60.5 57.9 133.4 268.5 133.6 323 3 1.7-4.5 9.1-24.7 9.1-42.5s-10.1-25.3-16.5-25.3zM134.5 364c-22.9-.6-47.6-21.2-50-45.6-6.2-61.4 74.4-75.4 84.2-12.4 4.6 29.7-4.7 58.6-34.2 58zM116 249.5c-15.2 3-28.6 11.6-36.8 23.5-4.9-4.1-14-12-15.6-15-13-24.9 14.3-73.2 33.4-100.4C144.2 90.2 218.1 39.2 252.4 48.4c5.6 1.6 24 22.9 24 22.9s-34.2 19-65.9 45.5c-42.9 33-75.2 80.8-94.5 132.7zm239.4 101.4s-35.8 5.3-69.7-7.1c6.2-20.2 27.1 6.1 96.6-13.8 15.3-4.4 35.4-13 51.1-25.4 3.4 7.8 5.8 16 7.1 24.3 3.7-.7 14.3-.5 11.5 18.1-3.3 19.9-11.8 36.1-26 51-8.9 9.6-19.5 17.6-31.2 23.4-6.5 3.4-13.4 6.3-20.4 8.6-53.6 17.5-108.5-1.7-126.3-43.1-1.4-3.2-2.6-6.4-3.6-9.8-7.5-27.3-1.1-60 18.9-80.6 1.2-1.3 2.5-2.9 2.5-4.8-.2-1.7-.8-3.3-1.9-4.6-7-10.2-31.3-27.5-26.4-61 3.5-24.1 24.5-41 44.2-40l5 .3c8.5.5 15.9 1.6 22.9 1.9 11.7.5 22.3-1.2 34.7-11.6 4.2-3.5 7.6-6.6 13.3-7.5 4.7-1.2 9.6-.3 13.6 2.2 10 6.7 11.4 22.8 11.9 34.6.3 6.7 1.1 23.1 1.4 27.7.6 10.7 3.4 12.2 9.1 14 3.2 1.1 6.2 1.8 10.5 3.1 13.2 3.7 21 7.5 26.1 12.3 2.6 2.5 4.2 5.8 4.8 9.3 1.6 11.4-8.8 25.5-36.4 38.2-46.8 21.7-93.9 14.5-100.7 13.7-20.2-2.7-31.7 23.4-19.6 41.2 22.7 33.5 122.7 20 151.7-21.4.7-1 .1-1.6-.7-1-41.9 28.6-97.3 38.3-128.8 26.1-4.8-1.9-14.8-6.5-16-16.7 43.7 13.5 71.2.7 71.2.7s2.2-2.6-.4-2.3zM203.2 157.3c16.8-19.4 37.4-36.3 56-45.7.3-.2.8-.1 1 .3.1.2.1.5 0 .7-1.5 2.7-4.3 8.4-5.2 12.7-.1.4.2.8.6.9.2.1.4 0 .6-.1 11.5-7.8 31.6-16.3 49.1-17.3.4 0 .8.3.8.7 0 .3-.1.5-.3.7-2.9 2.2-5.5 4.8-7.7 7.8-.2.3-.2.8.2 1 .1.1.3.1.4.1 12.3.1 29.7 4.4 41.1 10.8.8.4.2 1.9-.6 1.7-69.7-16-123.4 18.6-134.8 26.9-.4.2-.8.1-1.1-.2-.3-.4-.3-.8-.1-1z">
                        </path>
                    </svg>
                    <p class="font-bold mt-4">Mailchimp</p>
                    <p class="mt2 text-sm text-gray-500">Email Marketing</p>
                </div>
                <div
                    class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                    <svg class="h-16 w-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 343" fill="none">
                        <path
                            d="M163.818 0H23.736C10.59 0 0 10.663 0 23.736v294.771c0 13.146 10.663 23.737 23.736 23.737H226.19c13.147 0 23.737-10.664 23.737-23.737V85.159h-86.109V0Z"
                            fill="#34A853"></path>
                        <path d="M250.001 85.16h-86.182V0l86.182 85.16Z" fill="#188038"></path>
                        <path
                            d="M46.89 132.194V245.18h156.149V132.194H46.889Zm136.722 19.354v27.388h-49.08v-27.388h49.08Zm-68.507 0v27.388H66.317v-27.388h48.788Zm-48.788 74.131v-27.388h48.788v27.388H66.317Zm68.215 0v-27.388h49.08v27.388h-49.08Z"
                            fill="#fff"></path>
                    </svg>
                    <p class="font-bold mt-4">Google Sheets</p>
                    <p class="mt-2 text-sm text-gray-500">Spreadsheet</p>
                </div>
            </div>
            <a href="#_"
                class="px-8 py-4 sm:w-auto w-full text-center text-base font-medium inline-block rounded text-white hover:bg-blue-600 bg-blue-500">View
                All Integrations</a>
        </div>
    </section>

    <!-- Section 5 -->
    <section class="py-12 bg-purple-600 sm:py-16 md:py-20 lg:py-24 pb-28">
        <div class="max-w-6xl px-8 mx-auto lg:px-16">
            <h2 class="mb-2 text-2xl font-bold text-center text-white md:text-3xl lg:text-4xl">Frequently Asked
                Questions</h2>

            <div class="relative flex flex-col mt-8 mt-16 lg:flex-row">

                <!-- Left side of FAQs -->
                <div class="relative w-full space-y-3 lg:space-y-5 lg:w-1/2 lg:pr-4">
                    <!-- Question 1 -->
                    <div x-data="{ show: false }"
                        class="relative px-6 py-2 overflow-hidden text-white bg-purple-700 rounded-lg select-none">
                        <h4 @click="show=!show"
                            class="flex items-center justify-between py-4 text-base font-medium text-purple-100 cursor-pointer sm:text-lg hover:text-white">
                            <span>Where do I go to upgrade my account?</span>
                            <svg class="w-4 h-4 mr-1 transition-all duration-200 ease-out transform rotate-0"
                                :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 text-purple-200 sm:text-lg py-7"
                            x-transition:enter="transition-all ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform -translate-y-4"
                            x-transition:enter-end="opacity-100 transform -translate-y-0"
                            x-transition:leave="transition-all ease-out hidden duration-200"
                            x-transition:leave-start="opacity-100 transform -translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">You can
                            upgrade your account by visiting The Pro Upgrade Page. You will also gain access to many
                            other applications and sections of the site.</p>
                    </div>

                    <!-- Question 2 -->
                    <div x-data="{ show: false }"
                        class="relative px-6 py-2 overflow-hidden text-white bg-purple-700 rounded-lg select-none">
                        <h4 @click="show=!show"
                            class="flex items-center justify-between py-4 text-base font-medium text-purple-100 cursor-pointer sm:text-lg hover:text-white">
                            <span>How do I use Tails in my project?</span>
                            <svg class="w-4 h-4 mr-1 transition-all duration-200 ease-out transform rotate-0"
                                :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 text-purple-200 sm:text-lg py-7"
                            x-transition:enter="transition-all ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform -translate-y-4"
                            x-transition:enter-end="opacity-100 transform -translate-y-0"
                            x-transition:leave="transition-all ease-out hidden duration-200"
                            x-transition:leave-start="opacity-100 transform -translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">
                            Implementation in your project is very simple. You can use the exported page as a starting
                            point, or you can copy and paste the HTML into your own page.</p>
                    </div>

                    <!-- Question 3 -->
                    <div x-data="{ show: false }"
                        class="relative px-6 py-2 overflow-hidden text-white bg-purple-700 rounded-lg select-none">
                        <h4 @click="show=!show"
                            class="flex items-center justify-between py-4 text-base font-medium text-purple-100 cursor-pointer sm:text-lg hover:text-white">
                            <span>How long will I have access to Tails?</span>
                            <svg class="w-4 h-4 mr-1 transition-all duration-200 ease-out transform rotate-0"
                                :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 text-purple-200 sm:text-lg py-7"
                            x-transition:enter="transition-all ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform -translate-y-4"
                            x-transition:enter-end="opacity-100 transform -translate-y-0"
                            x-transition:leave="transition-all ease-out hidden duration-200"
                            x-transition:leave-start="opacity-100 transform -translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">You
                            will have unlimited access to all your pre-built pages; however, if you want to be able to
                            download and export your pages, you'll need a pro account. Paddle for processing payments.
                        </p>
                    </div>


                    <!-- Question 4 -->
                    <div x-data="{ show: false }"
                        class="relative px-6 py-2 overflow-hidden text-white bg-purple-700 rounded-lg select-none">
                        <h4 @click="show=!show"
                            class="flex items-center justify-between py-4 text-base font-medium text-purple-100 cursor-pointer sm:text-lg hover:text-white">
                            <span>What is the license on the pages?</span>
                            <svg class="w-4 h-4 mr-1 transition-all duration-200 ease-out transform rotate-0"
                                :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 text-purple-200 sm:text-lg py-7"
                            x-transition:enter="transition-all ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform -translate-y-4"
                            x-transition:enter-end="opacity-100 transform -translate-y-0"
                            x-transition:leave="transition-all ease-out hidden duration-200"
                            x-transition:leave-start="opacity-100 transform -translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">You
                            have unlimited use to the templates used in Tails; however, you cannot re-use the templates
                            to sell for others to use.</p>
                    </div>
                </div>


                <!-- Right side of FAQs -->
                <div class="relative w-full mt-3 space-y-3 lg:mt-0 lg:space-y-5 lg:w-1/2 lg:pl-4">
                    <!-- Question 1 -->
                    <div x-data="{ show: false }"
                        class="relative px-6 py-2 overflow-hidden text-white bg-purple-700 rounded-lg select-none">
                        <h4 @click="show=!show"
                            class="flex items-center justify-between py-4 text-base font-medium text-purple-100 cursor-pointer sm:text-lg hover:text-white">
                            <span>How Many API Calls Do I Get?</span>
                            <svg class="w-4 h-4 mr-1 transition-all duration-200 ease-out transform rotate-0"
                                :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 text-purple-200 sm:text-lg py-7"
                            x-transition:enter="transition-all ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform -translate-y-4"
                            x-transition:enter-end="opacity-100 transform -translate-y-0"
                            x-transition:leave="transition-all ease-out hidden duration-200"
                            x-transition:leave-start="opacity-100 transform -translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">The
                            free plan will give you 2,000 free API calls. At anytime, if you wish to <a href="#_"
                                class="font-medium text-purple-100 underline">upgrade to a paid plan</a>, you can
                            eaisily increase that amount.</p>
                    </div>

                    <!-- Question 2 -->
                    <div x-data="{ show: false }"
                        class="relative px-6 py-2 overflow-hidden text-white bg-purple-700 rounded-lg select-none">
                        <h4 @click="show=!show"
                            class="flex items-center justify-between py-4 text-base font-medium text-purple-100 cursor-pointer sm:text-lg hover:text-white">
                            <span>Where Can I Learn More?</span>
                            <svg class="w-4 h-4 mr-1 transition-all duration-200 ease-out transform rotate-0"
                                :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 text-purple-200 sm:text-lg py-7"
                            x-transition:enter="transition-all ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform -translate-y-4"
                            x-transition:enter-end="opacity-100 transform -translate-y-0"
                            x-transition:leave="transition-all ease-out hidden duration-200"
                            x-transition:leave-start="opacity-100 transform -translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">You can
                            learn more about using our API by visiting our <a href="#_"
                                class="font-medium text-purple-100 underline">Academy page</a> which contains
                            screencasts that will teach you the ins-and-outs of using the API. You may also visit the <a
                                href="#_" class="font-medium text-purple-100 underline">developer docs</a> to learn
                            more.</p>
                    </div>

                    <!-- Question 3 -->
                    <div x-data="{ show: false }"
                        class="relative px-6 py-2 overflow-hidden text-white bg-purple-700 rounded-lg select-none">
                        <h4 @click="show=!show"
                            class="flex items-center justify-between py-4 text-base font-medium text-purple-100 cursor-pointer sm:text-lg hover:text-white">
                            <span>Do You Have Any SDK's?</span>
                            <svg class="w-4 h-4 mr-1 transition-all duration-200 ease-out transform rotate-0"
                                :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 text-purple-200 sm:text-lg py-7"
                            x-transition:enter="transition-all ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform -translate-y-4"
                            x-transition:enter-end="opacity-100 transform -translate-y-0"
                            x-transition:leave="transition-all ease-out hidden duration-200"
                            x-transition:leave-start="opacity-100 transform -translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">
                            Absolutely, we have an SDK for most of the popular languages and frameworks. Be sure to
                            visit our <a href="#_" class="font-medium text-purple-100 underline">list of SDK's</a> to
                            learn how you can build on top of our service.</p>
                    </div>


                    <!-- Question 4 -->
                    <div x-data="{ show: false }"
                        class="relative px-6 py-2 overflow-hidden text-white bg-purple-700 rounded-lg select-none">
                        <h4 @click="show=!show"
                            class="flex items-center justify-between py-4 text-base font-medium text-purple-100 cursor-pointer sm:text-lg hover:text-white">
                            <span>Can I Become an Affiliate?</span>
                            <svg class="w-4 h-4 mr-1 transition-all duration-200 ease-out transform rotate-0"
                                :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 text-purple-200 sm:text-lg py-7"
                            x-transition:enter="transition-all ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform -translate-y-4"
                            x-transition:enter-end="opacity-100 transform -translate-y-0"
                            x-transition:leave="transition-all ease-out hidden duration-200"
                            x-transition:leave-start="opacity-100 transform -translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">Yes. We
                            are utilizing <a href="https://paddle.com"
                                class="font-medium text-purple-100 underline">paddle</a>, which has a fully functional
                            affiliate program. <a href="#_" class="font-medium text-purple-100 underline">Click
                                here</a> to signup as an affiliate.</p>
                    </div>
                </div>


            </div>

        </div>
    </section>

    <!-- Section 6 -->





</x-template.guest>
