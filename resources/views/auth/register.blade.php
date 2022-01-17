<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <strong class="reqForm" style="color:#FFFFFF">Registration Form</strong>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input id="name" class="block mt-1 w-full" type="hidden" name="status" :value="INACTIVE" required autofocus autocomplete="name" />
            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="tel" value="{{ __('Phone Number') }}" />
                <x-jet-input id="tel" class="block mt-1 w-full" type="number" name="tel" :value="old('tel')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="dept" value="{{ __('Department/Unit') }}" />
                <select id="dept" class="block mt-1 w-full form-control" type="dept" name="dept" :value="old('dept')" required>
                    <option value="" selected disabled>Department/Unit</option>
                    <option value="IT" class="select">IT</option>
                    <option value="TIC" class="select">TIC</option>
                    <option value="TARC" class="select">TARC</option>
                    <option value="TTR" class="select">TTR</option>
                    <option value="CS" class="select">CS</option>
                    <option value="HRFM" class="select">HRFM</option>
                    <option value="CP" class="select">CP</option>
                    <option value="DG" class="select">DG</option>
                    <option value="PROC" class="select">PROC</option>
                    <option value="LEGAL" class="select">LEGAL</option>
                    <option value="PR" class="select">PR</option>
                    <option value="SERVICOM" class="select">SERVICOM</option>
            </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
