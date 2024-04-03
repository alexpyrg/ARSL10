<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicleAcs extends Model
{
    use HasFactory;

    protected $table = 'acs';
    public function Vehicle(){
        $this->hasOne(Vehicle::class);
    }

}
