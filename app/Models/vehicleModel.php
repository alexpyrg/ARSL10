<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicleModel extends Model
{
    use HasFactory;
    protected $table = 'vehicleModel';

    // public function Vehicle(){
    //     $this->hasOne(Vehicle::class);
    // }
}
