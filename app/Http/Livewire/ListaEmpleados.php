<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empleado;

class ListaEmpleados extends Component
{
    public function render()
    {
        $li = Empleado::all();

        return view('livewire.lista-empleados', compact('li'));
    }
}
