<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicleCdc3 extends Model
{
    use HasFactory;

    protected $table = 'cdc3';
    public function Vehicle(){
        $this->hasOne(Vehicle::class);
    }
}
