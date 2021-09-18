<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class role
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
        if (auth()->check()){
            if (auth()->user()->action == 1){
                return $next($request);
            }if (auth()->user()->action == 2){
                return redirect()->route('shop.index');
            }
        }
        return redirect()->route('login');
    }
}
