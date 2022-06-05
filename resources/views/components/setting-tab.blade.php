<button onclick="openTab(event, '{{ $attributes['tab'] }}')" {{ $attributes->merge(['class' => "transition text-sm uppercase font-light flex-1 tablinks inline-block hover:text-purple-500 dark:hover:text-purple-400 focus:outline-none py-2 px-4"]) }}>
    {{ $slot }}
</button>
