<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Malls extends Model
{
    protected $table = 'malls';

    public function places()
    {
        return $this->hasMany(Place::class);
    }
    public function floors()
    {
        return $this->hasMany(Floor::class);
    }
}
