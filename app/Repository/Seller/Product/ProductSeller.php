<?php


namespace App\Repository\Seller\Product;


use App\Models\product;
use App\Models\property;
use App\Models\User;
use App\Repository\Core\Tools;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductSeller extends Tools
{
    public function select_seller($id)
    {
        return product::whereSeller($id)->get();
    }
    public function check_product_seller($product){
        return ($product->seller == auth()->user()->id) ? true : false;
    }

    public function edit_step_1(Request $request , $name)
    {
        $name->name = $request->name;
        $name->price = $request->price;
        $name->description = $request->description;
        $name->off = $request->off;
        $name->brand_id = $request->brand_id;
        $name->slug =Str::slug($request->name);
        $name->save();
        return $this;
    }
    public function edit_step_menu(Request $request , $name){
        $name->menu_id = $request->menu_id;
        $name->sub_menu_id = $request->sub_menu_id;
        $name->save();
        return $this;
    }

    public function new_attr(Request $request , $name , property $property)
    {
        $property->title = $request->title_attr;
        $property->name = $request->name_attr;
        $property->product_id = $name->id;
        $property->save();
        return $this;
    }
}
