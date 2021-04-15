<?php

namespace App\Http\Controllers;

use App\Models\down_all_menu;
use App\Models\product;
use App\Repository\repository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class menuController extends Controller
{
    public function index(down_all_menu $slug)
    {
        //$data=resolve(repository::class)->menu_view($slug->sub_all_menu_id);
        return view('front.section.view_menu')
            ->with([
                'data'=>resolve(repository::class)->menu_view($slug->sub_all_menu_id),
                'title_filter'=>resolve(repository::class)->title_filter($slug->sub_all_menu_id),
                'attr_filter'=>resolve(repository::class)->attr_filter(),
                'menu_id'=>$slug->sub_all_menu_id
                ]);
    }
    public function test()
    {
        $a=1;
        $c=36;
        while ($a < $c){
            $a+=2;
            if ($a == $c){
                echo 'no';
                break;
            }else{
                echo 'ok';
                break;
            }
        }
    }

}
