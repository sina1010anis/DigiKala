<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class save_product extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'save_product';
    public $timestamps = false;

    public function products()
    {
        return $this->belongsTo(product::class , 'product_id','id');
    }
    public function user()
    {
        return $this->belongsTo(User::class , 'user_id','id');
    }
}
