<?php


namespace App\View;


use App\Models\product;

class product_mobile
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('mobile_products' , product::whereMenu_id(2)->paginate(15));
    }
}
