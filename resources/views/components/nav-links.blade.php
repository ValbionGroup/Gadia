<li class="relative px-6 py-3">
    @if (Request::routeIs($attributes['route']))
    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
    @endif
    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ Request::routeIs($attributes['route']) ? 'dark:text-gray-100 text-gray-800' : '' }}"
        href="{{ route($attributes['route']) }}">
        {{ $slot }}
    </a>
</li>
