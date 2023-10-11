<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangeRequest extends Model
{
    use HasFactory;

    public function shopImportant(){
        return $this->belongsTo('App\Models\ShopImportant');
    }
}
