<?php


namespace App\View;


use App\Models\brand;

class brand_all
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('brand_all' , brand::all());
    }
}
