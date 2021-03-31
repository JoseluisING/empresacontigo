<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ListaMailbox extends Component
{
    public $search;
    public $ordenanaBy = 'mailbox.id';
    public $direction = 'asc';

    public function render()
    {
        $id_user = Auth::user()->id;

        $listaMail = DB::table('mailbox')
            ->join('users', 'users.id', '=', 'mailbox.user_id')
            ->select(
                'users.name',
                'users.ap_p',
                'users.ap_m',
                'users.user_id',
                'mailbox.*',

            )
            ->where('mailbox.boss_id', '=', $id_user)
            ->where('tema', 'like', '%' . $this->search . '%')
            ->orderBy($this->ordenanaBy, $this->direction)
            ->get();
        return view('livewire.lista-mailbox', compact('listaMail'));
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
