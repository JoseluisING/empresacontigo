<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
       Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'ap_p' => ['string', 'max:255'],
            'ap_m' => ['string', 'max:255'],
            'direccion' => ['required', 'string', 'max:255'],
            'discapacidad' => ['required', 'string', 'max:255'],
            'cedula' => ['required', 'string', 'max:255'],
            'rfc' => ['required', 'string', 'max:255'],
            'curp' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'ap_p' => $input['ap_p'],
            'ap_m' => $input['ap_m'],
            'direccion' => $input['direccion'],
            'discapacidad' => $input['discapacidad'],
            'cedula' => $input['cedula'],
            'rfc' => $input['rfc'],
            'curp' => $input['curp'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
