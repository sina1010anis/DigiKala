<?php


namespace App\Repository\Seller\Product;


use App\Models\attr_product;
use Illuminate\Http\Request;

class AttrProduct
{
    public function create(Request $request , $i , $menu)
    {
        attr_product::create([
            'title_filter_id' => $i->id,
            'attr_filter_id' => 0,
            'product_id' => $request->id,
            'menu_id' => $menu,
        ]);
    }
}
