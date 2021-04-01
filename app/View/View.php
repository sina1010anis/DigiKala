<?php


namespace App\View;


class View
{
    public function handle()
    {
        \Illuminate\Support\Facades\View::composer(['*'] , min_menu::class);
        \Illuminate\Support\Facades\View::composer(['*'] , all_menu::class);
        \Illuminate\Support\Facades\View::composer(['*'] , sub_all_menu::class);
        \Illuminate\Support\Facades\View::composer(['*'] , banner_slider::class);
        \Illuminate\Support\Facades\View::composer(['*'] , slider::class);
        \Illuminate\Support\Facades\View::composer(['*'] , discounted_products::class);
        \Illuminate\Support\Facades\View::composer(['*'] , banner_up::class);
        \Illuminate\Support\Facades\View::composer(['*'] , market_product::class);
        \Illuminate\Support\Facades\View::composer(['*'] , product_mobile::class);
        \Illuminate\Support\Facades\View::composer(['*'] , banner_center::class);
        \Illuminate\Support\Facades\View::composer(['*'] , tools_mobile::class);
        \Illuminate\Support\Facades\View::composer(['*'] , watch_product::class);
        \Illuminate\Support\Facades\View::composer(['*'] , spicer_product::class);
    }
}
