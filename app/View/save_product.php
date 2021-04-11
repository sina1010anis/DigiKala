<?php


namespace App\View;


class save_product
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('save_products' , \App\Models\save_product::all());
    }
}
