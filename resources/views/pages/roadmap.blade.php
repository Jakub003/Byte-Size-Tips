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
            <div>
                Build a Sass App from A to Z
            </div>

        </x-slot>


    </x-template.article>
</x-template.guest>
