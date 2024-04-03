<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accidentRelatedFactors extends Model
{
    use HasFactory;

    protected $table = 'accidentRelatedFactors';

    public function accident(){
        return  $this->hasMany(Accident::class, 'accidentRelatedFactors');
    }
}
