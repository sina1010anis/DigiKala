<?php


namespace App\View;


use App\Models\factor;

class factor_all
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('factor_all' , factor::orderBy('id','desc')->get());
    }
}
