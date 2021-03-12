<?php

namespace App\Http\Livewire;

use App\Models\notificaciones;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class GuardaAvisos extends Component
{

    public $informacionC;
    public function render()
    {
        $id_reply= request()->input('txtIdNotificacion');
        $this->informacionC->user_id = Auth::user()->id;
        $this->informacionC->reply = request()->input('txtIdNotificacion');
        $this->informacionC->comentario = request()->input('txtResponder');
        $this->informacionC->tema = 'Reply';
        $this->informacionC->fecha = now();
        $this->informacionC->hora = now();
        $this->informacionC->save();
        return view('livewire.guarda-avisos', compact('id_reply'));
    }
    public function mount()
    {
        $this->informacionC = new notificaciones();
    }
}
