<?php


namespace App\View;


use App\Models\address;

class addresses
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('addresses' , address::paginate(5));
    }
}
