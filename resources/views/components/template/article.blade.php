@props([
    'title' => 'Article Title',
])
<x-template.guest>
    <div class="flex justify-between space-x-10 w-full max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8 ">
        <section class="hidden lg:block w-1/6 overflow-hidden">
            @include('pages.sidebar')
        </section>
        <section class="w-[640px] flex flex-col space-y-10">
            <div id="report">
                <h2 class="text-4xl font-bold">{!! $title !!}</h2>
            </div>
            <div class="prose">
                {{ $content }}
            </div>
        </section>
        <section class="hidden lg:block w-1/6 relative">
            <div class="flex flex-col space-y-10 sticky top-24">
                <div class="flex flex-col space-y-2">
                    <h2 class="text-sm text-slate-300 font-bold">ON THIS PAGE</h2>
                    {{ $navigation }}
                </div>
            </div>
        </section>
    </div>
</x-template.guest>
