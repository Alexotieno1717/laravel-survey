@props(['title'])

<li>
    <button
        @click="activeDropdown = activeDropdown === '{{ $title }}' ? null : '{{ $title }}'"
        class="w-full flex items-center justify-between px-2 py-2 rounded text-gray-500 hover:bg-primary hover:text-white">

        <span>{{ $title }}</span>

        <svg class="w-4 h-4"
             :class="activeDropdown === '{{ $title }}' ? 'rotate-180' : ''"
             fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.7a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"/>
        </svg>
    </button>

    <ul x-show="activeDropdown === '{{ $title }}'" class="pl-6 mt-2 text-gray-600 space-y-2">
        {{ $slot }}
    </ul>
</li>

