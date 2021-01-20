<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class redacteur
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->user()->role_id == '2' || $request->user()->role_id == '3' || $request->user()->role_id == '4'){
            return $next($request);
        }else{
            return redirect()->back();
        }
    }
}
