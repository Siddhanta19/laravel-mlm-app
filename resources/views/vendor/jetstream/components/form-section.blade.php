@props(['submit'])

<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-3 md:gap-6']) }}>
    <x-jet-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-jet-section-title>

    <div class="mt-5 md:col-span-2 md:mt-0">
        <form wire:submit.prevent="{{ $submit }}">
            <div
                class="{{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }} px-4 py-5 shadow sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    {{ $form }}
                </div>
            </div>

            @if (isset($actions))
                <div
                    class="flex items-center justify-end px-4 py-3 text-right shadow sm:rounded-bl-md sm:rounded-br-md sm:px-6">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
