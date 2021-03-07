@extends('templateGral')
<style type="text/css">
.header-area {
    background-color: #071427;
}

.mb-4 {
    margin-top: 500px;
}

</style>
<script>
function sololetras(e){
key = e.keyCode || e.which;
teclado = String.fromCharCode(key);
name = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJQLMNOPQRSTUVWXYZ";
especiales = "8-37-38-46";
teclado_especial=false;
for(var i in especiales){
if(key==especiales[i]){
teclado_especial=true
        }
    }
    if(name.indexOf(teclado)==-1 && !teclado_especial){
            return false;
    }
}
function solonumeros(e){
key = e.keyCode || e.which;
teclado = String.fromCharCode(key)
name = "0123456789";
especiales = "8-37-38-46";
teclado_especial=false;
for(var i in especiales){
if(key==especiales[i]){
teclado_especial=true
        }
    }
    if(name.indexOf(teclado)==-1 && !teclado_especial){
            return false;
    }
}

function limitar(e, contenido, caracteres)
        {
            var unicode=e.keyCode? e.keyCode : e.charCode;
 
            if(unicode==8 || unicode==46 || unicode==13 || unicode==9 || unicode==37 || unicode==39 || unicode==38 || unicode==40)
                return true;

            if(contenido.length>=caracteres)
                return false;
 
            return true;
        }
</script>
@section('content')
<br><br><br><br>
<x-guest-layout>
    <x-jet-authentication-card>
        <x-jet-validation-errors class="mb-4" />
        <div class="text-center font-semibold text-black">
                            <h1>¡Bienvenido! <br> Por favor registrate para poder inicia sesión.</h1>
                        </div>
                        <hr style="margin-top: 15px; margin-bottom: 15px; size: a5;">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="grid grid-cols-3 gap-4">
                <div class="...">
                    <div class="...">
                        <x-jet-label for="name" value="{{ __('Nombre') }}" />
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" onkeypress="return sololetras(event)" required autofocus autocomplete="name" />
                    </div>
                </div>
                <div class="...">
                    <div>
                        <x-jet-label for="ap_p" value="{{ __('Apellido Paterno') }}" />
                        <x-jet-input id="ap_p" class="block mt-1 w-full" type="text" name="ap_p" :value="old('ap_p')" onkeypress="return sololetras(event)" required autofocus autocomplete="ap_p" />
                    </div>
                </div>
                <div class="...">
                    <div>
                        <x-jet-label for="ap_m" value="{{ __('Apellido Materno') }}" />
                        <x-jet-input id="ap_m" class="block mt-1 w-full" type="text" name="ap_m" :value="old('ap_m')" onkeypress="return sololetras(event)" required autofocus autocomplete="ap_m" />
                    </div>
                </div>
                <div class="...">
                    <div>
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    </div>
                </div>
                <div class="...">
                    <div>
                        <x-jet-label for="cedula" value="{{ __('Cedula') }}" />
                        <x-jet-input id="cedula" class="block mt-1 w-full" type="text" name="cedula" :value="old('cedula')" onkeypress="return solonumeros(event)" onKeyUp="return limitar(event,this.value,8)" onKeyDown="return limitar(event,this.value,8)" required autofocus autocomplete="cedula" />
                    </div>
                </div>
                <div class="...">
                    <div>
                        <x-jet-label for="rfc" value="{{ __('RFC') }}" />
                        <x-jet-input id="rfc" class="block mt-1 w-full" type="text" name="rfc" :value="old('rfc')" onKeyUp="return limitar(event,this.value,10)" onKeyDown="return limitar(event,this.value,13)" required autofocus autocomplete="rfc" />
                    </div>
                </div>
                <div class="...">
                    <div>
                        <x-jet-label for="curp" value="{{ __('Curp') }}" />
                        <x-jet-input id="curp" class="block mt-1 w-full" type="text" name="curp" :value="old('curp')" onKeyUp="return limitar(event,this.value,18)" onKeyDown="return limitar(event,this.value,18)" required autofocus autocomplete="curp" />
                    </div>
                </div>
                <div class="...">
                    <div>
                        <x-jet-label for="fecha_nacimiento" value="{{ __('Fecha de nacimiento') }}" />
                        <x-jet-input id="fecha_nacimiento" class="block mt-1 w-full" type="date" name="fecha_nacimiento" :value="old('fecha_nacimiento')" max="2003-12-31" required autofocus autocomplete="fecha_nacimiento" />
                    </div>
                </div>
                <div class="...">
                    <div>
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>
                </div>
                <div class="...">
                    <div>
                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
                </div>
                <div class="col-span-3 ...">@if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms" />
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
                </div>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
@endsection
