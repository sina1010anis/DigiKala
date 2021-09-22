<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $guarded =[];


    public function all_menus(){
        return $this->belongsTo(sub_all_menu::class , 'menu_id' , 'id');
    }
    public function down_all_menus(){
        return $this->belongsTo(down_all_menu::class , 'sub_menu_id' , 'id');
    }
    public function brands(){
        return $this->belongsTo(brand::class  , 'brand_id' ,'id');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sellers(){
        return $this->belongsTo(User::class , 'seller','id');
    }
}
