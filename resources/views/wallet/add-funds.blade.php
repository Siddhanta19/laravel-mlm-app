<div class="m-10 grid grid-cols-1 place-items-center gap-5 md:grid-cols-2 lg:gap-20">
    <div class="card items-center space-y-5 bg-zinc-800 shadow-xl">
        <h1 class="card-title mt-5 text-2xl">1. Scan The QR Code</h1>
        <figure class="px-10"><img class="xl:max-h-lg rounded-xl xl:max-w-lg" src={{ asset('/images/qr.png') }}
                alt="Shoes" /></figure>
        <div class="card-body pt-0">
            <h2 class="text-xl text-primary-content">Use Your Favorite UPI App to Scan this QR Code</h2>
        </div>
    </div>


    <div class="card items-center space-y-5 bg-zinc-800 shadow-xl">
        <h1 class="card-title mt-5 text-2xl">2. Enter an Amount</h1>
        <figure class="px-10"><img class="xl:max-h-lg rounded-xl xl:max-w-lg" src={{ asset('/images/qr.png') }}
                alt="Shoes" /></figure>
        <div class="card-body pt-0">
            <h2 class="text-xl text-primary-content">We recommend you to pay us a minimum amount of <span
                    class="font-bold">₹100</span></h2>
        </div>
    </div>

    <div class="card items-center space-y-5 bg-zinc-800 shadow-xl">
        <h1 class="card-title mt-5 text-2xl">3. Note The UTR Number.</h1>
        <figure class="px-10"><img class="xl:max-h-lg rounded-xl xl:max-w-lg" src={{ asset('/images/qr.png') }}
                alt="Shoes" /></figure>
        <div class="card-body pt-0">
            <h2 class="text-xl text-primary-content">Copy the payment UTR No. & Submit it to form.</h2>
        </div>
    </div>

    <div class="card block items-center space-y-5 bg-zinc-800 shadow-xl">
        <h1 class="card-title mt-5 items-center justify-center text-center text-2xl">4. Submit The Form</h1>
        <x-jet-validation-errors class="mb-4" />
        <form class="mx-10" method="POST" wire:submit.prevent="saveFormDetails">
            @csrf
            <div class="mt-4">
                <x-jet-input class="block w-full py-5 pl-4" id="amount" name="amount" type="text"
                    :value="old('amount')" wire:model.defer="amount" placeholder="{{ __('Amount') }}" required
                    autofocus />
            </div>
            <div class="mt-4">
                <x-jet-input class="block w-full py-5 pl-4" id="UTR" name="UTR" type="text"
                    :value="old('UTR')" wire:model.defer="utr_number" placeholder="{{ __('UTR') }}" required
                    autofocus />
            </div>

            <div class="mt-4">

                <x-jet-input class="block w-full py-5 pl-4" id="password" name="password" type="password" required
                    wire:model.defer="password" placeholder="{{ __('Password') }}" autocomplete="new-password" />

            </div>

            <div class="mt-4">

                <x-jet-input class="block w-full py-5 pl-4" id="password_confirmation" name="password_confirmation"
                    type="password" wire:model.defer="confirm_password" required
                    placeholder="{{ __('Confirm Password') }}" autocomplete="new-password" />
            </div>

            <div class="mt-8 flex items-center justify-around">
                <x-jet-button class="ml-4">
                    {{ __('Submit') }}
                </x-jet-button>
            </div>

            <x-jet-action-message class="mt-5 text-center" on="saved">
                {{ __('Your Payment Details Have Been Saved.') }}
            </x-jet-action-message>
        </form>

        <div class="card-body pt-0">
            <h2 class="text-xl text-primary-content">Just Submit The Form by filling up the details and we will credit
                your wallet as soon as possible.</h2>
        </div>
    </div>
</div>
