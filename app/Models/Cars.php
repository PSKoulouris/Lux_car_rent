<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cars_type;

class Cars extends Model
{
    use HasFactory;
    //defining many-to-many relation
    public function carsType(){
        return $this->belongsToMany(Cars_type::class);
    }
   
}
