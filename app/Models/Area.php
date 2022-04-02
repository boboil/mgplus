<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';

    public function floor()
    {
        return $this->belongsToMany(Floor::class);
    }
    public function places()
    {
        return $this->hasMany(Place::class);
    }
}
