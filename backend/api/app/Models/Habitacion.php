<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Reserva;
use App\Models\Hotel;

class Habitacion extends Model
{
protected $table='habitaciones';
public function Reservas(){
    return $this->hasMany(Reserva::class);
}
}
