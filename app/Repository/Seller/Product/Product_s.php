<?php


namespace App\Repository\Seller\Product;


use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Product_s extends Product
{
    public $product;
    public function __construct(\App\Models\product $product)
    {
        $this->product =$product;
    }
    public function upload(Request $request){
        $this->tmp($request)->set_name()->move();
        return $this;
    }
    public function create(Request $request){
        \App\Models\product::create([
            'name' => $request->name,
            'price' => $request->price,
            'slug' => Str::slug($request->name),
            'image' => $this->get_name(),
            'description' => $request->description,
            'off' => $request->off,
            'menu_id' => $request->menu_id,
            'su_menu_id' => $request->sub_menu_id,
            'sub_menu_id' => $request->down_all_menu,
            'brand_id' => $request->brand_id,
            'seller' => auth()->user()->id,
        ]);
        return $this;
    }
    public function save(){
        $this->product->save();
        return $this;
    }

}
