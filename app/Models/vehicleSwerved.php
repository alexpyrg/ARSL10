<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicleSwerved extends Model
{
    use HasFactory;
    protected $table = "vehicleSwerved";

    // public function Vehicle(){
    //     $this->hasOne(Vehicle::class);
    // }
}
