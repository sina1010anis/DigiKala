<?php

namespace App\Models;

use App\View\properties_product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attr_product extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function title_filters(){
        return $this->belongsTo(title_filter::class ,'title_filter_id' , 'id');
    }
    public function attr_filters(){
        return $this->belongsTo(attr_filter::class ,'attr_filter_id' , 'id');
    }
    public function products(){
        return $this->belongsTo(product::class , 'product_id' , 'id');
    }
    public $timestamps = false;
}
