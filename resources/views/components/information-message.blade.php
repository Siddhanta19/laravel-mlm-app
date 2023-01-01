<div class="info space-y-1">


    {{ $button }}
    {{ $toggle_modal }}


    <x-modal-window>

        <x-slot name="title">
            {{ $title }}
        </x-slot>

        <x-slot name="content">
            {{ $content }}
        </x-slot>

        <x-slot name="action">
            {{ $action }}
        </x-slot>


    </x-modal-window>



</div>
