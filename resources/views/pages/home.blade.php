<x-template.guest>
    <section class="pt-24 pb-32 bg-white max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
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
</x-template.guest>
