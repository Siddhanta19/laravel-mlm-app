<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Activation Info') }}
        </h2>
    </x-slot>


    <div class="overflow-x-auto" style="margin: 11rem 0;">
        <div class="{{ $class }} mx-10 rounded-xl bg-slate-700 p-5 text-center md:mx-20"> {!! $message !!}
        </div>
    </div>
</x-app-layout>
