<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gestion extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];
    protected $table = 'gestion';
    protected $hidden = ['created_at', 'updated_at'];


}
