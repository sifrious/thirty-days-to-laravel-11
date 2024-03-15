@props(['active' => false])

<a {{ $attributes }}
    class="{{ $active ? 'bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}}"
    aria-current="page">
        {{ $slot }}
</a>

<!-- introduce a new prop called type which determines weather an anchor link or a button -->