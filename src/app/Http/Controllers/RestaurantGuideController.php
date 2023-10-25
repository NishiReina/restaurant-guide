<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Feature;
use App\Models\Shop;

class RestaurantGuideController extends Controller
{
    public function top(){
        $regions = Region::all();
        $features = Feature::inRandomOrder()->take(4)->get();
        return view('top', compact('regions', 'features'));
    }

    public function detail(Shop $shop){
        
        return view('detail', compact('shop'));
    }
}
