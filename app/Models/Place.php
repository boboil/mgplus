<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = 'places';

    public function mall()
    {
        return $this->belongsTo(Malls::class);
    }
    public function floor()
    {
        return $this->belongsTo(Floor::class);
    }
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
