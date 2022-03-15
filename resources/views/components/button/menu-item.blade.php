@props([
    'name' => 'Article',
    'url' => 'home',
    'route' => 'cheat-sheet',
])
<a href="{{ route($route, $url) }}"
    class="capitalize {{ Request::is('*' . $url . '*')? 'text-blue-500 font-bold text-lg': 'text-slate-500  hover:text-blue-500 font-medium text-base' }}">
    {{ $name }}
</a>
