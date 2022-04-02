<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    protected $table = 'floors';

    public function areas()
    {
        return $this->belongsToMany(Area::class);
    }
    public function mall()
    {
        $this->belongsTo(Malls::class);
    }
    public function places()
    {
        return $this->hasMany(Place::class);
    }
}
