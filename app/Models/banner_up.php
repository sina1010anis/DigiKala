<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banner_up extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function products(){
        return $this->belongsTo(product::class , 'product_id' , 'id');
    }
    public $timestamps = false;
}
