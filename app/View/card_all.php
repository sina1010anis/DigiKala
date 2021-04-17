<?php


namespace App\View;


use App\Models\basket;

class card_all
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('cred_all' , basket::orderBy('id','desc')->paginate(5));
    }
}
