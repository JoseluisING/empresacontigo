<?php

namespace App\Http\Livewire;

use App\Models\notificaciones;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\DB;


class EspecificAvisos extends Component
{
    public $li, $informacionC;


    public function render()
    {
        $notify_id = request()->input('txtIdNotificacion');
        $this->li = DB::table('notifications')
            ->join('users', 'users.id', '=', 'notifications.user_id')
            ->select(
                'users.name',
                'users.ap_p',
                'users.ap_m',
                'users.id_rol',
                'users.profile_photo_path',
                'users.email',
                'notifications.*'
            )
            ->where('notifications.id', '=', $notify_id)
            ->orderBy('notifications.id', 'DESC')
            ->get();

        $this->informacionC = DB::table('notifications')
            ->join('users', 'users.id', '=', 'notifications.user_id')
            ->select(
                'users.name',
                'users.ap_p',
                'users.ap_m',
                'users.id_rol',
                'users.profile_photo_path',
                'users.email',
                'notifications.*'
            )
            ->where('notifications.reply', '=', $notify_id)
            ->orderBy('notifications.id', 'DESC')
            ->get();
        return view('livewire.especific-avisos');
    }
}
