<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Add Funds') }}
        </h2>
    </x-slot>

    @livewire('wallet.add-funds')

</x-app-layout>
