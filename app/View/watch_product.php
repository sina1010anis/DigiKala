<?php


namespace App\View;


use App\Models\product;

class watch_product
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('watch_products' , product::whereMenu_id(4)->orderBy('id','DESC')->paginate(10));
    }
}
