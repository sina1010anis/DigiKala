<?php


namespace App\Repository;


use App\Events\ReplyComment;
use App\Models\attr_filter;
use App\Models\comment_product;
use App\Models\product;
use App\Models\title_filter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class repository
{
    public function menu_view($slug)
    {
        return product::where('menu_id' , $slug)->get();
    }
    public function title_filter($slug)
    {
        return title_filter::where('sub_menu_id' , $slug)->get();
    }
    public function attr_filter()
    {
        return attr_filter::get();
    }
    public function select_products($slug)
    {
        return product::whereSlug($slug)->first();
    }

    public function reply_comment($slug)
    {
        return \App\Models\reply_comment::orderBy('id' , 'DESC')->whereComment_id($slug)->get();
    }

    public function like_comment($id)
    {
        if (auth()->check()){
            if (!Cookie::has('dislike_comment'.$id)){
                if (Cookie::has('like_comment'.$id)){
                    echo 'Err Like';
                }else{
                    comment_product::whereId($id)->increment('like');
                    Cookie::queue('like_comment'.$id,'user'.auth()->user()->name,2000000);
                    echo 'Ok Like';
                }
            }else{
                echo 'Err Like';
            }
        }else{
            echo 'not Login';
        }

    }

    public function dislike_comment($id)
    {
        if (auth()->check()){
            if (!Cookie::has('like_comment'.$id)){
                if (Cookie::has('dislike_comment'.$id)){
                    echo 'Err Dis Like';
                }else{
                    comment_product::whereId($id)->increment('dislike');
                    Cookie::queue('dislike_comment'.$id,'user'.auth()->user()->name,2000000);
                    echo 'Ok Dis Like';
                }
            }else{
                echo 'Err Dis Like';
            }
        }else{
            echo 'not Login';
        }
    }

    public function new_reply_comment(Request $request, $id)
    {
        $email = auth()->user()->email;
        $v=$request->validate([
            'text' => 'required|min:10'
        ]);
        event(new ReplyComment($id , $request->text , $email));
    }
}
