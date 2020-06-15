<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiencias extends Model
{
    public function personales()
    {
        return $this->belongsTo(Personales::class);
    }
}
