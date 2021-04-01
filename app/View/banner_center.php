<?php


namespace App\View;


class banner_center
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('banner_centers' , \App\Models\banner_center::orderBy('id' , 'DESC')->get());
    }
}
