<?php


namespace App\DB\Create;


use App\Models\address;
use App\Models\attr_filter;
use App\Models\banner_center;
use App\Models\banner_up;
use App\Models\basket;
use App\Models\brand;
use App\Models\city;
use App\Models\comment_product;
use App\Models\image_product;
use App\Models\product;
use App\Models\property;
use App\Models\reply_comment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class create_admin
{
    public function delete_address($id){
        address::whereId($id)->delete();
        return redirect()->back()->with('msg', 'با موفقیت حذف شد');
    }
    public function delete_attr_filter($id){
        attr_filter::whereId($id)->delete();
        return redirect()->back()->with('msg', 'با موفقیت حذف شد');
    }

    public function create_attr_filter(Request $request)
    {
        $v = $request->validate(['name' => 'required']);
        $attrFilter = new attr_filter();
        $attrFilter->name = $request->name;
        $attrFilter->title_filter_id = $request->title_filter_id;
        $attrFilter->save();
        return redirect()->back()->with('msg', 'یک اتیم جدید به فیلر اضافه شده');
    }
    public function create_banner_center(Request $request){
        $v = $request->validate(['name' => 'required', 'image' => 'image']);
        $bannerCenter = new banner_center();
        $tmp = $request->file('file');
        $name = rand(0, 100) . $tmp->getClientOriginalName();
        $tmp->move(public_path('/data/image/image banner/'), $name);
        $bannerCenter->product_id = $request->product_id;
        $bannerCenter->title = $request->name;
        $bannerCenter->alt = $request->name;
        $bannerCenter->address = $name;
        $bannerCenter->save();
        return redirect()->back()->with('msg', 'یک بنر جدید به سایت اضافه شده');
    }

    public function delete_banner_center($id)
    {
        banner_center::whereId($id)->delete();
        return redirect()->back()->with('msg', 'با موفقیت حذف شد');
    }
    public function delete_banner_up($data){
        banner_up::whereId($data->id)->delete();
        return redirect()->back()->with('msg', 'با موفقیت حذف شد');
    }

    public function delete_brand($data)
    {
        brand::whereId($data->id)->delete();
        return redirect()->back()->with('msg', 'با موفقیت حذف شد');
    }

    public function create_banner_up(Request $request)
    {
        $v = $request->validate(['name' => 'required', 'image' => 'image']);
        $bannerCenter = new banner_up();
        $tmp = $request->file('file');
        $name = rand(0, 100) . $tmp->getClientOriginalName();
        $tmp->move(public_path('/data/image/image banner/'), $name);
        $bannerCenter->product_id = $request->product_id;
        $bannerCenter->title = $request->name;
        $bannerCenter->alt = $request->name;
        $bannerCenter->address = $name;
        $bannerCenter->status = 1;
        $bannerCenter->save();
        return redirect()->back()->with('msg', 'یک بنر جدید به سایت اضافه شده');
    }

    public function create_brand(Request $request)
    {
        $v = $request->validate(['name' => 'required', 'image' => 'image']);
        $bannerCenter = new brand();
        $tmp = $request->file('file');
        $name = rand(0, 100) . $tmp->getClientOriginalName();
        $tmp->move(public_path('/data/image/image_brand/'), $name);
        $bannerCenter->name = $request->name;
        $bannerCenter->image = $name;
        $bannerCenter->save();
        return redirect()->back()->with('msg', 'یک برند جدید به سایت اضافه شده');
    }

    public function delete_basket($data)
    {
        basket::whereId($data->id)->delete();
        return redirect()->back()->with('msg', 'با موفقیت حذف شد');
    }
    public function delete_city($data){
        city::whereId($data)->delete();
        return redirect()->back()->with('msg', 'با موفقیت حذف شد');
    }

    public function delete_comment_admin($data)
    {
        \App\Models\message::whereId($data)->delete();
        return redirect()->back()->with('msg', 'با موفقیت حذف شد');
    }

    public function create_city(Request $request)
    {
        $v = $request->validate(['name' => 'required']);
        $city = new city();
        $city->name = $request->name;
        $city->save();
        return redirect()->back()->with('msg', 'یک برند جدید به سایت اضافه شده');
    }

    public function create_comment_admin(Request $request)
    {
        $v = $request->validate(['title' => 'required', 'text' => 'required']);
        $bannerCenter = new \App\Models\message();
        $bannerCenter->title = $request->title;
        $bannerCenter->text = $request->text;
        $bannerCenter->user_id = $request->user_id;
        $bannerCenter->save();
        return redirect()->back()->with('msg', 'با موفقیت اضافه شد');
    }

    public function inactive_comment_product($data)
    {
        if ($data->status == 0) {
            comment_product::whereId($data->id)->update(['status' => 1]);
        } else {
            comment_product::whereId($data->id)->update(['status' => 0]);
        }
        return redirect()->back()->with('msg', 'تغییر کرد');
    }

    public function deleteCommentProduct($id)
    {
        comment_product::whereId($id)->delete();
        return redirect()->back()->with('msg', 'با موفقیت حذف شد');
    }

    public function deleteReplyComment($id)
    {
        reply_comment::whereId($id)->delete();
        return redirect()->back()->with('msg', 'با موفقیت حذف شد');
    }

    public function deleteProduct($id)
    {
        product::whereSlug($id)->delete();
        return redirect()->back()->with('msg', 'با موفقیت حذف شد');
    }
    public function createProduct(Request $request){
        $v = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'des' => 'required',
            'off' => 'required',
            'img' => 'required',
        ]);
        $tmp_img = $request->file('img');
        $name_img = rand(0, 200) . $tmp_img->getClientOriginalName();
        $tmp_img->move(public_path('data/image/image product'), $name_img);
        $product = new product();
        $product->name = $request->input('name');
        $product->slug = Str::slug($request->input('name'));
        $product->price = $request->input('price');
        $product->description = $request->input('des');
        $product->off = $request->input('off');
        $product->menu_id = $request->menu_id;
        $product->sub_menu_id = $request->sub_menu;
        $product->brand_id = $request->brand;
        $product->image = $name_img;
        $product->save();
        return redirect()->back()->with('msg', 'با موفقیت اضافه شد');
    }

    public function updateProduct($data , $id)
    {
        product::whereId($id)->update(['name' => $data->name,'slug'=>Str::slug($data->name), 'price' => $data->price, 'description' => $data->description, 'off' => $data->off, 'menu_id' => $data->menu_id, 'sub_menu_id' => $data->sub_menu_id, 'brand_id' => $data->brand_id]);
        return redirect()->route('admin.product')->with('msg', 'با موفقیت ویرایش شد');

    }

    public function deleteImageProduct($id)
    {
        image_product::whereId($id)->delete();
        return redirect()->back()->with('msg', 'با موفقیت حذف شد');
    }

    public function deleteProperty($id)
    {
        property::whereId($id)->delete();
        return redirect()->back()->with('msg', 'با موفقیت حذف شد');
    }

    public function createImageProduct(Request $request)
    {
        $v = $request->validate([
            'name' => 'required',
        ]);
        $tmp_img = $request->file('image');
        $name_img = rand(0, 200) . $tmp_img->getClientOriginalName();
        $tmp_img->move(public_path('data/image/image one product'), $name_img);
        $product = new image_product();
        $product->alt_title = $request->input('name');
        $product->address = $name_img;
        $product->product_id = $request->product_id;
        $product->save();
        return redirect()->back()->with('msg', 'با موفقیت اضافه شد');
    }

    public function createProperty(Request $request){
        $v = $request->validate([
            'name' => 'required',
            'title' => 'required',
        ]);
        $product = new property();
        $product->name = $request->input('name');
        $product->title = $request->input('title');
        $product->product_id = $request->product_id;
        $product->save();
        return redirect()->back()->with('msg', 'با موفقیت اضافه شد');
    }
}
