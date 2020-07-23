<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Wt
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $route = $request->url();
        $url = substr($route , 7, 9);
        if(!strstr($url,'www.')){
            $jump_url = substr_replace($route,'www.',7,0);
            return header('location:'.$jump_url);exit();
        } else {
            return $next($request);
        }
    }
}
