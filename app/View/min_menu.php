<?php


namespace App\View;

use \Illuminate\View\View;
class min_menu
{
    public function compose(View  $view)
    {
        return $view->with('min_menus' , \App\Models\min_menu::orderBy('id','asc')->get());
    }
}
