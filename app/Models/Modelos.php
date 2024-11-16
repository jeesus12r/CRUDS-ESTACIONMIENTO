<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelos extends Model
{
    protected $table='modelitos';
     protected $fillable=['name','marca','fecha','tipo'];
     protected $primarykey='id';
}
