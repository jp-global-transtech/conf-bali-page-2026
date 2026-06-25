@props(['href', 'active = false'])

<a href="{{ $href }}"
    class="{{ $active ? 'bg-gray-900 text-white focus:text-white focus:bg-gray-900' : 'text-gray-300 hover:text-white hover:bg-gray-700 focus:text-white focus:bg-gray-700' }} px-3 py-2 rounded-md text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-900 focus:ring-white transition duration-150 ease-in-out">
    {{ $slot }}
</a>
