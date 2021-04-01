<?php


namespace App\View;


use App\Models\product;

class discounted_products
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('discounted_products' , product::where('off' , '>' , 0)->orderBy('id' , 'DESC')->get());
    }
}
