<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conocimientos extends Model
{
    public function personales()
    {
        return $this->belongsTo(Personales::class);
    }
}
