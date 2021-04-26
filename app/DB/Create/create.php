<?php


namespace App\DB\Create;


use App\Events\ReplyComment;
use App\Models\attr_comment;
use App\Models\attr_product;
use App\Models\basket;
use App\Models\comment_product;
use App\Models\product;
use App\Models\save_product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class create
{
    public function like_comment($id){
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
    public function new_comment(Request $request){
        $comment_product = new comment_product();
        $attr_comment_good = new attr_comment();
        $attr_comment_bad = new attr_comment();
        if ($request->ajax()){
            $v=$request->validate([
                'title' => 'required',
                'comment' => 'required'
            ]);
            $comment_product_id=comment_product::orderBy('id' , 'DESC')->first();
            $comment_product->title = $request->title;
            $comment_product->text = $request->comment;
            $comment_product->status =1;
            $comment_product->user_id = auth()->user()->id;
            $comment_product->product_id = $request->id;
            $vote_good_json=json_encode($request->vote_good,JSON_FORCE_OBJECT);
            $vote_bad_json=json_encode($request->vote_bad,JSON_FORCE_OBJECT);
            $comment_product->vote_good = $vote_good_json;
            $comment_product->vote_bad = $vote_bad_json;
            $comment_product->save();
        }
    }

    public function filter_product(Request $request)
    {
        $product_send='';
        $data = attr_product::whereIn('attr_filter_id' , $request->item_filter)->pluck('product_id');
        $arr = json_decode($data , true);
        $AD = array_unique($arr);
        $products = product::whereIn('id' , $AD)->get();
        function add_off($off , $price){
            if ($off > 0){
                echo '
                                                   <div class="add-off-product">
                                        <a class="number-off-price">'.$off.'%</a>
                                        <p class="view-products-slider-price-back-off">'.$price.' تومان</p>
                                    </div>
                       ';
            }elseif ($off == 0){
                echo '<p class="price-product-menu">' . $price . 'تومان' . '</p>';

            }
        }
        foreach ($products as $product ){
            $i_off=$product->off;
            $i_image=$product->image;
            $i_slug=$product->slug;
            $i_name=$product->name;
            $i_price=$product->price;
            $product_send.='<div class="products-menu">'.
                '<img class="img-product-menu" src="'.url('data/image/image product/').'/'.$i_image.'" alt="img-product-menu">'.
                '<a href="'.route('product.show' , ['slug'=>$i_slug]).'"><p  class="p-product-menu">'.$i_name.'</p></a>'.
                //add_off($i_off,$i_price)
                '<p class="price-product-menu">' . $i_price . 'تومان' . '</p>'
                .'</div>';
        }
        return $product_send;
    }

    public function save_product(Request $request)
    {
        if ($request->ajax()){
            $count = save_product::where(['product_id'=>$request->id , 'user_id' => auth()->user()->id])->count();
            if ($count == 0){
                $save_product = new save_product();
                $save_product->product_id = $request->id;
                $save_product->user_id = auth()->user()->id;
                $save_product->save();
                return 'ok';
            }else{
                return 'no';
            }

        }
    }

    public function plus_card($slug)
    {
        $card = new basket();
        if (auth()->check()){
            $count = basket::where(['user_id' => auth()->user()->id , 'product_id' => $slug->id])->count();
            if ($count == 0){
                if ($slug->off > 0){
                    $price_back = $slug->price * ($slug->off / 100);
                    $price_next = $slug->price - $price_back;
                    $card->product_id = $slug->id;
                    $card->user_id = auth()->user()->id;
                    $card->number = 1;
                    $card->total_price =$price_next;
                    $card->save();
                    return back()->with('msg' , 'محصول به سبد خرید شما اضافه شد');
                }else{
                    $card->product_id = $slug->id;
                    $card->user_id = auth()->user()->id;
                    $card->number = 1;
                    $card->total_price =$slug->price;
                    $card->save();
                    return back()->with('msg' , 'محصول به سبد خرید شما اضافه شد');
                }
            }else{
                basket::where(['user_id' => auth()->user()->id , 'product_id' => $slug->id])->increment('number');
                return back()->with('msg' , 'محصول به سبد خرید شما اضافه شد');
            }
        }else {
            return redirect()->route('/login');
        }
    }

    public function searchProduct(Request $request)
    {
        $data = '';
        $product = product::where('name' , 'LIKE' , '%'.$request->text.'%')->get();
        foreach ($product as $item){
            $image = $item->image;
            $name = $item->name;
            $off = $item->off;
            $data .='<a href="'.route('product.show' , ['slug'=>$item->slug]).'">'.
                '<img src="'.'data/image/image product/'.'/'.$image.'">'.
                '<span class="name-product-search set-font color-b-700 f-12 ">'.$name.'</span>'

                .'</a>'.'<div class="line fl-right"></div>';
        }
        return $data;
    }
}
