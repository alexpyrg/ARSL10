<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicleLdw extends Model
{
    use HasFactory;


    protected $table = 'ldw';
    public function Vehicle(){
        $this->hasOne(Vehicle::class);
    }
}
