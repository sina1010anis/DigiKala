<?php


namespace App\View;


use App\Models\product;

class products_all_admin
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('products_all_admin' , product::orderBy('id' , 'desc')->paginate(10));
    }
}
