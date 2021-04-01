<?php


namespace App\View;


class banner_up
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('banner_ups' , \App\Models\banner_up::orderBy('id' , 'DESC')->where('status' , 1)->paginate(4));
    }
}
