<div class="flex flex-col space-y-6 overflow-y-auto">
    <div class="flex flex-col space-y-1.5">
        <h2 class="text-sm text-slate-300 font-bold uppercase">Getting Started</h2>
        @foreach ($gettingStartedArticles as $article)
            {{-- @dd($article) --}}
            <x-button.menu-item name="{{ rtrim($article->getFilename(), '.md') }}" route="getting-started"
                url="{{ rtrim($article->getFilename(), '.md') }}" />
        @endforeach


    </div>
    <div class="flex flex-col space-y-1.5">
        <h2 class="text-sm text-slate-300 font-bold uppercase">Cheat Sheet</h2>
        @foreach ($cheatSheetArticles as $article)
            <x-button.menu-item name="Introduction" route="getting-started" url="introduction" />
        @endforeach
    </div>

    <div class="flex flex-col space-y-1.5">
        <h2 class="text-sm text-slate-300 font-bold uppercase">Features</h2>
        @foreach ($featureArticles as $article)
            <x-button.menu-item name="{{ rtrim($article->getFilename(), '.md') }}" route="features"
                url="{{ rtrim($article->getFilename(), '.md') }}" />
        @endforeach
    </div>
    <div class="flex flex-col space-y-1.5">
        <h2 class="text-sm text-slate-300 font-bold uppercase">Components</h2>
        @foreach ($componentArticles as $article)
            <x-button.menu-item name="Introduction" route="getting-started" url="introduction" />
        @endforeach
    </div>
    <div class="flex flex-col space-y-1.5">
        <h2 class="text-sm text-slate-300 font-bold uppercase">SASS Roadmap</h2>
        @foreach ($roadmapArticles as $article)
            <x-button.menu-item name="Introduction" route="getting-started" url="introduction" />
        @endforeach
    </div>

</div>
