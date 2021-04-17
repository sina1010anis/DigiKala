<?php


namespace App\View;


use App\Models\comment_product;

class comment_all_panel_admin
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('comment_all_panel_admin' , comment_product::orderBy('id','desc')->paginate(10));
    }
}
