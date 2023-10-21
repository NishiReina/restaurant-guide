<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopFeature extends Model
{
    use HasFactory;

    public function feature(){
        return $this->belongsTo('App\Models\Feature');
    }

    public function shop(){
        return $this->belongsTo('App\Models\Shop');
    }
}
