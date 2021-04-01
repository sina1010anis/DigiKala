<?php


namespace App\View;


use App\Models\product;

class spicer_product
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('spicer_products' , product::whereMenu_id(6)->orderBy('id' , 'DESC')->paginate(10));
    }
}
