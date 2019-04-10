<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
	//campos que se van a registrar
    protected $filable = ['nombre', 'descripcion', 'creditos'];

	//nombre de la tabla
    protected $table = 'materias';

    //restringir timestamps
    public $timestamps = false;
}
