<?php


namespace App\View;


class title_filter
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('title_filter' , \App\Models\title_filter::all());
    }
}
