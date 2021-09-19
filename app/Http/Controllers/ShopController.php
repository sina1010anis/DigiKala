<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        if (auth()->check()){
            if (auth()->user()->action == 2){
                $data = product::whereSeller(auth()->user()->id)->get();
                $user = User::find(auth()->user()->id);
                return view('front.section.shop_panel' , compact('data','user'));
            }
        }
        return 'OK';
    }

    public function view_product_shop($name)
    {
        $data = product::whereSeller($name)->get();
        $user = User::find($name);
        return view('front.section.shop_view' , compact('data' , 'user'));
    }
}
