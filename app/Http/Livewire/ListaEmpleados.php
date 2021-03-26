<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empleado;
use Illuminate\Support\Facades\Auth;

class ListaEmpleados extends Component
{
    public $elis;
    public $search;
    public $ordenanaBy = 'id';
    public $direction = 'asc';

    public function mount($id = null, $id_eliminar = null)
    {

        if (is_null($id) && is_null($id_eliminar)) {
            $this->elis = new Empleado();
        } elseif (is_null($id)) {
            $this->elis = Empleado::find($id_eliminar);
            $this->elis->delete();
            //Alerta Sweet
            session()->flash('btnEliminar', 'ok');
            return redirect(route('misempleados'));
        } else {
            $this->elis = Empleado::find($id);
        }
    }
    public function render()
    {
        $id_user = Auth::user()->id;
        $li = Empleado::where('user_id', '=', $id_user)
            ->where('id_rol', '=', 2)
            ->where('name', 'like', '%' . $this->search . '%')
            ->orderBy($this->ordenanaBy, $this->direction)
            ->get();
        return view('livewire.lista-empleados', compact('li'));
    }

    public function ordenar($ordenaBy)
    {
        if ($this->ordenanaBy == $ordenaBy) {
            if ($this->direction == 'asc') {
                $this->direction = "desc";
            } else {
                $this->direction = "asc";
            }
        } else {
            $this->ordenanaBy = $ordenaBy;
            $this->direction = "asc";
        }
    }
}
