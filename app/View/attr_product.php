<?php


namespace App\View;


use App\Models\attr_filter;

class attr_product
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('attr_products' , \App\Models\attr_product::all());
    }
}
