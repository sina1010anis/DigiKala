<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class basket extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function products(){
        return $this->belongsTo(product::class , 'product_id' ,'id');
    }
    public function users(){
        return $this->hasMany(User::class , 'user_id' , 'id');
    }
}
