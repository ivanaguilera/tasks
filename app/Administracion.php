<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administracion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'administraciones';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'rut','dv','email','telefono',
    ];

    /**
     * una Administracion administra mas de una Comunidad
     */
    public function comunidades()
    {
        return $this->hasMany('App\Comunidad');
    }

}
