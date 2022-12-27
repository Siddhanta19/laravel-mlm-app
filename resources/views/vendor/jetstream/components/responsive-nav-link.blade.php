@props(['active'])

@php
    $classes = $active ?? false ? 'block pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-base font-medium text-gray-800 bg-secondary focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition' : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium hover:text-gray-800 hover:bg-secondary hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-secondary focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
