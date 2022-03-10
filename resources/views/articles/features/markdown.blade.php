<x-template.article title="Markdown">
    <x-slot name="content">
        <x-torchlight-code language='php' theme="material-theme-palenight">
            echo "Hello World!";
            <div id="report">
                <h2 class="text-4xl font-bold">{!! $title !!}</h2>
            </div>
        </x-torchlight-code>
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
