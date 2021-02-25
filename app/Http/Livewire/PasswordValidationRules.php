<?php

namespace App\Http\Livewire;

use Laravel\Fortify\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array
     */
    protected function passwordRules()
    {
        return ['required', 'string', new Password, 'confirmed'];

        (new Password)->length(8);

        (new Password)->requireNumeric();

        (new Password)->requireSpecialCharacter();
    }
}
