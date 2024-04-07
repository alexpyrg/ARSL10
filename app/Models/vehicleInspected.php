<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicleInspected extends Model
{
    use HasFactory;
    protected $table = "vehicleInspected";


    // public function Vehicle(){
    //     $this->hasOne(Vehicle::class);
    // }
}
