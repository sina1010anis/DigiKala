<?php


namespace App\View;


class user_all
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('users' , \App\Models\User::orderBy('id','desc')->paginate(5));
    }
}
