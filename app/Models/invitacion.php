<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invitacion extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'invitaciones';
    public $timestamps = false;
}
