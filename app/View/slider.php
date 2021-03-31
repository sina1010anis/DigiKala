<?php


namespace App\View;


class slider
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('sliders' , \App\Models\slider::orderBy('id' , 'ASC')->get());
    }
}
