<?php


namespace App\View;


use App\Models\product;

class tools_mobile
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('mobile_tools' , product::whereMenu_id(1)->paginate(10));
    }
}
