<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopRest extends Model
{
    use HasFactory;

    public function rest(){
        return $this->belongsTo('App\Models\Rest');
    }

    public function shop(){
        return $this->belongsTo('App\Models\Shop');
    }
}
