@props([
    'title' => 'Article Title',
])
<x-template.guest>
    <div class="flex justify-between space-x-10 w-full max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8 ">
        <section class="hidden lg:block w-1/6">
            <div class=" sticky top-24 overflow-y-auto">
                @include('pages.sidebar')
            </div>
        </section>
        <section class="w-full lg:w-[640px] flex flex-col space-y-4 px-4 lg:px-0">
            <div id="report">
                <h2 class="text-4xl font-bold">{!! $title !!}</h2>
            </div>
            <div class="prose">
                @markdown($slot)
            </div>

        </section>
        <section class="hidden lg:block w-1/6 relative">
            <div class="flex flex-col space-y-10 sticky top-24">
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
            </div>
        </section>
    </div>
</x-template.guest>
