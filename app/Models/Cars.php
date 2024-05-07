<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    //defining many-to-many relation
    public function carsType(){
        return $this->belongsToMany('app\Cars_type');
    }
}
