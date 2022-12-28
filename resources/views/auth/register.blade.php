<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h2 class="card-title mb-8 justify-center text-3xl">Register & Earn</h2>

            <div>
                {{-- <x-jet-label for="name" value="{{ __('Name') }}" /> --}}
                <x-jet-input class="block w-full" id="name" name="name" type="text" :value="old('name')"
                    placeholder="{{ __('Name') }}" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                {{-- <x-jet-label for="email" value="{{ __('Email') }}" /> --}}
                <x-jet-input class="block w-full" id="email" name="email" type="email" :value="old('email')"
                    placeholder="{{ __('Email') }}" required />
            </div>

            <div class="mt-4">
                {{-- <x-jet-label for="password" value="{{ __('Password') }}" /> --}}
                <x-jet-input class="block w-full" id="password" name="password" type="password" required
                    placeholder="{{ __('Password') }}" autocomplete="new-password" />

            </div>

            <div class="mt-4">
                {{-- <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" /> --}}
                <x-jet-input class="block w-full" id="password_confirmation" name="password_confirmation"
                    type="password" required placeholder="{{ __('Confirm Password') }}" autocomplete="new-password" />
            </div>

            <div class="mt-4">
                {{-- <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" /> --}}
                <x-jet-input class="block w-full" id="my referrer's code" name="my_referrer's_code" type="text"
                    required placeholder="{{ __('Refer Code') }}" :value="old('my_referrer\'s_code')" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox id="terms" name="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' =>
                                        '<a target="_blank" href="' .
                                        route('terms.show') .
                                        '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                        __('Terms of Service') .
                                        '</a>',
                                    'privacy_policy' =>
                                        '<a target="_blank" href="' .
                                        route('policy.show') .
                                        '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                        __('Privacy Policy') .
                                        '</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="mt-8 flex items-center justify-around">
                <a class="link text-xl text-primary underline-offset-2" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
