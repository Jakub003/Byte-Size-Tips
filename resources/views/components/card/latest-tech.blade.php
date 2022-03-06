@props([
    'name' => 'Zapier',
    'description' => 'Connnect 1000+ Apps',
])
<a {{ $attributes }} href="#"
    class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100 hover:bg-slate-50">
    <div class="w-16 h-auto">
        {{ $slot }}
    </div>
    <p class=" font-bold mt-4">{{ $name }}</p>
    <p class="mt-2 text-sm text-gray-500">{{ $description }}</p>
</a>
