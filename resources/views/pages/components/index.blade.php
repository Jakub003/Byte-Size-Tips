<x-template.guest>
    <x-template.article>
        <x-slot name="sidebar">
            @include('pages.components.sidebar')
        </x-slot>

        <x-slot name="content">
            <div>
                Components
            </div>

        </x-slot>

        <x-slot name="navigation">
            <x-button.page-item />
            <x-button.page-item />
            <x-button.page-item />
            <x-button.page-item />
            <x-button.page-item />
        </x-slot>
    </x-template.article>
</x-template.guest>
