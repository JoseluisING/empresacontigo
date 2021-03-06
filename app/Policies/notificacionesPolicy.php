<?php

namespace App\Policies;

use App\Models\User;
use App\Models\notificaciones;
use Illuminate\Auth\Access\HandlesAuthorization;

class notificacionesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\notificaciones  $notificaciones
     * @return mixed
     */
    public function view(User $user, notificaciones $notificaciones)
    {
        if($user->id == $notificaciones->user_id){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\notificaciones  $notificaciones
     * @return mixed
     */
    public function update(User $user, notificaciones $notificaciones)
    {
       // if($user->id == $notificaciones->user_id){
          //  return true;
        //}else{
            return false;
        //}
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\notificaciones  $notificaciones
     * @return mixed
     */
    public function delete(User $user, notificaciones $notificaciones)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\notificaciones  $notificaciones
     * @return mixed
     */
    public function restore(User $user, notificaciones $notificaciones)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\notificaciones  $notificaciones
     * @return mixed
     */
    public function forceDelete(User $user, notificaciones $notificaciones)
    {
        //
    }
}
