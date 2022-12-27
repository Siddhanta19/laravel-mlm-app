<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="card-title mb-8 justify-center text-2xl">Login</h2>

            <div>
                {{-- <x-jet-label for="email" value="{{ __('Email') }}" /> --}}
                <x-jet-input class="mt-1 block w-full" id="email" name="email" type="email" :value="old('email')"
                    placeholder="{{ __('Email ID') }}" required autofocus />
            </div>

            <div class="mt-4">
                {{-- <x-jet-label for="password" value="{{ __('Password') }}" /> --}}
                <x-jet-input class="mt-1 block w-full" id="password" name="password" type="password" required
                    placeholder="{{ __('Password') }}" autocomplete="current-password" />
            </div>

            <div class="mt-8 ml-2 block">
                <label class="flex items-center" for="remember_me">
                    <x-jet-checkbox class="no-animation" id="remember_me" name="remember" />
                    <span class="label-text ml-2">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="mt-8 flex items-center justify-around">
                @if (Route::has('password.request'))
                    <a class="link text-primary underline-offset-2" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
