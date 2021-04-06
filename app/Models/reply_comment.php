<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reply_comment extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function comment_products(){
        return $this->belongsTo(comment_product::class);
    }
    public function users(){
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }
}
