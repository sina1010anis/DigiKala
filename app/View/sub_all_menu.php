<?php


namespace App\View;


class sub_all_menu
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('sub_all_menus' , \App\Models\sub_all_menu::orderBy('id' , 'ASC')->get());
    }
}
