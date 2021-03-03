<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    use HasFactory;
    protected $table = 'companies';
    protected $fillable = [
        'user_id',
        'rfc_company',
        'name',
        'cp',
        'telefono',
    ];
}
