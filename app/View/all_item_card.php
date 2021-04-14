<?php


namespace App\View;


use App\Models\basket;

class all_item_card
{
    public function compose(\Illuminate\View\View $view)
    {
        if (auth()->check()) {
            return $view->with('all_item_card', basket::orderBy('id', 'desc')->whereUser_id(auth()->user()->id)->whereStatus(0)->get());
        }
    }
}
