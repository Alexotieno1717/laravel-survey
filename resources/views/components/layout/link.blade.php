<li>
    <a
        {{ $attributes->merge(['class' => 'flex items-center gap-2.5 px-2 py-2 rounded font-semibold duration-300 ease-in-out text-gray-500 hover:bg-primary hover:text-white']) }}
    >
        {{ $slot }}
    </a>
</li>
