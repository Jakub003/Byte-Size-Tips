<div class="flex flex-col space-y-6 overflow-y-auto">
    <div class="flex flex-col space-y-1.5">
        <h2 class="text-sm text-slate-300 font-bold uppercase">Getting Started</h2>
        <x-button.menu-item name="Introduction" route="getting-started" url="introduction" />
        {{-- <x-button.menu-item name="HTML and CSS Basics" />
        <x-button.menu-item name="Data Science" />
        <x-button.menu-item name="PHP" />
        <x-button.menu-item name="Laravel Basics" />
        <x-button.menu-item name="Javascript Basics" /> --}}
    </div>
    <div class="flex flex-col space-y-1.5">
        <h2 class="text-sm text-slate-300 font-bold uppercase">Cheat Sheet</h2>
        <x-button.menu-item name="Quick Commands" route="cheat-sheet" url="quick-commands" />
        <x-button.menu-item name=" Database Migrations" route="cheat-sheet" url="database-migrations" />
        <x-button.menu-item name="Factory Seeders" route="cheat-sheet" url="factory-seeders" />
        <x-button.menu-item name="Eloquent Queries" route="cheat-sheet" url="eloquent-queries" />
        <x-button.menu-item name="Blade Components" route="cheat-sheet" url="blade-components" />
        {{-- <x-button.menu-item name="Livewire Components" route="cheat-sheet" url="livewire-components" /> --}}
        <x-button.menu-item name="UI/UX Resources" route="cheat-sheet" url="ui-ux-resources" />
    </div>

    <div class="flex flex-col space-y-1.5">
        <h2 class="text-sm text-slate-300 font-bold uppercase">Features</h2>
        {{-- <x-button.menu-item name="Google reCaptcha" /> --}}
        {{-- <x-button.menu-item name="Drag and Drop" /> --}}
        {{-- <x-button.menu-item name="File Uploads" /> --}}
        {{-- <x-button.menu-item name="Dark Mode Toggle" /> --}}
        {{-- <x-button.menu-item name="Markdown" route="features" url="markdown" /> --}}
        <x-button.menu-item name="Syntax Highlighting" route="features" url="syntax-highlighting" />
        <x-button.menu-item name="Discord Webhooks" route="features" url="discord-webhooks" />
    </div>
    <div class="flex flex-col space-y-1.5">
        <h2 class="text-sm text-slate-300 font-bold uppercase">Components</h2>
        <x-button.menu-item name="Tips and Tricks" route="components" url="tips-and-tricks" />
        {{-- <x-button.menu-item name="Toggle" />
        <x-button.menu-item name="Tables" />
        <x-button.menu-item name="Toggle" />
        <x-button.menu-item name="Tables" /> --}}
    </div>
    <div class="flex flex-col space-y-1.5">
        <h2 class="text-sm text-slate-300 font-bold uppercase">SASS Roadmap</h2>
        <x-button.menu-item name="Overview" route="roadmap" url="overview" />
        {{-- <x-button.menu-item name="Brainstorming" />
        <x-button.menu-item name="Wireframes" />
        <x-button.menu-item name="Workflow" />
        <x-button.menu-item name="Minimal Viable Product" />
        <x-button.menu-item name="Payment Integration" />
        <x-button.menu-item name="Email Notifications" />
        <x-button.menu-item name="Marketing" /> --}}
    </div>

</div>
