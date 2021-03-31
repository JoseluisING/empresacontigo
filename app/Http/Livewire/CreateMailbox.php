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

    public function save()
    {
        $boss_id=Auth::user()->user_id;
        $id = Auth::user()->id;
        mailbox::create([
            'boss_id'=>$boss_id,
            'tema' => $this->tema,
            'sugerencias' => $this->sugerencias,
            'user_id' =>  $id,
            'estado' => $this->estado,

        ]);
    }
    public function render()
    {
        return view('livewire.create-mailbox');
    }
}
