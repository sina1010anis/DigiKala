<?php


namespace App\View;


use App\Models\property;

class properties_product
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('properties_product' , property::all());
    }
}
