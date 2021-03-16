<?php

namespace App\Http\Livewire;

use App\Models\notificaciones;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;


class Avisos extends Component
{
    use AuthorizesRequests;
    public  $informacionC;
    public $id_aviso;
    protected $rules = [
        'informacionC.tema' => 'required|min:2',
        'informacionC.comentario' => 'required|min:2',
    ];

    public function mount($id = null, $id_eliminar = null)
    {
        if (is_null($id) && is_null($id_eliminar)) {
            $this->informacionC = new notificaciones();
        } elseif (is_null($id)) {
            $this->informacionC = notificaciones::find($id_eliminar);
            $this->informacionC->delete();
            session()->flash('btnEliminar', 'ok');
            return redirect(route('listanNotificacion'));
        } else {
            $this->informacionC = notificaciones::find($id);
        }
    }


    public function render()
    {
        return view('livewire.avisos');
    }
    public function save()
    {
        $this->validate();
        //$this->authorize('update', $this->informacionC);
        $this->informacionC->user_id = Auth::user()->id;
        $this->informacionC->reply = '0';
        $this->informacionC->fecha = now();
        $this->informacionC->hora = now();
        $this->informacionC->save();
        session()->flash('btnCrear', 'ok');
        return redirect(route('listanNotificacion'));
    }
}
