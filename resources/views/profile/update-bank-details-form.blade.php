<x-jet-form-section submit="updateBankDetails">
    <x-slot name="title">
        {{ __('Update Bank Details') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Ensure that your bank details are correct to receive funds.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="bank_name" value="{{ __('Name of The Bank') }}" />
            <x-jet-input class="mt-1 block w-full" id="bank_name" type="text"
                wire:model.defer="state.bank_name" autocomplete="bank_name" />
            <x-jet-input-error class="mt-2" for="bank_name" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="ifsc_code" value="{{ __('IFSC Code') }}" />
            <x-jet-input class="mt-1 block w-full" id="ifsc_code" type="text" wire:model.defer="state.ifsc_code"
                autocomplete="ifsc_code" />
            <x-jet-input-error class="mt-2" for="ifsc_code" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="account_number" value="{{ __('Account Number') }}" />
            <x-jet-input class="mt-1 block w-full" id="account_number" type="text"
                wire:model.defer="state.account_number" autocomplete="account_number" />
            <x-jet-input-error class="mt-2" for="account_number" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>