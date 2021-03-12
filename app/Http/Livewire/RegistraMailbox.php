<?php

namespace App\Http\Livewire;

use App\Models\mailbox;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class RegistraMailbox extends Component
{
    public $informacionC, $id_user, $boss_id,$li;

    protected $rules = [
        'informacionC.tema' => 'required|min:2',
        'informacionC.sugerencias' => 'required|min:2',
        //'informacionC.user_id' => 'required',
    ];

    public function mount()
    {


        $this->id_user = Auth::user()->id;
        $this->informacionC = new mailbox();
    }

    public function render()
    {
        return view('livewire.registra-mailbox');
    }

    public function save()
    {
        $this->validate();
        $this->informacionC->user_id = Auth::user()->id;
        $this->informacionC->boss_id = Auth::user()->user_id;
        $this->informacionC->estado = '0';
        $this->informacionC->save();
        return redirect('dashboard');
    }
}
