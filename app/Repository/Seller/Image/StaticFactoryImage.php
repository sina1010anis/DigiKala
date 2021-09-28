<?php


namespace App\Repository\Seller\Image;


class StaticFactoryImage
{
    public static function upload()
    {
        return new Upload();
    }
    public static function image()
    {
        return new Image();
    }
}
