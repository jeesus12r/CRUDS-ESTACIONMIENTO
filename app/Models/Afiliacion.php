<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Afiliacion extends Model
{
    protected $table='afiliacion';
    protected $fillable=['nombree','tipo','fecha','estado'];
    protected $primarykey='id';
}
