<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Spatie\Permission\Models\Role;

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
            'name' => ['required','regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)', 'string'],
            'ap_p' => ['required','regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)', 'string'],
            'ap_m' => ['required','regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)', 'string'],
            'cedula' => ['required', 'string', 'max:8', 'min:7', 'unique:users'],
            'rfc' => ['required', 'string', 'max:13', 'min:10', 'unique:users'],
            'curp' => ['required', 'string', 'max:18', 'min:18', 'regex:/^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/', 'unique:users'],
            'fecha_nacimiento' => ['string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

         return User::create([
            'name' => $input['name'],
            'ap_p' => $input['ap_p'],
            'ap_m' => $input['ap_m'],
            'cedula' => $input['cedula'],
            'rfc' => $input['rfc'],
            'curp' => $input['curp'],
            'fecha_nacimiento' => $input['fecha_nacimiento'],
            'email' => $input['email'],
            'id_rol'=> "1",
            'password' => Hash::make($input['password']),
        ]);
    }
}
