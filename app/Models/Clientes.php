<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table='clientes';
    protected $fillable=['name','email','direccion','telefono','fecha'];
    protected $primarykey='id';
}
