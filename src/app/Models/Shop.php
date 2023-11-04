<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Laravel\Fortify\TwoFactorAuthenticatable;
// use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class Shop extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    // use HasProfilePhoto;
    use Notifiable;
    // use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    // protected $appends = [
    //     'profile_photo_url',
    // ];

    public function area(){
        return $this->belongsTo('App\Models\Area');
    }

    public function gunre(){
        return $this->belongsTo('App\Models\Gunre');
    }

    public function ShopFeatures(){
        return $this->hasMany('App\Models\ShopFeature');
    }
    
    public function shopRests(){
        return $this->hasMany('App\Models\ShopRest');
    }

    public function reservations(){
        return $this->hasMany('App\Models\Reservation');
    }

    public function pickups(){
        return $this->hasMany('App\Models\Pickup');
    }

    public function getReviews(){
        $reviews = [];
        foreach($this->reservations as $resevation){
            array_push($reviews, $resevation->review);
        }
        return $reviews;
    }

}
