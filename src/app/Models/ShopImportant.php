<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopImportant extends Model
{
    use HasFactory;

    public function shop(){
        return $this->belongsTo('App\Models\Shop');
    }

    public function area(){
        return $this->hasOne('App\Models\Area');
    }

    public function gunre(){
        return $this->hasOne('App\Models\Gunre');
    }

    public function changeRequest(){
        return $this->hasOne('App\Models\ChangeRequest');
    }
}
