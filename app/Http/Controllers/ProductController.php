<?php

namespace App\Http\Controllers;

use App\Models\attr_product;
use App\Models\comment_product;
use App\Models\product;
use App\Repository\repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProductController extends Controller
{
    public function show(product $slug)
    {
        return view('front.section.product_view')
            ->with([
                'data' => resolve(repository::class)->select_products($slug->slug),
            ]);
    }

    public function set_like(Request $request)
    {
        resolve(repository::class)->like_comment($request->id);
    }
    public function set_dis_like(Request $request)
    {
        resolve(repository::class)->dislike_comment($request->id);
    }

    public function replyComment($id , Request $request)
    {
        resolve(repository::class)->new_reply_comment($request , $id);
        return redirect()->back()->with('msg' , 'نظر شما بعد از تایید مدیر ثبت خواهد شد');
    }

    public function newComment(Request $request)
    {
        return resolve(repository::class)->new_comment($request);
    }

    public function filterProduct(Request $request)
    {
        return resolve(repository::class)->filter_product($request);
    }
    public function saveProduct(Request $request){
        return resolve(repository::class)->save_product($request);
    }

    public function plusCard(product $slug)
    {
        return resolve(repository::class)->plus_card($slug);
    }

    public function searchProduct(Request $request)
    {
        return resolve(repository::class)->searchProduct($request);
    }

    public function deleteProduct(Request $request)
    {
        return resolve(repository::class)->deleteProduct($request);
    }
    public function vsProduct(Request $request){
        $data = '';
        $fir = product::whereId($request->id)->first();
        $product = product::where('name' , 'LIKE' , '%'.$request->name.'%')->whereMenu_id($fir->menu_id)->get();
        foreach ($product as $item){
            $image = $item->image;
            $name = $item->name;
            $off = $item->off;
            $data .='<div class="view-product-and-vs">'.
                '<img src="'.url('data/image/image product').'/'.$image.'" alt="'.$name.'" title="'.$name.'">'.
                '<span class="view-name-product-vs set-font color-b-700 f-13">'.$name.'</span>'
                .'</div>';
        }
        return $data;
    }

    public function searchVsProduct(Request $request)
    {
        $data = '';
        $fir = product::whereId($request->id)->first();
            $image = $fir->image;
            $data .='<div class="view-product-vs-2" @click="saveProduct_vs_2('.$fir->id.')">'.
                '<img src="'.url('data/image/image product').'/'.$image.'" alt="'.$fir->name.'" title="'.$fir->name.'">'
                .'</div>';
        return $data;
    }
    public function VsStart( $id_1, $id_2){
        if ($id_1 != 0 || $id_2 != 0){
            $product_1=product::whereId($id_1)->first();
            $product_1_count=product::whereId($id_1)->count();
            $product_2=product::whereId($id_2)->first();
            $product_2_count=product::whereId($id_2)->count();
            if ($product_1_count == 1 || $product_2_count == 1){
                if ($product_1->menu_id != $product_2->menu_id){
                    return redirect()->back()->with('msg' , 'مقدار اشتباه وارد شده است');
                }else {
                    $attr_product_1=attr_product::whereProduct_id($product_1->id)->get();
                    $attr_product_2=attr_product::whereProduct_id($product_2->id)->get();
                    return view('front.section.product_vs' , compact('product_1','product_2' , 'attr_product_1' , 'attr_product_2'));
                }
            }else{
                return redirect()->back()->with('msg' , 'مقدار اشتباه وارد شده است');
            }
        }else {
            return redirect()->back()->with('msg' , 'مقدار اشتباه وارد شده است');
        }


    }
}
