<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ListaAvisosAdmin extends Component
{
    public $search;
    public $ordenanaBy = 'id';
    public $direction = 'desc';

    public function render()
    {
        $id_user = Auth::user()->id;
        $user_id = Auth::user()->user_id;
        //echo $li = notificaciones::all()->where('user_id', '=', $id_user)->join('users', 'users.id', '=', 'notificaciones.user_id')->get();
        $listaAdmin = DB::table('notifications')
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
            ->where('notifications.user_id', '=', $id_user)
            ->where('notifications.reply', '=', '0')
            ->where('tema', 'like', '%' . $this->search . '%')
            ->Orwhere('notifications.user_id', '=', $user_id)
            ->orderBy($this->ordenanaBy, $this->direction)
            ->get();

        return view('livewire.lista-avisos-admin', compact('listaAdmin'));
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
