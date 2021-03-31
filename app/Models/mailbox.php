<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mailbox extends Model
{
    protected $table = 'mailbox';
    use HasFactory;
    protected $fillable=['boss_id','user_id','tema','sugerencias', 'estado'];
}
