<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  
    protected $table='users';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable=[
    
         'nombre',
         'email',
         'password',
         'foto',
         'tipo_chofer',
         'tipo_estudiante',
         'tipo_administrador'
    ];

    protected $guarded=[

    ];

}
