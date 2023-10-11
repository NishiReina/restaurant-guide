<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopThumbnail extends Model
{
    use HasFactory;

    public function ShopThumbnailFeature(){
        return $this->hasMany('App\Models\ShopThumbnailFeature');
    }
}
