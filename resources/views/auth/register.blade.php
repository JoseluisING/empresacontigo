<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Nombre') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="ap_p" value="{{ __('Apellido Paterno') }}" />
                <x-jet-input id="ap_p" class="block mt-1 w-full" type="text" name="ap_p" :value="old('ap_p')" required autofocus autocomplete="ap_p" />
            </div>

            <div>
                <x-jet-label for="ap_m" value="{{ __('Apellido Materno') }}" />
                <x-jet-input id="ap_m" class="block mt-1 w-full" type="text" name="ap_m" :value="old('ap_m')" required autofocus autocomplete="ap_m" />
            </div>

            <div>
                <x-jet-label for="direccion" value="{{ __('Direccion') }}" />
                <x-jet-input id="direccion" class="block mt-1 w-full" type="text" name="direccion" :value="old('direccion')" required autofocus autocomplete="direccion" />
            </div>

            <div>
                <x-jet-label for="discapacidad" value="{{ __('Discapacidad') }}" />
                <x-jet-input id="discapacidad" class="block mt-1 w-full" type="text" name="discapacidad" :value="old('discapacidad')" required autofocus autocomplete="discapacidad" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div>
                <x-jet-label for="cedula" value="{{ __('Cedula') }}" />
                <x-jet-input id="cedula" class="block mt-1 w-full" type="text" name="cedula" :value="old('cedula')" required autofocus autocomplete="cedula" />
            </div>

            <div>
                <x-jet-label for="rfc" value="{{ __('RFC') }}" />
                <x-jet-input id="rfc" class="block mt-1 w-full" type="text" name="rfc" :value="old('rfc')" required autofocus autocomplete="rfc" />
            </div>

            <div>
                <x-jet-label for="curp" value="{{ __('Curp') }}" />
                <x-jet-input id="curp" class="block mt-1 w-full" type="text" name="curp" :value="old('curp')" required autofocus autocomplete="curp" />
            </div>

            <div>
                <x-jet-label for="fecha" value="{{ __('Fecha de nacimiento') }}" />
                <x-jet-input id="fecha" class="block mt-1 w-full" type="date" name="fecha" :value="old('fecha')" required autofocus autocomplete="fecha" />
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
