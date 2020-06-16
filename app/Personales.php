<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Model;


class Personales extends Model
{
    use Sluggable;

    protected $fillable = [
        'id','user_id','nombres','apellido_paterno','apellido_materno','edad','sexo','departamento','provincia','distrito','fecha_nacimiento','estado_civil','nacionalidad','tipo_documento','nro_documento','ruc','tipo_direccion','direccion','telefono','celular','correo_electronico','colegio','nro_registro',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
