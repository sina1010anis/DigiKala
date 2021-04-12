<?php

namespace App\Http\Controllers;

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
}
