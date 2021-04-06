<?php


namespace App\View;


use App\Models\product;

class products
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('products_all' , product::orderBy('id' , 'DESC')->get());
    }
}
