<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicleEsp extends Model
{
    use HasFactory;


    protected $table = 'esp';
    public function Vehicle(){
        $this->hasOne(Vehicle::class);
    }
}
