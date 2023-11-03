<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangeRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'postcode',
        'address',
        'start_time',
        'end_time',
        'min_price',
        'max_price',
        'area_id',
        'gunre_id',
        'img_url',
        'title',
        'pr',
        'shop_id'
    ];

    public function shop(){
        return $this->belongsTo('App\Models\Shop');
    }
}
