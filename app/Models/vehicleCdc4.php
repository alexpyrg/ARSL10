<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicleCdc4 extends Model
{
    use HasFactory;


    protected $table = 'cdc4';
    public function Vehicle(){
        $this->hasOne(Vehicle::class);
    }
}
