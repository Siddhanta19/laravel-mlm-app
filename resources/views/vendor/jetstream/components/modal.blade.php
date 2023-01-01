@props(['id', 'maxWidth'])

@php
    $id = $id ?? md5($attributes->wire('model'));
    
    $maxWidth = [
        'sm' => 'sm:max-w-sm',
        'md' => 'sm:max-w-md',
        'lg' => 'sm:max-w-lg',
        'xl' => 'sm:max-w-xl',
        '2xl' => 'sm:max-w-2xl',
    ][$maxWidth ?? '2xl'];
@endphp

<div class="jetstream-modal fixed inset-0 z-50 overflow-y-auto px-4 py-6 sm:px-0" id="{{ $id }}"
    style="display: none;" x-data="{ show: @entangle($attributes->wire('model')).defer }" x-on:close.stop="show = false" x-on:keydown.escape.window="show = false"
    x-show="show">
    <div class="fixed inset-0 transform transition-all" x-show="show" x-on:click="show = false"
        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div class="{{ $maxWidth }} mb-6 transform overflow-hidden rounded-lg bg-black shadow-xl transition-all sm:mx-auto sm:w-full"
        x-show="show" x-trap.inert.noscroll="show" x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
        {{ $slot }}
    </div>
</div>
