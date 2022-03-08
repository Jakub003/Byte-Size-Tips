@props([
    'name' => 'Article',
    'url' => 'home',
])
<a {{ $attributes }} href="#"
    class="text-base  {{ Request::routeIs($url)? 'text-blue-500 font-bold': 'text-slate-500  hover:text-blue-500 hover:font-bold font-medium' }}">
    {{ $name }}
</a>
