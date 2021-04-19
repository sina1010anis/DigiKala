<?php


namespace App\Repository;


use App\DB\Create\create;
use App\Events\ReplyComment;
use App\Models\attr_comment;
use App\Models\attr_filter;
use App\Models\attr_product;
use App\Models\basket;
use App\Models\comment_product;
use App\Models\product;
use App\Models\property;
use App\Models\save_product;
use App\Models\title_filter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class repository
{
    /**
     * @var create
     */
    private $create;

    public function __construct(create $create)
    {
        $this->create = $create;
    }

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
        return $this->create->like_comment($id);
    }

    public function dislike_comment($id)
    {
        return $this->create->dislike_comment($id);
    }

    public function new_reply_comment(Request $request, $id)
    {
        return $this->create->new_reply_comment($request,$id);
    }

    public function new_comment(Request $request )
    {
        return $this->create->new_comment($request);

    }

    public function filter_product(Request $request)
    {
        return $this->create->filter_product($request);
    }

    public function save_product(Request $request)
    {
        return $this->create->save_product($request);
    }

    public function plus_card($slug)
    {
        return $this->create->plus_card($slug);
    }

    public function searchProduct(Request $request)
    {
        return $this->create->searchProduct($request);
    }

    public function deleteProduct(Request $request)
    {
        if ($request->ajax()){
            basket::whereId($request->id)->delete();
            return 'ok';
        }
    }
}
