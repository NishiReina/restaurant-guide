<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'status',
        'number',
        'date',
        'time',
        'shop_id',
        'user_id',
    ];

    public function shop(){
        return $this->belongsTo('App\Models\Shop');
    }

    public function review(){
        return $this->hasOne('App\Models\Review');
    }
}
