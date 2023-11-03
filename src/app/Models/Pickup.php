<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pickup extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'shop_id',
        'review_id',
    ];

    public function review(){
        return $this->belongsTo('App\Models\Review');
    }

    public function shop(){
        return $this->belongsTo('App\Models\Shop');
    }
}
