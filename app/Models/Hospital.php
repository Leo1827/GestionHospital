<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hospital extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];
    protected $table = 'hospitales';
    protected $hidden = ['created_at', 'updated_at'];

    public function gestiones() {
        return $this->hasMany(Gestion::class, 'id');
    }
}
