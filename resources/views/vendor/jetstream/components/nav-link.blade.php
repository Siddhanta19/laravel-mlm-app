@props(['active'])

@php
    $classes = $active ?? false ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-xl font-medium leading-5 focus:outline-none focus:border-indigo-700 transition' : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-xl font-medium leading-5 hover:text-secondary hover:border-base-300 focus:outline-none transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
