<?php


namespace App\View;


use App\Models\basket;

class my_basket
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('my_basket_count' , basket::whereUser_id(auth()->user()->id)->count());
    }
}
