<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class streetAlignment extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'streetAlignment';
    public function Street(){
        $this->hasMany(Street::class);
    }
}
