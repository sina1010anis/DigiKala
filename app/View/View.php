<?php


namespace App\View;


class View
{
    public function handle()
    {
        \Illuminate\Support\Facades\View::composer(['*'] , min_menu::class);
        \Illuminate\Support\Facades\View::composer(['*'] , all_menu::class);
        \Illuminate\Support\Facades\View::composer(['*'] , sub_all_menu::class);
    }
}
