<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopGunre extends Model
{
    use HasFactory;

    public function shop(){
        return $this->belongsTo('App\Models\Shop');
    }

    public function gunre(){
        return $this->belongsTo('App\Models\Gunre');
    }
}
