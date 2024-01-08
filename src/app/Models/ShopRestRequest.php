<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopRestRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'rest_id',
        'shop_id',
        'change_request_id'
    ];

    public function rest(){
        return $this->belongsTo('App\Models\Rest');
    }

    public function shop(){
        return $this->belongsTo('App\Models\Shop');
    }

}
