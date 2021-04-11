<?php


namespace App\View;


use App\Models\address;

class address_all
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('address_all' , address::orderBy('id'  , 'desc')->get());
    }
}
