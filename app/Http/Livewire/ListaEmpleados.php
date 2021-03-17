<?php

namespace App\Http\Livewire;

use App\Models\companies;
use Livewire\Component;
use App\Models\Empleado;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\WithPagination;

class ListaEmpleados extends Component
{
    
    use AuthorizesRequests;
    use WithPagination;
    public $elis;

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
        $id_user= Auth::user()->id;
        $li = Empleado::paginate(15)->where('user_id',$id_user)->where('id_rol',2);
        return view('livewire.lista-empleados', compact('li'));
    }
}
