<?php


namespace App\View;


class user
{
    public function compose(\Illuminate\View\View $view){
        if (auth()->check()){
            return $view->with('user_one' , \App\Models\User::whereId(auth()->user()->id)->first());
        }
    }
}
