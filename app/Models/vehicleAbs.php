<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicleAbs extends Model
{
    use HasFactory;
    protected $table = 'abs';
    public function Vehicle(){
        $this->hasOne(Vehicle::class);
    }
}
