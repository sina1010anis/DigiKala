<?php

namespace App\Http\Controllers;

use App\Models\address;
use App\Repository\repository_admin;
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
}
