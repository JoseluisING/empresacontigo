<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'ap_p',
        'ap_m',
        //'direccion',
        'cedula',
        'rfc',
        'curp',
        'fecha_nacimiento',
        'email',
        'id_rol',
        'user_id',
        'password',
    ];

}
