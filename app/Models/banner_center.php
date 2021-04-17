<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banner_center extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function products(){
        return $this->belongsTo(product::class , 'product_id' , 'id');
    }
}
