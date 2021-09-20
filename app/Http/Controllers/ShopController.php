<?php

namespace App\Http\Controllers;

use App\Models\factor;
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

    public function buy()
    {
        if (auth()->check()){
            if (auth()->user()->action == 2){
                $user = User::find(auth()->user()->id);
                return view('front.section.shop_panel_buy' , compact('user'));
            }
        }
    }

    public function profile()
    {
        if (auth()->check()){
            if (auth()->user()->action == 2){
                $user = User::find(auth()->user()->id);
                return view('front.section.shop_panel_profile' , compact('user'));
            }
        }
        return 'OK';
    }

    public function delete_product_seller(Request $request)
    {
        $count = product::whereId($request->id)->count();
        if ($count){
             product::whereId($request->id)->delete();
            return 'OK';
        }else{
            return 'NO';
        }

    }
}
