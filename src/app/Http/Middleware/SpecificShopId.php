<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\ChangeRequest;
use Illuminate\Support\Facades\Auth;

class SpecificShopId
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $change_request = $request->route()->parameter('change_request');
        if(Auth::guard('admin')->check()){
            return $next($request);
        }else if(Auth::guard('shop')->check()){
            if($change_request->shop_id == Auth::id()){
                return $next($request);
            }
            
            return response()->view('error.404');
        }
        return response()->view('error.404');
    }
}
