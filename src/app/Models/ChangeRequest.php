<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChangeRequest extends Model
{
    use HasFactory, SoftDeletes;

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
        // 'img_url',
        // 'title',
        // 'pr',
        'shop_id',
        'deleted_at'
    ];

    public function shop(){
        return $this->belongsTo('App\Models\Shop');
    }
    
    public function area(){
        return $this->belongsTo('App\Models\Area');
    }

    public function gunre(){
        return $this->belongsTo('App\Models\Gunre');
    }

    public function shopRestRequests(){
        return $this->hasMany('App\Models\ShopRestRequest');
    }
}
