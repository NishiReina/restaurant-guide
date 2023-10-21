<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function reservation(){
        return $this->belongsTo('App\Models\Reservation');
    }

    public function pickup(){
        return $this->hasOne('App\Models\Pickup');
    }
}
