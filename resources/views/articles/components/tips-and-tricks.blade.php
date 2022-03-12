<x-template.article title="Tips and Tricks">
    <x-slot name="content">
        @markdown
        ## Bar
        https://spatie.be/docs/laravel-markdown/v1/introduction
        - bullet points at

        ```php
        <a href="#hype-rating" class="text-sm text-slate-400  hover:text-slate-700 hover:font-bold font-medium">
            Hype Rating
        </a>
        ```
        @endmarkdown
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
