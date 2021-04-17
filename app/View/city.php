<?php


namespace App\View;


class city
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('all_city' , \App\Models\city::orderBy('id','asc')->get());
    }
}
