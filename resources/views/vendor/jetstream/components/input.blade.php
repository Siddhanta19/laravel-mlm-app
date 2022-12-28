@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'input input-bordered focus:outline-none border-2 focus:border-primary text-xl',
]) !!}>
