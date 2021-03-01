<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empleado;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ListaEmpleados extends Component
{

    public function render()
    {
       $rfc_c= Auth::user()->rfc_company;
        $li = Empleado::all()->where('rfc_company',$rfc_c)->where('id_rol',2);

        return view('livewire.lista-empleados', compact('li'));
    }
}
