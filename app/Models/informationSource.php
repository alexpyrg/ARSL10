<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informationSource extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'InformationSource';

    public function accident(){
        return $this->hasMany(Accident::class,'informationSource', 'id');
    }

    public function Street(){
        return $this->hasMany(Street::class,'informationSource', 'id');
    }
}
