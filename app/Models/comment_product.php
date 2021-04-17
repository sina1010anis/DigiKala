<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment_product extends Model
{
    use HasFactory;
    protected $guarded =[];

    protected $attributes =['dislike' => 0 , 'like' => 0];

    public function products(){
        return $this->belongsTo(product::class, 'product_id' , 'id');
    }
    public function users(){
        return $this->belongsTo(User::class ,'user_id' , 'id');
    }
}
