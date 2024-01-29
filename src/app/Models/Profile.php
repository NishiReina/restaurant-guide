<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'img_url',
        'gender',
        'phone',
        'address',
        'birthday',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
