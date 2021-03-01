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
        'rfc_company',
        'curp',
        'fecha_nacimiento',
        'email',
        'id_rol',
        'password',
    ];

}
