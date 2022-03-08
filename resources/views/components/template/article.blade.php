@props([
    'title' => 'Article Title',
])
<div class="flex justify-between space-x-10 w-full max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    @if (isset($sidebar))
        <section class="hidden lg:block w-1/6 relative">
            <div class="flex flex-col space-y-10 sticky top-24">
                <div class="flex flex-col space-y-2 ">
                    {{ $sidebar }}
                </div>
            </div>
        </section>
    @endif
    @if (isset($content))
        <section class="w-[640px] flex flex-col space-y-10">
            <div id="report" class="prose">
                <h2 class="text-4xl font-bold">{!! $title !!}</h2>
            </div>
            <div class=" flex flex-col space-y-10">
                {{ $content }}
            </div>
        </section>
    @endif
    @if (isset($navigation))
        <section class="hidden lg:block w-1/6 relative">
            <div class="flex flex-col space-y-10 sticky top-24">
                <div class="flex flex-col space-y-2">
                    <h2 class="text-sm text-slate-300 font-bold">ON THIS PAGE</h2>
                    {{ $navigation }}
                </div>
            </div>
        </section>
    @endif
</div>
