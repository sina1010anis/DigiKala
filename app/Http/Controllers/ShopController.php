<?php

namespace App\Http\Controllers;

use App\Http\Requests\imageRequest;
use App\Http\Requests\newAttrProductSeller;
use App\Http\Requests\newProductRequest;
use App\Http\Requests\updateProductSeller;
use App\Models\attr_filter;
use App\Models\attr_product;
use App\Models\down_all_menu;
use App\Models\factor;
use App\Models\image_product;
use App\Models\product;
use App\Models\property;
use App\Models\sub_all_menu;
use App\Models\title_filter;
use App\Models\User;
use App\Repository\Auth\Seller;
use App\Repository\Seller\Image\StaticFactoryImage;
use App\Repository\Seller\Image\Upload;
use App\Repository\Seller\Product\AttrProduct;
use App\Repository\Seller\Product\Product_s;
use App\Repository\Seller\Product\ProductSeller;
use App\Repository\Seller\User\UserSeller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShopController extends Controller
{
    public $seller;
    public $userSeller;
    public $productSeller;
    public const STATUS = true;
    public $staticFactoryImage;
    public $product_s;
    public $attrProduct;
    public function __construct(AttrProduct $attrProduct,Product_s $product_s,Seller $seller , UserSeller $userSeller , ProductSeller $productSeller , StaticFactoryImage $staticFactoryImage){
        $this->seller = $seller;
        $this->userSeller = $userSeller;
        $this->productSeller = $productSeller;
        $this->staticFactoryImage = $staticFactoryImage;
        $this->product_s = $product_s;
        $this->attrProduct = $attrProduct;
    }
    public function index()
    {
        $status = $this->seller->auth_check()->auth_seller();
        $data = $this->productSeller->select_seller(auth()->user()->id);
        $user = $this->userSeller->find(auth()->user()->id);
        return ($status) ? view('front.section.shop_panel' , compact('data','user')) : redirect('index.page');
    }

    public function view_product_shop($name)
    {
        $data = $this->productSeller->select_seller($name);
        $user = $this->userSeller->find($name);
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
        $status = $this->seller->auth_check()->auth_seller();
        $user = $this->userSeller->find(auth()->user()->id);
        return ($status) ? view('front.section.shop_panel_profile' , compact('user')) : redirect('index.page');
    }

    public function delete_product_seller(Request $request)
    {
        $status = $this->seller->auth_check()->auth_seller();
        $count = product::whereId($request->id)->count();
        return ($status && $count) ? product::whereId($request->id)->delete(): 'NO';
    }
    public function edit_product_seller(product $name){
        return ($this->productSeller->check_product_seller($name)) ? view('front.section.shop_panel')->with(['data' => $name , 'edit' => self::STATUS  , 'down_all_menu' => down_all_menu::all()]) : abort(404);
    }
    public function edit_product_seller_send(updateProductSeller $request , product $name){
        return ($this->productSeller->check_product_seller($name)) ? $this->productSeller->edit_step_1($request , $name)->back('با موفقیت اعمال شد') : abort(404);
    }
    public function edit_product_menu_seller_send(Request $request , product $name){
        return ($this->productSeller->check_product_seller($name)) ? $this->productSeller->edit_step_menu($request , $name)->back('با موفقیت اعمال شد') : abort(404);
    }
    public function new_attr_product_seller(newAttrProductSeller $request , product $name , property $property){
        return ($this->productSeller->check_product_seller($name)) ? $this->productSeller->new_attr($request , $name , $property)->back('با موفقیت اعمال شد') : abort(404);
    }
    public function delete_attr_product_seller(Request $request){
        $status = $this->seller->auth_check()->auth_seller();
        $count = property::whereId($request->id)->get();
        return ($status && $count) ? property::whereId($request->id)->delete(): 'NO';
    }
    public function send_attr_product_seller(Request $request){
        $status = $this->seller->auth_check()->auth_seller();
        $data = attr_product::whereId($request->id_attr)->first();
        return ($status && $data->count() > 0) ? $data->update(['attr_filter_id' => $request->attr]): 'NO';
    }
    public function delete_image_product_seller(Request $request){
        $status = $this->seller->auth_check()->auth_seller();
        $data = image_product::whereId($request->id)->first();
        return ($status && $data->count() > 0) ? $data->delete(): 'NO';
    }
    public function new_image_product_seller(imageRequest $request , $id)
    {
        $name = $this->staticFactoryImage::upload()->tmp($request)->set_name();
        $name->move();
        return $this->staticFactoryImage::image()->create($name->get_name() , $id)->back('با موفقیت اضافه شد');
    }
    public function new_product_seller(){
        $down_all_menu = down_all_menu::all();
        return view('front.section.shop_new_product' , compact('down_all_menu'));
    }
    public function new_product_seller_send(newProductRequest $request , product $product){
        return $this->product_s->upload($request)->create($request)->backTo('/shop/index' ,'با موفقیت اضافه شد');
    }
    public function builder_filter(Request $request , attr_product $attr_product){
        $product = product::find($request->id);
        $count = attr_product::whereProduct_id($request->id)->count();
        if($count <= 0){
            $filter = title_filter::whereSub_menu_id($product->su_menu_id)->get();
            if($filter->count() > 0){
                foreach($filter as $i){
                    $this->attrProduct->create($request , $i , $product->menu_id);
                }
                return 'OK';
            }else{
                return 'NO';
            }
        }else{
            return 'NO';
        }

    }
}
