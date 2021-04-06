<?php


namespace App\View;


class image_product
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('image_products' , \App\Models\image_product::all());
    }
}
