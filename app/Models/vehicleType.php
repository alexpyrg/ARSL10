<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicleType extends Model
{
    use HasFactory;
    protected $table = "vehicleType";

    // public function Vehicle(){
    //     $this->hasOne(Vehicle::class);
    // }
}
