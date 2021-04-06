<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment_product extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function products(){
        return $this->belongsTo(product::class);
    }
    public function users(){
        return $this->belongsTo(User::class ,'user_id' , 'id');
    }
}
