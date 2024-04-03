<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicleCss extends Model
{
    use HasFactory;


    protected $table = 'css';
    public function Vehicle(){
        $this->hasOne(Vehicle::class);
    }
}
