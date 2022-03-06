@props([
    'question' => 'What is your question?',
])

<div x-data="{ show: false }" class="relative px-6 py-2 overflow-hidden text-white bg-purple-700 rounded-lg select-none">
    <h4 @click="show=!show"
        class="flex items-center justify-between py-4 text-base font-medium text-purple-100 cursor-pointer sm:text-lg hover:text-white">
        <span>{{ $question }}</span>
        <svg class="w-4 h-4 mr-1 transition-all duration-200 ease-out transform rotate-0"
            :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </h4>
    <div class="px-1 pt-0 mt-1 text-purple-200 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300"
        x-transition:enter-start="opacity-0 transform -translate-y-4"
        x-transition:enter-end="opacity-100 transform -translate-y-0"
        x-transition:leave="transition-all ease-out hidden duration-200"
        x-transition:leave-start="opacity-100 transform -translate-y-0"
        x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">
        {{ $slot }}
    </div>
</div>
