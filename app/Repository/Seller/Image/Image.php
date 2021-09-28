<?php


namespace App\Repository\Seller\Image;


use App\Models\image_product;
use App\Repository\Core\Tools;

class Image extends Tools
{
    public function create($name , $id){
        image_product::create([
            'alt_title' => $name,
            'address' => $name,
            'product_id' => $id,
        ]);
        return $this;
    }
}
