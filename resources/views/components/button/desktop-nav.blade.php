@props([
    'name' => 'home',
])

<div class="h-full">
    <a href="{{ route($name) }}"
        class=" h-full inline-flex items-center px-1 pt-1 border-b-4 text-sm font-medium capitalize {{ Request::routeIs($name)? 'border-indigo-500 text-gray-900': 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }}">
        {{ $name }}
    </a>
</div>
