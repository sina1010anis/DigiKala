<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class all_menu extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function sub_all_menus(){
        return $this->hasMany(sub_all_menu::class ,'all_menu_id' ,'id');
    }
    public function products(){
        return $this->hasMany(product::class ,'menu_id' ,'id');
    }

    public $timestamps =false;
}
