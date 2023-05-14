<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register1') }}">
            @csrf

            <div>
                <x-label for="first_name" value="{{ __('First Name') }}" />
                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-label for="last_name" value="{{ __('Last Name') }}" />
                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="gender" value="{{ __('Gender') }}" />
                <select name="gender" id="gender" class="block mt-1 w-full">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="account_type" value="{{ __('Account Type') }}" />
                <select name="account_type" id="account_type" class="block mt-1 w-full" onchange="toggleFields()">
                    <option value="player">Player User</option>
                    <option value="coach">Coach User</option>
                </select>
            </div>

            <div id="player_fields" style="display: none">
                <div class="mt-4">
                    <x-label for="height" value="{{ __('Height') }}" />
                    <x-input id="height" class="block mt-1 w-full" type="number" name="height" :value="old('height')"   />
                </div>

                <div class="mt-4">
                    <x-label for="weight" value="{{ __('Weight') }}" />
                    <x-input id="weight" class="block mt-1 w-full" type="number" name="weight" :value="old('weight')"  />
                </div>
            </div>

            <div id="coach_fields" style="display: none">
                <div class="mt-4">
                    <x-label for="certificate" value="{{ __('Certificate') }}" />
                    <x-input id="certificate" class="block mt-1 w-full" type="text" name="certificate" :value="old('certificate')"   />
                </div>

                <div class="mt-4">
                    <x-label for="experience" value="{{ __('Experience') }}" />
                    <x-input id="experience" class="block mt-1 w-full" type="text" name="experience" :value="old('experience')"   />
                </div>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'">'.__('Terms of Service').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

<script>
    function toggleFields() {
        var accountType = document.getElementById("account_type").value;

        if (accountType === "player") {
            document.getElementById("player_fields").style.display = "block";
            document.getElementById("coach_fields").style.display = "none";
        } else if (accountType === "coach") {
            document.getElementById("player_fields").style.display = "none";
            document.getElementById("coach_fields").style.display = "block";
        } else {
            document.getElementById("player_fields").style.display = "none";
            document.getElementById("coach_fields").style.display = "none";
        }
    }

    toggleFields();
</script>