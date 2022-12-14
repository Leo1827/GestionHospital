<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paciente extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];
    protected $table = 'pacientes';
    protected $hidden = ['created_at', 'updated_at'];
}
