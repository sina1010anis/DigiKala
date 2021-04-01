<?php


namespace App\View;


use App\Models\product;

class market_product
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('market_products' , product::orderBy('id' , 'DESC')->where('menu_id' , '>=', 34)->where('menu_id' , '<=' , 38)->paginate(8));
    }
}
