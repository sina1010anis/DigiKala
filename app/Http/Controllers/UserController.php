<?php

namespace App\Http\Controllers;

use App\Models\comment_product;
use App\Repository\repository_user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('authController');
    }
    public function index()
    {
        return view('user.section.index_page');
    }
    public function order()
    {
        return view('user.section.order');
    }
    public function list()
    {
        return view('user.section.list');
    }
    public function comment()
    {
        $comment_all=comment_product::orderBy('id' , 'DESC')->whereUser_id(auth()->user()->id)->get();
        return view('user.section.comment' , compact('comment_all'));
    }
    public function location()
    {
        return view('user.section.location');
    }
    public function card()
    {
        return view('user.section.card');
    }
    public function message()
    {
        return view('user.section.message');
    }
    public function view()
    {
        return view('user.section.profile');
    }
    public function exitUser()
    {
        auth()->logout();
        return redirect('/');
    }
    public function newAddress(Request $request)
    {
        resolve(repository_user::class)->newAddress($request);
        return back()->with('msg' , 'ادرس جدید ثبت شد');
    }
    public function setAddress(Request $request)
    {
        return resolve(repository_user::class)->setAddress($request);
    }
    public function editName(Request $request)
    {
        return resolve(repository_user::class)->editName($request);
    }
    public function editEmail(Request $request)
    {
        return resolve(repository_user::class)->editEmail($request);
    }
    public function editMobile(Request $request)
    {
        return resolve(repository_user::class)->editMobile($request);
    }
    public function editCode(Request $request)
    {
        return resolve(repository_user::class)->editCode($request);
    }
    public function editPassword(Request $request)
    {
        return resolve(repository_user::class)->editPassword($request);
    }
}
