<?php


namespace App\View;


class sub_ll_menu
{
    public function compose(\Illuminate\View\View $view){
        return $view->with('sub_ll_menu' , \App\Models\down_all_menu::orderBy('id' ,'desc')->get());
    }
}
