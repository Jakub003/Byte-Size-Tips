<x-template.guest>
    <x-template.article>
        <x-slot name="sidebar">
            @include('pages.features.sidebar')
        </x-slot>

        <x-slot name="content">
            <div>
                Features
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
