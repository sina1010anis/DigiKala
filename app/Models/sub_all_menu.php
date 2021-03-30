<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_all_menu extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function down_all_menus(){
        return $this->hasMany(down_all_menu::class ,'sub_all_menu_id' ,'id');
    }

    public $timestamps =false;
}
