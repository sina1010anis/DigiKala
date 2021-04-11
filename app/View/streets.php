<?php


namespace App\View;


use App\Models\street;

class streets
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('all_street' , street::all());
    }
}
