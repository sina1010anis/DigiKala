<?php


namespace App\Filter;


class sort
{
    public function handle($request, \Closure $next){
        if (!\request()->has('sort')){
            return $next($request);
        }
        $bind=$next($request);
        return $bind->orderBy('id',\request()->sort);
    }

}
