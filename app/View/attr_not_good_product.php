<?php


namespace App\View;


class attr_not_good_product
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('attr_not_good_product' , \App\Models\attr_comment::whereModel(0)->orderBy('id' , 'DESC')->get());
    }
}
