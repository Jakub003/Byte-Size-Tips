<x-template.guest>
    <x-template.article>
        <x-slot name="sidebar">
            <div class="flex flex-col space-y-3">
                <h2 class="text-sm text-slate-300 font-bold">REPORT</h2>
                <a href="#"
                    class="text-base  {{ Request::routeIs('mavia.overview')? 'text-blue-500 font-bold': 'text-slate-500  hover:text-blue-500 hover:font-bold font-medium' }}">
                    Overview
                </a>

            </div>
        </x-slot>

        <x-slot name="content">

            <div class="prose">
                @foreach ($articles as $article)
                    {!! $article !!}
                @endforeach
            </div>
        </x-slot>

        <x-slot name="navigation">
            <a href="#hype-rating" class="text-sm text-slate-400  hover:text-slate-700 hover:font-bold font-medium">
                Hype Rating
            </a>
            <a href="#hype-rating" class="text-sm text-slate-400  hover:text-slate-700 hover:font-bold font-medium">
                Hype Rating
            </a>
            <a href="#hype-rating" class="text-sm text-slate-400  hover:text-slate-700 hover:font-bold font-medium">
                Hype Rating
            </a>
            <a href="#hype-rating" class="text-sm text-slate-400  hover:text-slate-700 hover:font-bold font-medium">
                Hype Rating
            </a>
            <a href="#hype-rating" class="text-sm text-slate-400  hover:text-slate-700 hover:font-bold font-medium">
                Hype Rating
            </a>
        </x-slot>
    </x-template.article>
</x-template.guest>
