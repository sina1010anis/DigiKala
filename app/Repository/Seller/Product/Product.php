<?php


namespace App\Repository\Seller\Product;


use App\Repository\Core\Tools;
use Illuminate\Http\Request;

abstract class Product extends Tools
{
    public $file;
    public $name;
    public function tmp(Request $request)
    {
        $this->file = $request->file('image');
        return $this;
    }

    public function set_name()
    {
        $this->name = $this->file->getClientOriginalName();
        return $this;
    }
    public function get_name(){
        return $this->name;
    }
    public function move()
    {
        $this->file->move(public_path('/data/image/image product/'), $this->name);
        return $this;
    }
}
