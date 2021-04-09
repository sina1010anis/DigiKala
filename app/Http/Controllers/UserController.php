<?php

namespace App\Http\Controllers;

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
        return view('user.section.comment');
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
}
