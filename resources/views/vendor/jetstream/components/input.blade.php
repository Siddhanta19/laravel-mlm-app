@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} autocomplete="false" {!! $attributes->merge([
    'class' => 'input input-bordered focus:outline-none border-2 focus:border-primary text-xl',
]) !!}>
