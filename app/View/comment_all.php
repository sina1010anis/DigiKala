<?php


namespace App\View;


use App\Models\comment_product;

class comment_all
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('comments' , comment_product::whereStatus(1)->get());
    }
}
