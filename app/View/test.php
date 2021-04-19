<?php


namespace App\View;


use Illuminate\Support\Facades\DB;

class test
{
    public function compose(\Illuminate\View\View $view){
        return $view->with('city_test' , \App\Models\city::orderBy('id','asc')->get());
    }
}
