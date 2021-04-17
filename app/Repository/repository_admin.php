<?php


namespace App\Repository;


use App\Models\address;
use App\Models\attr_filter;
use App\Models\banner_center;
use App\Models\banner_up;
use App\Models\basket;
use App\Models\brand;
use App\Models\city;
use App\Models\comment_product;
use App\Models\reply_comment;
use App\View\message;
use Illuminate\Http\Request;

class repository_admin
{
    public function deleteAddress($data){
        address::whereId($data->id)->delete();
        return redirect()->back()->with('msg','با موفقیت حذف شد');
    }
    public function deleteAttrFilter($data){
        attr_filter::whereId($data->id)->delete();
        return redirect()->back()->with('msg','با موفقیت حذف شد');
    }

    public function createAttrFilter(Request $request)
    {
        $v= $request->validate(['name' => 'required']);
        $attrFilter = new attr_filter();
        $attrFilter->name = $request->name;
        $attrFilter->title_filter_id = $request->title_filter_id;
        $attrFilter->save();
        return redirect()->back()->with('msg','یک اتیم جدید به فیلر اضافه شده');

    }

    public function createBannerCenter(Request $request)
    {
        $v= $request->validate(['name' => 'required' , 'image'=>'image']);
        $bannerCenter = new banner_center();
        $tmp =  $request->file('file');
        $name = rand(0,100).$tmp->getClientOriginalName();
        $tmp->move(public_path('/data/image/image banner/'),$name);
        $bannerCenter->product_id = $request->product_id;
        $bannerCenter->title = $request->name;
        $bannerCenter->alt = $request->name;
        $bannerCenter->address = $name;
        $bannerCenter->save();
        return redirect()->back()->with('msg','یک بنر جدید به سایت اضافه شده');
    }
    public function deleteBannerCenter($data){
        banner_center::whereId($data->id)->delete();
        return redirect()->back()->with('msg','با موفقیت حذف شد');
    }
    public function deleteBannerUp($data){
        banner_up::whereId($data->id)->delete();
        return redirect()->back()->with('msg','با موفقیت حذف شد');
    }
    public function deleteBrand($data){
        brand::whereId($data->id)->delete();
        return redirect()->back()->with('msg','با موفقیت حذف شد');
    }
    public function createBannerUp(Request $request)
    {
        $v= $request->validate(['name' => 'required' , 'image'=>'image']);
        $bannerCenter = new banner_up();
        $tmp =  $request->file('file');
        $name = rand(0,100).$tmp->getClientOriginalName();
        $tmp->move(public_path('/data/image/image banner/'),$name);
        $bannerCenter->product_id = $request->product_id;
        $bannerCenter->title = $request->name;
        $bannerCenter->alt = $request->name;
        $bannerCenter->address = $name;
        $bannerCenter->status = 1;
        $bannerCenter->save();
        return redirect()->back()->with('msg','یک بنر جدید به سایت اضافه شده');
    }

    public function createBrand(Request $request)
    {
        $v= $request->validate(['name' => 'required' , 'image'=>'image']);
        $bannerCenter = new brand();
        $tmp =  $request->file('file');
        $name = rand(0,100).$tmp->getClientOriginalName();
        $tmp->move(public_path('/data/image/image_brand/'),$name);
        $bannerCenter->name = $request->name;
        $bannerCenter->image = $name;
        $bannerCenter->save();
        return redirect()->back()->with('msg','یک برند جدید به سایت اضافه شده');
    }

    public function deleteBasket($data)
    {
        basket::whereId($data->id)->delete();
        return redirect()->back()->with('msg','با موفقیت حذف شد');
    }

    public function deleteCity($data)
    {
        city::whereId($data)->delete();
        return redirect()->back()->with('msg','با موفقیت حذف شد');
    }
    public function deleteCommentAdmin($data)
    {
        \App\Models\message::whereId($data)->delete();
        return redirect()->back()->with('msg','با موفقیت حذف شد');
    }
    public function createCity(Request $request)
    {
        $v= $request->validate(['name' => 'required']);
        $city = new city();
        $city->name = $request->name;
        $city->save();
        return redirect()->back()->with('msg','یک برند جدید به سایت اضافه شده');
    }

    public function createCommentAdmin(Request $request)
    {
        $v= $request->validate(['title' => 'required' , 'text'=>'required']);
        $bannerCenter = new \App\Models\message();
        $bannerCenter->title = $request->title;
        $bannerCenter->text = $request->text;
        $bannerCenter->user_id = $request->user_id;
        $bannerCenter->save();
        return redirect()->back()->with('msg','با موفقیت اضافه شد');
    }

    public function inactiveCommentProduct($data)
    {
        if ($data->status == 0){
            comment_product::whereId($data->id)->update(['status' => 1]);
        }else {
            comment_product::whereId($data->id)->update(['status' => 0]);
        }
        return redirect()->back()->with('msg','تغییر کرد');
    }

    public function deleteCommentProduct($id)
    {
        comment_product::whereId($id)->delete();
        return redirect()->back()->with('msg','با موفقیت حذف شد');
    }

    public function deleteReplyComment($id)
    {
        reply_comment::whereId($id)->delete();
        return redirect()->back()->with('msg','با موفقیت حذف شد');
    }
}
