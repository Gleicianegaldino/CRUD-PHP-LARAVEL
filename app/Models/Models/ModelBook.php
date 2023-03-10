<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    use HasFactory;
    protected $table='book';

    public function relUsers(){
        return $this->hasOne('App\User', 'id', 'id_user');
    }
}
