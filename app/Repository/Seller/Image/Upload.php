<?php


namespace App\Repository\Seller\Image;


use Illuminate\Http\Request;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UploadedFileInterface;

class Upload implements UploadInterface
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
        $this->file->move(public_path('/data/image/image one product/'), $this->name);
        //return $this;
    }
}
