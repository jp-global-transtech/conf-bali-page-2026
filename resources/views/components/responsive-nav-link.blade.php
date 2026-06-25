@props(['href', 'active = false'])

<a href="{{ $href }}"
    class="{{ $active ? 'bg-indigo-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium transition duration-150 ease-in-out focus:outline-none focus:bg-gray-700 focus:text-white {{ $active ? 'border-indigo-500' : 'border-transparent' }}">
    {{ $slot }}
</a>
