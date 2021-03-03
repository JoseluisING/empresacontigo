<?php

namespace App\Http\Livewire;

use App\Models\companies;
use Livewire\Component;
use App\Models\Empleado;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ListaEmpleados extends Component
{

    public function render()
    {
        $id_user= Auth::user()->id;
        $li = Empleado::all()->where('user_id',$id_user)->where('id_rol',2);
        return view('livewire.lista-empleados', compact('li'));
    }
}
