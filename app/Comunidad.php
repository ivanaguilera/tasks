<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comunidad extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comunidades';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'direccion', 'comuna','ciudad','telefono','web','email','administracion_id',
    ];
    /**
     * una Comunidad tiene una administracion
     */
    public function administracion()
    {
        return $this->belongsTo('App\Administracion');
    }

}
