<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empleado;
use Illuminate\Support\Facades\Hash;

class RegistrarEmpleado extends Component
{
	public $name, $ap_p, $ap_m, $email, $cedula, $rfc, $rfc_company, $curp, $fecha_nacimiento, $password;

	use PasswordValidationRules;

    public function render()
    {
        return view('livewire.registrar-empleado');
    }

    public function store()
    {
    	$this->validate(['name' => 'required']);

    	Empleado::create([
    	    'name' => $this->name,
    	    'ap_p' => $this->ap_p,
    	    'ap_m' => $this->ap_m,
    	    'email' => $this->email,
    	    'cedula' => $this->cedula,
    	    'rfc' => $this->rfc,
    	    'rfc_company' => $this->rfc_company,
    	    'curp' => $this->curp,
    	    'id_rol'=> 2,
    	    'fecha_nacimiento' => $this->fecha_nacimiento,
    	    'password' => Hash::make($this->password)
    	]);
    }
}
