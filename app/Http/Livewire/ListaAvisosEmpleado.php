<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ListaAvisosEmpleado extends Component
{
    public function render()
    {
        $user_id = Auth::user()->user_id;
        $listaE = DB::table('notifications')
            ->join('users', 'users.id', '=', 'notifications.user_id')
            ->select(
                'users.name',
                'users.ap_p',
                'users.ap_m',
                'users.id_rol',
                'users.user_id',
                'users.profile_photo_path',
                'notifications.*'
            )
            ->where('notifications.reply', '=', '0')
            ->where('notifications.user_id', '=', $user_id)
            ->orderBy('notifications.id', 'DESC')
            ->get();
        return view('livewire.lista-avisos-empleado', compact('listaE'));
    }
}
