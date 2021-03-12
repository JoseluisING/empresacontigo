<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ListaMailbox extends Component
{
    public function render()
    {
        $id_user = Auth::user()->id;
        $user_id = Auth::user()->user_id;
        //echo $li = notificaciones::all()->where('user_id', '=', $id_user)->join('users', 'users.id', '=', 'notificaciones.user_id')->get();
        $listaMail = DB::table('mailbox')
            ->join('users', 'users.id', '=', 'mailbox.boss_id')
            ->select(
                'users.name',
                'users.ap_p',
                'users.ap_m',
                'users.id_rol',
                'users.user_id',
                'mailbox.*'
            )
            ->where('mailbox.boss_id', '=', $id_user)
            ->where('mailbox.estado', '=', '0')
            ->orderBy('mailbox.id', 'DESC')
            ->get();
        return view('livewire.lista-mailbox', compact('listaMail'));
    }
}
