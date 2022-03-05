<button @click="darkMode = !darkMode" type="button"
    class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 "
    role="switch" aria-checked="false" :class="darkMode === false ? ' bg-gray-200 ' : ' bg-indigo-600'">
    <span class="sr-only">Use setting</span>
    <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
    <span
        class="pointer-events-none relative inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"
        :class="darkMode === true ? ' translate-x-5 ' : ' translate-x-0 '">
        <!-- Enabled: "opacity-0 ease-out duration-100", Not Enabled: "opacity-100 ease-in duration-200" -->
        <span class="absolute inset-0 h-full w-full flex items-center justify-center transition-opacity"
            aria-hidden="true"
            :class="darkMode === true ? ' opacity-0 ease-out duration-100 ' : ' opacity-100 ease-in duration-200 '">
            <x-heroicon-s-sun class="h-3 w-3 text-slate-400" />
        </span>
        <!-- Enabled: "opacity-100 ease-in duration-200", Not Enabled: "opacity-0 ease-out duration-100" -->
        <span x-cloak class="absolute inset-0 h-full w-full flex items-center justify-center transition-opacity"
            aria-hidden="true"
            :class="darkMode === true ? ' opacity-100 ease-in duration-200 ' : ' opacity-0 ease-out duration-100 '">
            <x-heroicon-s-moon class="h-3 w-3 text-indigo-600" />
        </span>
    </span>
</button>
