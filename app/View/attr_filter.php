<?php


namespace App\View;


class attr_filter
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('attr_filter' , \App\Models\attr_filter::orderBy('id' , 'desc')->paginate(5));
    }
}
