<?php


namespace App\View;


class factor
{
    public function compose(\Illuminate\View\View $view)
    {
        if (auth()->check()) {
            return $view->with('factor_user', \App\Models\factor::orderBy('id', 'desc')->whereUser_id(auth()->user()->id)->get());
        }
    }
}
