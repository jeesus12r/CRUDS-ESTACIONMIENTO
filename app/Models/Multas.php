<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Multas extends Model
{
    protected $table='multas';
     protected $fillable=['name','tipo','fecha','hora','metodo','estado','empleado'];
     protected $primarykey='id';
}

