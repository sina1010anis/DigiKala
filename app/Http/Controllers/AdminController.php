<?php

namespace App\Http\Controllers;

use App\Models\address;
use App\Models\attr_filter;
use App\Models\banner_center;
use App\Models\basket;
use App\Models\comment_product;
use App\Models\product;
use App\Repository\repository_admin;
use App\View\comment_all;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.section.index');
    }
    public function address()
    {
        return view('admin.section.address');
    }
    public function menuTop()
    {
        return view('admin.section.menuTop');
    }
    public function menuSub()
    {
        return view('admin.section.menuSub');
    }
    public function menuDown()
    {
        return view('admin.section.menuDown');
    }
    public function menuHeader()
    {
        return view('admin.section.menuHeader');
    }
    public function attrFilter()
    {
        return view('admin.section.attrFilter');
    }
    public function titleFilter()
    {
        return view('admin.section.titleFilter');
    }
    public function bannerCenter()
    {
        return view('admin.section.bannerCenter');
    }
    public function bannerUp()
    {
        return view('admin.section.bannerUp');
    }
    public function slider()
    {
        return view('admin.section.slider');
    }
    public function card()
    {
        return view('admin.section.card');
    }
    public function brand()
    {
        return view('admin.section.brand');
    }
    public function city()
    {
        return view('admin.section.city');
    }
    public function street()
    {
        return view('admin.section.street');
    }
    public function commentProduct()
    {
        return view('admin.section.commentProduct');
    }
    public function factor()
    {
        return view('admin.section.factor');
    }
    public function imageProduct()
    {
        return view('admin.section.imageProduct');
    }
    public function commentAdmin()
    {
        return view('admin.section.commentAdmin');
    }
    public function product()
    {
        return view('admin.section.product');
    }
    public function property()
    {
        return view('admin.section.property');
    }
    public function saveProduct()
    {
        return view('admin.section.saveProduct');
    }
    public function user()
    {
        return view('admin.section.user');
    }
    public function commentReply()
    {
        return view('admin.section.commentReply');
    }
    public function exitPage()
    {
        auth()->logout();
    }
    public function deleteAddress(address $id){
        return resolve(repository_admin::class)->deleteAddress($id);
    }
    public function deleteBannerCenter(banner_center $id){
        return resolve(repository_admin::class)->deleteBannerCenter($id);
    }
    public function deleteAttrFilter(attr_filter $id)
    {
        return resolve(repository_admin::class)->deleteAttrFilter($id);
    }
    public function createAttrFilter(Request $request)
    {
        return resolve(repository_admin::class)->createAttrFilter($request);
    }
    public function createBannerCenter(Request $request)
    {
        return resolve(repository_admin::class)->createBannerCenter($request);
    }

    public function createBannerUp(Request $request)
    {
        return resolve(repository_admin::class)->createBannerUp($request);
    }
    public function deleteBannerUp(Request $request)
    {
        return resolve(repository_admin::class)->deleteBannerUp($request);
    }
    public function deleteBrand(Request $request)
    {
        return resolve(repository_admin::class)->deleteBrand($request);
    }
    public function createBrand(Request $request)
    {
        return resolve(repository_admin::class)->createBrand($request);
    }

    public function deleteBasket(basket $id)
    {
        return resolve(repository_admin::class)->deleteBasket($id);
    }

    public function deleteCity($id)
    {
        return resolve(repository_admin::class)->deleteCity($id);
    }

    public function createCity(Request $request)
    {
        return resolve(repository_admin::class)->createCity($request);
    }

    public function deleteCommentAdmin($id)
    {
        return resolve(repository_admin::class)->deleteCommentAdmin($id);
    }

    public function createCommentAdmin(Request $request)
    {
        return resolve(repository_admin::class)->createCommentAdmin($request);
    }

    public function inactiveCommentProduct(comment_product $id)
    {
        return resolve(repository_admin::class)->inactiveCommentProduct($id);
    }

    public function deleteCommentProduct($id)
    {
        return resolve(repository_admin::class)->deleteCommentProduct($id);
    }

    public function deleteReplyComment($id)
    {
        return resolve(repository_admin::class)->deleteReplyComment($id);
    }
    public function deleteProduct($id)
    {
        return resolve(repository_admin::class)->deleteProduct($id);
    }

    public function createProduct(Request $request)
    {
        return resolve(repository_admin::class)->createProduct($request);
    }

    public function editProduct(product $id)
    {
        return resolve(repository_admin::class)->editProduct($id);
    }
    public function updateProduct(Request $request , $id){
        return resolve(repository_admin::class)->updateProduct($request , $id);
    }
    public function deleteImageProduct($id){
        return resolve(repository_admin::class)->deleteImageProduct($id);
    }
    public function createImageProduct(Request $request){
        return resolve(repository_admin::class)->createImageProduct($request);
    }

    public function deleteProperty($id)
    {
        return resolve(repository_admin::class)->deleteProperty($id);
    }
    public function createProperty(Request $request){
        return resolve(repository_admin::class)->createProperty($request);
    }
}
