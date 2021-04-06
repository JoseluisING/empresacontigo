<?php

namespace App\Http\Livewire;

use App\Models\mailbox;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateMailbox extends Component
{
    public $open = false;

    public $tema, $sugerencias, $estado;
    public $user_id;

    protected $listeners = ['refresca' => 'render'];

    protected $rules = [
        'tema' => 'required|max:100',
        'sugerencias' => 'required|min:10',
        'estado' => 'required',
    ];


    public function save()
    {
        $this->validate();

        $boss_id = Auth::user()->user_id;
        $id = Auth::user()->id;
        mailbox::create([
            'boss_id' => $boss_id,
            'tema' => $this->tema,
            'sugerencias' => $this->sugerencias,
            'user_id' =>  $id,
            'estado' => $this->estado,

        ]);

        $this->reset(['open', 'tema', 'sugerencias', 'estado']);
        $this->emitTo('registra-mailbox', 'refresca');
        $this->emit('alert', 'El post se genero satisfactoriamente');
    }
    public function render()
    {
        return view('livewire.create-mailbox');
    }
}
