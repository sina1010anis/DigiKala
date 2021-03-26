<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attr_comment extends Model
{
    use HasFactory;


    protected $guarded =[];

    public function comment_products(){
        return $this->belongsTo(comment_product::class );
    }


    public $timestamps =false;
}
