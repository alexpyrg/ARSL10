<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class streetAccidentRelatedSignaling extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'streetAccidentRelatedSignaling';
    public function Street(){
        $this->hasMany(Street::class);
    }
}
