<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\habitacion;

class Hotel extends Model
{
    protected $table='hoteles';
    public function Reservas(){
        return $this->hasMany(Reserva::class);
    }
}
