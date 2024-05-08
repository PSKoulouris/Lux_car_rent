<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cars;

class Cars_type extends Model
{
    use HasFactory;
    // Cars to Cars_type
    public function cars(){
        return $this->belongsToMany(Cars::class);
    }
}
