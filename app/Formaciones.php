<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formaciones extends Model
{
    public function personales()
    {
        return $this->belongsTo(Personales::class);
    }
}
