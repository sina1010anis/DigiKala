<?php


namespace App\View;


use App\Models\banner_slide;

class banner_slider
{
    public function compose(\Illuminate\View\View $view){
        return $view->with('banner_sliders' , banner_slide::orderBy('id' , 'asc')->get());
    }
}
