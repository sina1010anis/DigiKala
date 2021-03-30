<?php


namespace App\View;


class all_menu
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('all_menus' , \App\Models\all_menu::orderBy('id' , 'ASC')->get());
    }
}
