@props([
    'name' => 'Section Item',
    'url' => '#section-item',
])
<a href="{{ $url }}" class="text-sm text-slate-400  hover:text-slate-700 hover:font-bold font-medium">
    {{ $name }}
</a>
