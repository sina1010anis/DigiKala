<?php


namespace App\Repository\Seller\Image;


use Illuminate\Http\Request;

interface UploadInterface
{
    public function tmp(Request $request);
    public function set_name();
    public function move();
}
