<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class streetConstructionZone extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'streetConstructionZone';

    public function Street(){
        $this->hasMany(Street::class);
    }
}
