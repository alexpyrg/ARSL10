<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicleManufacturer extends Model
{
    use HasFactory;
    protected $table = 'vehicleManufacturer';
    protected $primaryKey = 'id';
    // public function Vehicle(){
    //     $this->hasOne(Vehicle::class);
    // }
}
