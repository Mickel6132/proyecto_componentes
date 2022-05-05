<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
     public $timestamps=false;
    protected $table='ventas';
    protected $primaryKey='ven_id';
    protected $fillable=['ven_cantidad','ven_detalle','ven_fecha','ven_descuento','ven_precio'];
}
