<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empleado;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegistrarEmpleado extends Component
{
	public $name, $ap_p, $ap_m, $email, $cedula, $rfc, $curp, $fecha_nacimiento, $password;

	use PasswordValidationRules;

    public function render()
    {
        return view('livewire.registrar-empleado');
    }

    public function store()
    {
    	$this->validate(['name' => 'required']);

		$rfc_c= Auth::user()->rfc_company;
    	Empleado::create([
    	    'name' => $this->name,
    	    'ap_p' => $this->ap_p,
    	    'ap_m' => $this->ap_m,
    	    'email' => $this->email,
    	    'cedula' => $this->cedula,
    	    'rfc' => $this->rfc,
    	    'rfc_company' => $rfc_c,
    	    'curp' => $this->curp,
    	    'id_rol'=> 2,
    	    'fecha_nacimiento' => $this->fecha_nacimiento,
    	    'password' => Hash::make($this->password)
    	]);
    }
}
