<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class streetCycleFacility extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'streetCycleFacility';
    public function Street(){
        $this->hasMany(Street::class);
    }
}
