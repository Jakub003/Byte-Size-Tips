<x-template.guest>
    <div class="flex justify-between space-x-10 w-full max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8 ">
        <section class="hidden lg:block w-1/6">
            <div class=" sticky top-24 overflow-y-auto">
                @livewire('sidebar')
            </div>
        </section>
        <section class="w-full lg:w-[640px] flex flex-col space-y-4 px-4 lg:px-0">
            <div class="prose">
                @markdown($article)
            </div>
        </section>
        <section class="hidden lg:block w-1/6 relative">
            <div class="flex flex-col space-y-6 sticky top-24">
                <div class="flex flex-col space-y-2">
                    <h2 class="text-sm text-slate-300 font-bold">ON THIS PAGE</h2>
                    <a href="#hype-rating"
                        class="text-sm text-slate-400  hover:text-slate-700 hover:font-bold font-medium">
                        Section
                    </a>
                    <a href="#hype-rating"
                        class="text-sm text-slate-400  hover:text-slate-700 hover:font-bold font-medium">
                        Section
                    </a>
                    <a href="#hype-rating"
                        class="text-sm text-slate-400  hover:text-slate-700 hover:font-bold font-medium">
                        Section
                    </a>
                    <a href="#hype-rating"
                        class="text-sm text-slate-400  hover:text-slate-700 hover:font-bold font-medium">
                        Section
                    </a>
                </div>

                <a href="{{ 'https://github.com/Jakub003/Byte-Size-Tips/tree/main/resources/views/markdown/' .ltrim(Request::url(), 'http://bytesize.test/') .'.md' }}"
                    target="_blank" class="h-4 flex space-x-2 text-gray-700 hover:text-gray-400 items-center">
                    <svg fill="currentColor" class="h-4 w-4" viewBox="0 0 16 16">
                        <path
                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                    <p class="text-sm">Github</p>
                </a>
            </div>
        </section>
    </div>
</x-template.guest>
