<?php


namespace App\View;


class attr_good_product
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('attr_good_product' , \App\Models\attr_comment::whereModel(1)->orderBy('id' , 'DESC')->get());
    }
}
